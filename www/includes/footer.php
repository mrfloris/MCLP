<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}
?>
  <!-- Horizontal line before footer -->
  <hr style="border-color: #444; margin: 0;" />

  <!-- Footer (smaller, light gray) -->
  <footer class="text-center py-3" style="color: #aaa; font-size: 0.85rem;">
    <div class="container" style="max-width: 900px;">
      <small>
        <p class="mb-2">
          <!-- Updated line -->
          Copyright &copy; <?= $server_name_short ?> - <?= $server_ip ?>
          1977 - <span id="currentYear"></span>
        </p>
        <p class="mb-1">
          <!-- Updated line -->
          Please note that the team members nor <?= $server_ip ?> claim
          or pretend to be, nor are associated with, and are not supported by
          Mojang or Microsoft, Discord, or any other brand name.
          / Server owner: <?= $server_name ?>
          (<a href="mailto:info@<?= $server_ip ?>" style="color: #aaa;">
            info@<?= $server_ip ?>
          </a>)
         / website version <?= $server_website_version ?></p>
      </small>
    </div>
  </footer>

  <!-- jQuery (local) -->
  <script src="vendor/jquery.min.js"></script>

  <!-- Bootstrap Bundle (local) - includes Popper -->
  <script src="vendor/bootstrap.bundle.min.js"></script>

  <!-- Your custom script for copy-to-clipboard, section toggling, etc. -->
  <script src="/assets/script.js"></script>
</body>
</html>
