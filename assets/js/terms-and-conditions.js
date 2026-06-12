/* ============================================================
   THE SHALA — terms-and-conditions.js
   Accordion for all T&C sections.
   Multiple panels can be open simultaneously.
   ============================================================ */
(function () {
  "use strict";

  /* ── ACCORDION ─────────────────────────────────────────────
     Each accordion is independent — clicking a trigger toggles
     only its own item. Multiple items can be open at once
     across all accordion groups on the page.
  ─────────────────────────────────────────────────────────── */
  document.querySelectorAll(".acc-trigger").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var item = btn.closest(".acc-item");
      var accordion = btn.closest(".accordion");
      var isOpen = item.classList.contains("open");

      /* Close all items in this accordion group */
      accordion.querySelectorAll(".acc-item").forEach(function (i) {
        i.classList.remove("open");
      });

      /* If it wasn't open, open it */
      if (!isOpen) {
        item.classList.add("open");
      }
    });
  });
})();
