<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $server_name ?> - <?= $server_description ?></title>

  <!-- Local Bootstrap CSS (downloaded from official source) -->
  <link rel="stylesheet" href="vendor/bootstrap.min.css">

  <!-- Your own CSS -->
  <link rel="stylesheet" href="/assets/style.css">
</head>
<body class="bg-dark text-white">

  <!-- Main Header (Logo + Quicknav + Title) always visible, centered -->
  <header 
    class="container d-flex flex-column align-items-center justify-content-center text-center py-4"
    style="max-width: 900px; margin: 0 auto"
  >
    <!-- Big Logo (links to index.html) - Centered -->
    <div class="mb-3">
      <a href="https://<?= $server_ip ?>">
        <img
          src="/assets/logo.png"
          alt="<?= $server_name ?> Logo"
          class="img-fluid d-block mx-auto"
          style="width: 420px; height: auto;"
        />
      </a>
    </div>

<?php require_once __DIR__ . '/quicknav.php'; ?>

    <!-- Title -->
    <h1 class="mb-3">Welcome to <strong><?= $server_name ?></strong>.com Server</h1>

    <!-- Server IP (as input field) + copy button, plus smaller subtitle -->
    <p class="mb-1">
      <strong>Server IP:</strong>
      <input
        type="text"
        class="form-control d-inline-block"
        style="width: 240px; margin-left: 0.5rem; margin-right: 0.5rem;"
        value="<?= $server_ip ?>:<?= $server_port ?>"
        readonly
        onclick="copyServerIp()"
      />
      [<a href="#" id="copyBtn" onclick="copyServerIp()">Click to Copy IP ..</a>]
    </p>
    <p class="server-subtitle mb-4">
      <?= $server_description ?> (<?= $server_type ?> <?= $server_version ?>)
<?php
require_once __DIR__ . '/mc_status.php';

$host = $server_ip;
$port = $server_port;
$cacheTime = 600; // 10 minutes

$status = getMinecraftStatus($host, $port, $cacheTime);

if ($status['online']) {
    $onlinePlayers = $status['onlinePlayers'];
    $maxPlayers    = $status['maxPlayers'];

    if ($onlinePlayers == 0) {
        // 0 players online
        $server_status = "Server is <span class=\"server-status-online\">online</span>, but nobody is playing. Be the first!";
    } elseif ($onlinePlayers == 1) {
        // 1 player online
        $server_status = "Server is <span class=\"server-status-online\">online</span>, there is one person playing, join them!";
    } else {
        // More than 1 player online
        $server_status = "Server is <span class=\"server-status-online\">online</span>, there are <code>{$onlinePlayers}</code> out of {$maxPlayers} max playing.";
    }
} else {
    // Server is offline
    $server_status = "Server is <span class=\"server-status-offline\">offline</span>, nobody can play. Somebody call somebody, sos";
}

echo " / $server_status";
?>

    </p>
  </header>
  
  <!-- Horizontal line before footer -->
  <hr style="border-color: #444; margin: 0;" />
