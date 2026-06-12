/* ============================================================
   THE SHALA — retreat-sri-lanka.js
   Accordion for retreat details (Practical Information section)
   ============================================================ */
(function () {
  "use strict";

  /* ── ACCORDION ─────────────────────────────────────────────
     Independent open/close — multiple panels can be open
     simultaneously (unlike course.js which is single-open).
  ─────────────────────────────────────────────────────────── */
  document.querySelectorAll(".acc-trigger").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var open = btn.classList.toggle("open");
      var panel = btn.nextElementSibling;
      panel.classList.toggle("open", open);
      btn.setAttribute("aria-expanded", open ? "true" : "false");
    });
  });
})();
