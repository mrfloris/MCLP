<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}
/*
  Need to add more pages? Just add another list, and then update index.php to include the files, 
  then go to the /content/ folder and add the new file.php you're including.
*/
?>
<div class="mb-3 d-flex justify-content-center align-items-center flex-wrap">
  <a class="btn btn-primary mx-2" href="#" onclick="loadSection('info-section')">
    Info
  </a>
  <a class="btn btn-primary mx-2" href="#" onclick="loadSection('discord-section')">
    Discord
  </a>
  <a class="btn btn-primary mx-2" href="#" onclick="loadSection('vote-section')">
    Vote
  </a>
  <a class="btn btn-primary mx-2" href="#" onclick="loadSection('ranks-section')">
    Ranks
  </a>
  <a class="btn btn-primary mx-2" href="#" onclick="loadSection('store-section')">
    Store
  </a>
  <a class="btn btn-primary mx-2" href="#" onclick="loadSection('faq-section')">
    FAQ
  </a>
  <a class="btn btn-primary mx-2" href="#" onclick="loadSection('contact-section')">
    Contact
  </a>
</div>
