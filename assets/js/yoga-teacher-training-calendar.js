/* ============================================================
   THE SHALA — yoga-teacher-training-calendar.js
   Seasonal accordion sections for the course calendar.
   ============================================================ */
(function () {
  "use strict";

  /* ── ACCORDION ──────────────────────────────────────────────
     Each seasonal section (Summer, Autumn, Winter, Spring)
     is independently toggled. Multiple can be open at once.
     The animation uses scrollHeight for a smooth open/close.
  ─────────────────────────────────────────────────────────── */
  function toggleAccordion(btn) {
    var body = btn.nextElementSibling;
    var isOpen = btn.getAttribute("aria-expanded") === "true";

    btn.setAttribute("aria-expanded", !isOpen);

    if (isOpen) {
      /* Closing: pin current height then animate to 0 */
      body.style.maxHeight = body.scrollHeight + "px";
      requestAnimationFrame(function () {
        body.style.maxHeight = "0";
        body.style.opacity = "0";
      });
      body.classList.remove("open");
    } else {
      /* Opening: add class then expand to scrollHeight */
      body.classList.add("open");
      body.style.maxHeight = body.scrollHeight + "px";
      body.style.opacity = "1";
      /* After transition, set to unconstrained so content can grow */
      setTimeout(function () {
        body.style.maxHeight = "4000px";
      }, 350);
    }
  }

  /* Initialise any sections that start open (aria-expanded="true") */
  document.querySelectorAll(".accordion-body.open").forEach(function (b) {
    b.style.maxHeight = "4000px";
    b.style.opacity = "1";
  });

  window.toggleAccordion = toggleAccordion;
})();
