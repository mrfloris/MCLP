<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}
?>
    <!-- Home Section (default) -->
    <section id="home-section" class="page-section">
      <p>
        We are a (very new) community of survival Minecraft gamers that love to hang out, make friends, and try to survive in a <strong><?= $server_description ?></strong>.
      </p>
      <div>
        <button class="btn btn-success btn-lg mt-2" onclick="loadSection('info-section')">
          Learn More
        </button>
      </div>
    </section>
    <!-- /Home Section -->