/* ============================================================
   THE SHALA — our-space.js
   Newsletter form — basic validation + feedback state.
   TODO WordPress: wire to Mailchimp / CF7 subscribe action.
   ============================================================ */
(function () {
  "use strict";

  function handleNL(btn) {
    var email = document.getElementById("nlEmail").value.trim();

    if (!email || email.indexOf("@") === -1) {
      btn.textContent = "Enter a valid email";
      btn.style.background = "var(--charcoal-plum)";
      btn.style.color = "white";
      setTimeout(function () {
        btn.textContent = "Subscribe";
        btn.style.background = "";
        btn.style.color = "";
      }, 2500);
      return;
    }

    btn.textContent = "Thank you \u2713";
    btn.style.background = "#2d7a47";
    btn.style.color = "white";
    btn.disabled = true;
  }

  window.handleNL = handleNL;
})();
