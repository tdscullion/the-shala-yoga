/* ============================================================
   THE SHALA — faq.js
   Accordion open/close
   ============================================================ */
(function () {
  "use strict";

  document.querySelectorAll(".acc-trigger").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var item = btn.closest(".acc-item");
      var accordion = btn.closest(".accordion");
      var isOpen = item.classList.contains("open");

      accordion.querySelectorAll(".acc-item").forEach(function (i) {
        i.classList.remove("open");
      });

      if (!isOpen) item.classList.add("open");
    });
  });
})();
