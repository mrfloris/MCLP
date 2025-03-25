<?php

define('MCLP_OK', true); // used in .htaccess for includes/ and content/

// Gracefully handle missing config.php
$config_file = __DIR__ . '/includes/config.php';
$setup_dir = __DIR__ . '/setup/';

if (!file_exists($config_file)) {
    die("<h3>Configuration Error</h3><p>The configuration file <strong>config.php</strong> is missing. Please run the setup script in the <strong>setup/</strong> directory.</p>");
}

// Check if setup/ directory exists, if so prompt deletion for security
if (is_dir($setup_dir)) {
    die("<h3>Security Warning</h3><p>The <strong>setup/</strong> directory still exists. Please delete it from your server for security purposes.</p>");
}

require_once $config_file; /* get the global configuration stuff */
require_once __DIR__ . '/includes/header.php'; /* get the header stuff */
?>

  <!-- Main Content Area for Section Switching -->
  <div id="main-content" class="container my-4 text-start" style="max-width: 900px;">

  <?php
  /* Get the content of the page. 
      You don't want a page to show? Remove it here, and update includes/quicknav.php
      Need a new page? Add it here, and update includes/quicknav.php
  */
  /* Get the content of the page. */
    require_once  __DIR__ . '/content/home.php'; // the default intro text that we display
    require_once  __DIR__ . '/content/info.php'; // the extended version of that intro text
    require_once  __DIR__ . '/content/map.php'; // info about the map, and a link to it
    require_once  __DIR__ . '/content/faq.php'; // discord-faq to website-faq
    require_once  __DIR__ . '/content/discord.php'; // discord info
    require_once  __DIR__ . '/content/vote.php'; // vote info and vote sites
    require_once  __DIR__ . '/content/store.php'; // store info 
    require_once  __DIR__ . '/content/ranks.php'; // store info 
    require_once  __DIR__ . '/content/contact.php'; // how to contact us, includes discord
  ?>

  </div>
  <!-- /Main Content -->

<?php require_once __DIR__ . '/includes/footer.php'; /* get the footer stuff */ ?>
