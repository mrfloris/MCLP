<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}
?>
    <!-- Vote Section -->
    <section id="vote-section" class="page-section" style="display: none;">
      <h2>Vote for <?= $server_name ?></h2>
      <p><strong>Show your support and help our community grow by voting on these sites every 24 hours!</strong></p>
      <p>We currently reward early adopters with <?= $server_vote_rewards ?> for voting, this will change in the near future.</p>
      <ul>
        <li>
          <span class="me-1">🗳️</span>
          <a
            href="<?= $server_vote_site1_url ?>"
            target="_blank"
            class="text-primary"
          >
            <strong>Vote Site: <?= $server_vote_site1_short ?></strong>
          </a>
        </li>
        <li>
          <span class="me-1">🗳️</span>
          <a
            href="<?= $server_vote_site2_url ?>"
            target="_blank"
            class="text-primary"
          >
            <strong>Vote Site: <?= $server_vote_site2_short ?></strong>
          </a>
        </li>
        <li>
          <span class="me-1">🗳️</span>
          <a
            href="<?= $server_vote_site3_url ?>"
            target="_blank"
            class="text-primary"
          >
            <strong>Vote Site: <?= $server_vote_site3_short ?></strong>
          </a>
        </li>
        <li>
          <span class="me-1">🗳️</span>
          <a
            href="<?= $server_vote_site4_url ?>"
            target="_blank"
            class="text-primary"
          >
            <strong>Vote Site: <?= $server_vote_site4_short ?></strong>
          </a>
        </li>
      </ul>
      <p>
        Every vote helps us get discovered by more players – thank you!
      </p>
    </section>
    <!-- /Vote Section -->