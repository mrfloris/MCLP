<?php
// A check to block direct access
if (!defined('MCLP_OK')) {
    die('Direct access not permitted!');
}
?>
    <!-- FAQ Section -->
    <section id="faq-section" class="page-section" style="display: none;">
      <h2>Frequently Asked Questions</h2>
      <hr />
      <div class="accordion" id="faqAccordion">

        <!-- FAQ #1 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqOne">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="false"
              aria-controls="collapseOne"
            >
              What is the server IP?
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse"
            aria-labelledby="faqOne"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              The IP is <code><?= $server_ip ?></code>. You can connect on <?= $server_type ?> by clicking 
              “Add Server” and pasting the IP in the “Server Address” field, 
              then just click on join!
            </div>
          </div>
        </div>

        <!-- FAQ #2 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqTwo">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo"
            >
              What server version is this?
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="faqTwo"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              We are currently on <code><?= $server_version ?></code>.
            </div>
          </div>
        </div>

        <!-- FAQ #3 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqThree">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThree"
              aria-expanded="false"
              aria-controls="collapseThree"
            >
              Java or Bedrock Edition?
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="faqThree"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              This is a <strong><?= $server_type ?> only</strong> server. You can join 
              with the above IP and version.
            </div>
          </div>
        </div>

        <!-- FAQ #4 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqFour">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFour"
              aria-expanded="false"
              aria-controls="collapseFour"
            >
              What is spawn about?
            </button>
          </h2>
          <div
            id="collapseFour"
            class="accordion-collapse collapse"
            aria-labelledby="faqFour"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              This is where you end up on first join, and where you can take a 
              breather to learn about the server without being targeted by others. 
              PVP is turned off here. From here you can pick where to go next.
            </div>
          </div>
        </div>

        <!-- FAQ #5 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqFive">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFive"
              aria-expanded="false"
              aria-controls="collapseFive"
            >
              What is <?= $server_name_short ?> world about?
            </button>
          </h2>
          <div
            id="collapseFive"
            class="accordion-collapse collapse"
            aria-labelledby="faqFive"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              This is the main reason for our server: play, survive, or die trying! 
            </div>
          </div>
        </div>

        <!-- FAQ #6 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqSix">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseSix"
              aria-expanded="false"
              aria-controls="collapseSix"
            >
              How do I respawn?
            </button>
          </h2>
          <div
            id="collapseSix"
            class="accordion-collapse collapse"
            aria-labelledby="faqSix"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              When you die, you go to the spawn world, or your last bed, or your home. 
            </div>
          </div>
        </div>

        <!-- FAQ #7 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqSeven">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseSeven"
              aria-expanded="false"
              aria-controls="collapseSeven"
            >
              Can I set a home?
            </button>
          </h2>
          <div
            id="collapseSeven"
            class="accordion-collapse collapse"
            aria-labelledby="faqSeven"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              Try <code>/sethome</code> or sleep in a bed.
            </div>
          </div>
        </div>

        <!-- FAQ #8 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqEight">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseEight"
              aria-expanded="false"
              aria-controls="collapseEight"
            >
              Can I tp or tpa to others?
            </button>
          </h2>
          <div
            id="collapseEight"
            class="accordion-collapse collapse"
            aria-labelledby="faqEight"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              No, you cannot /tp to a coordinate, but yes, you can send a teleport request to another player using <code>/tpa theirname</code>. Note that it's up to them to decline it.
            </div>
          </div>
        </div>

        <!-- FAQ #9 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqNine">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseNine"
              aria-expanded="false"
              aria-controls="collapseNine"
            >
              Wait, the worlds get reset?
            </button>
          </h2>
          <div
            id="collapseNine"
            class="accordion-collapse collapse"
            aria-labelledby="faqNine"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              Yes, we plan seasons. We reset worlds periodically and consider your 
              suggestions and feedback to make a better experience with newer 
              Minecraft versions. We might let existing players access old seasons, 
              while new members join the fresh season worlds.
            </div>
          </div>
        </div>

        <!-- FAQ #10 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqTen">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTen"
              aria-expanded="false"
              aria-controls="collapseTen"
            >
              Are there kits?
            </button>
          </h2>
          <div
            id="collapseTen"
            class="accordion-collapse collapse"
            aria-labelledby="faqTen"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              Yes, use <code>/kits</code>.
            </div>
          </div>
        </div>

        <!-- FAQ #11 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqEleven">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseEleven"
              aria-expanded="false"
              aria-controls="collapseEleven"
            >
              Voting?
            </button>
          </h2>
          <div
            id="collapseEleven"
            class="accordion-collapse collapse"
            aria-labelledby="faqEleven"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              Yes, type <code>/vote</code> to support the server.
            </div>
          </div>
        </div>

        <!-- FAQ #12 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqTwelve">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwelve"
              aria-expanded="false"
              aria-controls="collapseTwelve"
            >
              Can I link my Minecraft to the Discord?
            </button>
          </h2>
          <div
            id="collapseTwelve"
            class="accordion-collapse collapse"
            aria-labelledby="faqTwelve"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              Yes! Go in-game and type <code>/discord link</code>. You’ll receive 
              a code – send that code in a Direct Message to our bot on Discord, and 
              you'll be all linked up!
            </div>
          </div>
        </div>

        <!-- FAQ #13 -->
        <div class="accordion-item bg-dark border border-secondary">
          <h2 class="accordion-header" id="faqThirteen">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThirteen"
              aria-expanded="false"
              aria-controls="collapseThirteen"
            >
              I seriously have more questions than I started...
            </button>
          </h2>
          <div
            id="collapseThirteen"
            class="accordion-collapse collapse"
            aria-labelledby="faqThirteen"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              No worries! On our <a href="https://<?= $server_discord_link ?>"><?= $server_discord_link ?></a> channel <code>#support</code>, 
              community members and sometimes our staff will gladly help you 
              when we have the time.
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- /FAQ Section -->