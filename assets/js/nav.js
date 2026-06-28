/* ============================================================
   THE SHALA — nav.js
   Announcement bar dismiss · Nav scroll class ·
   Mobile burger + slide-out panel · About accordion
   Source: snippet-nav-v2.html + snippet-announcement.html
   ============================================================ */

(function () {
  "use strict";

  /* ── Announcement bar dismiss ─────────────────────────── */
  var bar = document.getElementById("announcementBar");
  if (bar) {
    if (sessionStorage.getItem("annDismissed") === "1") {
      bar.style.display = "none";
    }
    var dismissBtn = bar.querySelector(".ann-dismiss");
    if (dismissBtn) {
      dismissBtn.addEventListener("click", function () {
        sessionStorage.setItem("annDismissed", "1");
        bar.style.display = "none";
      });
    }
  }

  /* ── Nav scroll class ─────────────────────────────────── */
  var mainNav = document.getElementById("mainNav");
  if (mainNav) {
    window.addEventListener(
      "scroll",
      function () {
        mainNav.classList.toggle("scrolled", window.scrollY > 10);
      },
      { passive: true },
    );
  }

  /* ── Mobile burger + panel ────────────────────────────── */
  var burger = document.getElementById("navBurger");
  var panel = document.getElementById("navMobilePanel");
  var overlay = document.getElementById("navOverlay");
  var closeBtn = document.getElementById("navMobileClose");

  if (!burger || !panel || !overlay) return;

  function toggle(open) {
    burger.classList.toggle("open", open);
    panel.classList.toggle("open", open);
    overlay.classList.toggle("open", open);
    document.body.classList.toggle("nav-open", open);
    burger.setAttribute("aria-expanded", open ? "true" : "false");
    panel.setAttribute("aria-hidden", open ? "false" : "true");
  }

  burger.addEventListener("click", function () {
    toggle(!panel.classList.contains("open"));
  });

  overlay.addEventListener("click", function () {
    toggle(false);
  });

  if (closeBtn) {
    closeBtn.addEventListener("click", function () {
      toggle(false);
    });
  }

  /* Close when any direct link inside panel is tapped */
  panel.querySelectorAll("a").forEach(function (a) {
    a.addEventListener("click", function () {
      toggle(false);
    });
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") toggle(false);
  });

  /* ── Mobile About accordion ───────────────────────────── */
  var acc = document.getElementById("navMobileAbout");
  if (acc) {
    var accBtn = acc.querySelector(".nav-mobile-accordion-toggle");
    if (accBtn) {
      accBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        var open = !acc.classList.contains("open");
        acc.classList.toggle("open", open);
        accBtn.setAttribute("aria-expanded", open ? "true" : "false");
      });
    }
  }
})();
