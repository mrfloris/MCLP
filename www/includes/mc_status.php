<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}

/**
 * Ping the specified Minecraft server to get status info.
 *
 * @param string $host  The server host (e.g. 'play.example.com')
 * @param int    $port  The server port (usually 25565)
 * @param int    $timeout  Connection timeout in seconds
 * @return array|false  Returns an associative array of server info or false if offline
 */
function pingMinecraftServer($host, $port = 25565, $timeout = 2)
{
    // Open a TCP connection
    $fp = @fsockopen($host, $port, $errno, $errstr, $timeout);
    if (!$fp) {
        // Server is offline or unreachable
        return false;
    }

    // --- 1. Send Handshake Packet ---
    // Protocol version for 1.7+ handshake: 47 (we can send any valid number for modern servers)
    // Next lines build a handshake packet in the Minecraft protocol format:
    $protocol_version = 47;
    $packet = pack('C', 0x00) // Packet ID = 0 (Handshake)
            . pack('C', $protocol_version) // Protocol version
            . pack('C', strlen($host)) . $host // Host string
            . pack('n', $port) // unsigned short (2 bytes)
            . pack('C', 1); // Next state: 1 for status

    // Write the packet length + packet
    sendVarInt($fp, strlen($packet));
    fwrite($fp, $packet);

    // --- 2. Request Status ---
    fwrite($fp, "\x01\x00"); // Request packet

    // --- 3. Read Response ---
    $length = readVarInt($fp); // Full packet length
    if ($length < 10) {
        fclose($fp);
        return false;
    }

    $packetType = readVarInt($fp);
    if ($packetType !== 0x00) {
        // Not a status response
        fclose($fp);
        return false;
    }

    $jsonLength = readVarInt($fp);
    $jsonData   = fread($fp, $jsonLength);

    fclose($fp);

    $data = json_decode($jsonData, true);
    if (!$data) {
        return false;
    }

    return [
        // 'motd'          => $data['description'] ?? '', (commented out, this gave me issues at times)
        'onlinePlayers' => $data['players']['online'] ?? 0,
        'maxPlayers'    => $data['players']['max'] ?? 0,
        // 'version'       => $data['version']['name'] ?? '', (commented out, we have a config.php)
        // 'protocol'      => $data['version']['protocol'] ?? '', (not needed for players)
    ];
}

/**
 * Send a "VarInt" to the socket (Minecraft protocol specific).
 */
function sendVarInt($fp, $data)
{
    while (true) {
        if (($data & 0xFFFFFF80) === 0) {
            fwrite($fp, chr($data));
            return;
        }
        fwrite($fp, chr($data & 0x7F | 0x80));
        $data >>= 7;
    }
}

/**
 * Read a "VarInt" from the socket (Minecraft protocol specific).
 */
function readVarInt($fp)
{
    $value = 0;
    $position = 0;
    while (true) {
        $c = fgetc($fp);
        if ($c === false) {
            return 0;
        }
        $byte = ord($c);
        $value |= ($byte & 0x7F) << $position++ * 7;
        if (($byte & 0x80) != 128) {
            break;
        }
    }
    return $value;
}

/**
 * Main function to retrieve MC status with caching.
 *
 * @param string $host
 * @param int    $port
 * @param int    $cacheSeconds
 * @return array
 */
function getMinecraftStatus($host, $port = 25565, $cacheSeconds = 600)
{
    $cacheFile = __DIR__ . '/mc_status_cache.php';
    /*
        Not caching? Create the file, chmod it 755 and check error.log perhaps.
    */

    // If the cache file exists and is still "fresh", return that.
    if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheSeconds)) {
        // Just include the file to get the $status array
        $status = include $cacheFile;
        return $status;
    }

    // Otherwise, ping the server now
    $serverInfo = pingMinecraftServer($host, $port);
    if ($serverInfo === false) {
        // Offline
        $status = [
            'online'        => false,
            // 'motd'          => '',
            'onlinePlayers' => 0,
            'maxPlayers'    => 0,
            // 'version'       => '',
            // 'protocol'      => '',
            'lastUpdate'    => time(),
        ];
    } else {
        // Online
        $status = [
            'online'        => true,
            // 'motd'          => $serverInfo['motd'],
            'onlinePlayers' => $serverInfo['onlinePlayers'],
            'maxPlayers'    => $serverInfo['maxPlayers'],
            // 'version'       => $serverInfo['version'],
            // 'protocol'      => $serverInfo['protocol'],
            'lastUpdate'    => time(),
        ];
    }

    // Write the status array to a PHP file so we can include it
    $exported = var_export($status, true);
    file_put_contents($cacheFile, "<?php\nreturn $exported;\n");

    return $status;
}
