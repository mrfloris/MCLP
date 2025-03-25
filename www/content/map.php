<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}
?>
    <!-- Map Section -->
    <section id="map-section" class="page-section" style="display: none;">
      <h2>
        <a
          href="http://<?= $server_map_link ?>"
          target="_blank"
          class="title-link"
        >
          ⛰️ View Our <?= $server_map_link ?>
        </a>
      </h2>
      <p>
        Our Live-map for the world is publicly available, and the perfect place to explore the world.
      </p>
      <ul>
        <li>You can click the hamburger menu icon to control settings, quality, and other personal preferences.</li>
        <li>You can click on the markers menu icon to toggle between showing the worldborder and regions, etc.</li>
        <li>You can click on the players menu icon to show and click on player names that are ‘visible’, letting you navigate directly to them (on the map, not in-game).</li>
        <li>You can navigate the map by selecting the 3D perspective, flat view, or point-of-view options.</li>
        <li>If you click the map, you can use your mouse to look around, and the WASD keys to move.</li>
        <li>Use Shift and Space to move up and down in the map.</li>
        <li>It’s a great way to explore as if you’re actually in the game.</li>
      </ul>
      <p>
        Use <code>/map</code> in-game to quickly get the direct url to the live-map
      </p>
    </section>
    <!-- /Map Section -->
