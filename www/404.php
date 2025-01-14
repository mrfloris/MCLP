<?php
  header("HTTP/1.1 404 Not Found");
  define('MCLP_OK', true); // used in .php files for includes/ and content/
  require_once __DIR__ . '/includes/config.php'; /* get the global configuration stuff */
  require_once __DIR__ . '/includes/header.php'; /* get the header stuff */
?>
  <!-- Main Content Area for Section Switching -->
  <div id="main-content" class="container my-4 text-start" style="max-width: 900px;">
	<h1>404: Page Not Found</h1>
	<p>Looks like you made a typo.</p>
	<p><a href="https://<?= $server_ip ?>">TRY AGAIN | HOME</a></p>
  </div>
<?php require_once __DIR__ . '/includes/footer.php'; /* get the footer stuff */ ?>