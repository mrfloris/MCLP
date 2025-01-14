<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}
?>
    <!-- Info Section (About, How to join, etc.) -->
    <section id="info-section" class="page-section" style="display: none;">
      <h2>About <?= $server_name ?></h2>
      <p>
        We are a very new community of survival Minecraft gamers that love to hang out, 
        make friends, and try to survive in a <strong><?= $server_description ?></strong>.
      </p>
      <ul>
        <li>server feature 1</li>
        <li>server feature 2</li>
        <li>server feature 3</li>
        <li>server feature 4</li>
      </ul>

      <h2>How to Join</h2>
      <ol>
        <li>Copy our <?= $server_name_short ?> server IP (see top of the page), it is <?= $server_ip ?></li>
        <li>Make sure you are on <em><?= $server_type ?> <?= $server_version ?> (or newer)</em> to connect.</li>
        <li>Once in-game, explore spawn and read the available info.</li>
        <li>In-game, type <code>/rules</code>, and then <code>/rtp</code> when you're ready to begin your adventure!</li>
        <li>Other in-game commands: <code>/discord</code>, <code>/rankup</code>, <code>/kits</code>, and <code>/vote</code></li>
      </ol>
      <h2>Seasons!</h2>
      <p>
        The <?= $server_name_short ?> does have seasons, but we're not rushing to reset anything. In fact, as you can read on our FAQ page, we actually will keep the existing world if we reset for a new season. So legacy players can visit it. 
      </p>
      <p>
        We're currently in season "zero", <?= $server_season_zero ?>, version <?= $server_season_version ?>. We consider this our private and public alpha, and are now in our first public beta. We are taking our time to set things up. We don't really have a date on our mind to start season one.
      </p>
      <p>
        But we are here for the long-run and we respect our players, their playtime, roles, and their builds. So that's why we're taking things slow, and plan in private for the future. While keeping our seasons available to those who played in it. Actually, currently our current world is still pretty small, and we have room to expand. And Mojang hasn't announced any crazy big changes that provokes us to switch things up.
      </p>
    </section>
    <!-- /Info Section -->