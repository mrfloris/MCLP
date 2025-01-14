<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}
?>
    <!-- Discord Section -->
    <section id="discord-section" class="page-section" style="display: none;">
      <h2>
        <a
          href="https://<?= $server_discord_link ?>"
          target="_blank"
          class="title-link"
        >
          💬 Join Our <?= $server_discord_link ?>
        </a>
      </h2>
      <p>
        Our Discord community is the perfect place to connect with players and staff,
        share your in-game experiences, and get updates.
      </p>
      <ul>
        <li>Get help from community members and staff</li>
        <li>Participate in Discord-exclusive events</li>
        <li>Stay in touch even if you can’t log in to Minecraft right now</li>
      </ul>
      <p>
        Use <code>/discord link</code> in-game to link your Minecraft account with our Discord.
      </p>
      <p>
        Feel free to <code><?= $server_discord_owner1 ?></code> or <code><?= $server_discord_owner2 ?></code> to ask a question, but we do have a -community- category where it's perhaps more appropriate to discuss ban-appeals, ask support questions, or apply for staff, etc. We invite you to explore our discord community server.
      </p>
    </section>
    <!-- /Discord Section -->
