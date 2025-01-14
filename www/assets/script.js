/* 
  script.js
  Disclaimer: I wrote most of this but it failed, I couldn't get it to work. 
              I've asked my buddy ChatGPT to help me identify the failure,
              and it rewrote a good portion of the file, and now it works. So yay.
*/

// Set current year dynamically
document.getElementById('currentYear').textContent = new Date().getFullYear();

/**
 * Hide/show sections on the page without a full page reload.
 * The header, big logo, and quicknav remain visible at all times.
 */

function loadSection(sectionId) {
  // Hide all .page-section elements
  document.querySelectorAll('.page-section').forEach(section => {
    section.style.display = 'none';
  });

  // Show the requested section
  document.getElementById(sectionId).style.display = 'block';
}

// Copy the server IP to clipboard (modern approach) and show check mark on success
function copyServerIp() {
  // Now we can build the IP string from `serverConfig`:
  const ipText = serverConfig.ip + ":" + serverConfig.port;
  const copyBtn = document.getElementById('copyBtn');

  navigator.clipboard.writeText(ipText).then(() => {
    copyBtn.textContent = " ✓✓ Yes!! Copied! ✓✓ ";
    // Revert after 2 seconds
    setTimeout(() => {
      copyBtn.textContent = "Click to Copy IP ..";
    }, 2000);
  }).catch(err => {
    console.error("Failed to copy IP:", err);
  });
}

// Default load: show the home section
window.addEventListener('DOMContentLoaded', () => {
  loadSection('home-section');
});
