/* ============================================================
   THE SHALA — new-student-advice.js
   Accordion for all sections on the new student info page.
   Single-open per accordion group.
   ============================================================ */
(function () {
  "use strict";

  /* ── ACCORDION ─────────────────────────────────────────────
     Each accordion group operates independently.
     Within a group, only one item can be open at a time.
  ─────────────────────────────────────────────────────────── */
  document.querySelectorAll(".acc-trigger").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var item = btn.closest(".acc-item");
      var accordion = btn.closest(".accordion");
      var isOpen = item.classList.contains("open");

      /* Close all items in this group */
      accordion.querySelectorAll(".acc-item").forEach(function (i) {
        i.classList.remove("open");
      });

      /* Open the clicked item if it was closed */
      if (!isOpen) {
        item.classList.add("open");
      }
    });
  });
})();
