/* ============================================================
   THE SHALA — terms-and-conditions.js
   Accordion for all T&C sections.
   Single-open per accordion group.
   ============================================================ */
(function () {
  "use strict";

  document.querySelectorAll(".acc-trigger").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var item = btn.closest(".acc-item");
      var body = item ? item.querySelector(".acc-body") : null;
      var accordion = btn.closest(".accordion");

      if (!item || !body || !accordion) return;

      var isOpen = item.classList.contains("open");

      accordion.querySelectorAll(".acc-item").forEach(function (i) {
        i.classList.remove("open");

        var b = i.querySelector(".acc-body");
        if (b) {
          b.classList.remove("open");
        }
      });

      if (!isOpen) {
        item.classList.add("open");
        body.classList.add("open");
      }
    });
  });
})();
