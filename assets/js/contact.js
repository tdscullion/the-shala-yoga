/* ============================================================
   THE SHALA — contact.js
   Contact form placeholder validation
   TODO WordPress: replace with CF7 / WPForms later.
   ============================================================ */
(function () {
  "use strict";

  window.handleSubmit = function (btn) {
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var message = document.getElementById("message").value.trim();

    if (!name || !email || !message) {
      btn.textContent = "Please complete the required fields";
      btn.style.background = "var(--charcoal-plum)";

      setTimeout(function () {
        btn.textContent = "Send Message";
        btn.style.background = "";
      }, 2500);

      return;
    }

    btn.textContent = "Thank you ✓";
    btn.style.background = "#2d7a47";
    btn.disabled = true;
  };
})();
