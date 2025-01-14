<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}
?>
    <!-- Contact / Additional Info Section -->
    <section id="contact-section" class="page-section" style="display: none;">
      <h2>Contact & Community</h2>
      <p>
        <strong>Have more questions?</strong> Feel free to reach out on our Discord or 
        send us an email at 
        <a href="mailto:info@<?= $server_ip ?>">info@<?= $server_ip ?></a>.
      </p>
      <p>
        <em>
          By the way, if you give us your <?= $server_type ?> Minecraft in-game username when contacting us,
          our admins will know it’s you (and not a random new player)!
        </em>
      </p>

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
        You can also check out our Discord channel again for quick questions,
        live chat, and news.
      </p>
      <p>
        Feel free to <code><?= $server_discord_owner1 ?></code> or <code><?= $server_discord_owner2 ?></code> to ask a question, but we do have a -community- category where it's perhaps more appropriate to discuss ban-appeals, ask support questions, or apply for staff, etc. We invite you to explore our discord community server.
      </p>
    </section>
    <!-- /Contact Section -->