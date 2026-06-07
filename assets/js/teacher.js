/* ============================================================
   THE SHALA — teacher.js
   Courses carousel · Testimonials carousel · 
   Scroll reveal · Touch swipe support
   ============================================================ */
(function () {
  "use strict";

  /* ── Courses carousel ──────────────────────────────────── */
  var pathsPos = 0;
  window.shiftPaths = function (dir) {
    var track = document.getElementById("pathsTrack");
    if (!track) return;
    var cards = Array.from(track.children);
    var cardW = cards[0].offsetWidth + 14;
    var vis = Math.max(1, Math.floor(track.parentElement.offsetWidth / cardW));
    pathsPos = Math.max(0, Math.min(pathsPos + dir, cards.length - vis));
    track.style.transform = "translateX(-" + pathsPos * cardW + "px)";
  };

  /* ── Testimonials carousel ─────────────────────────────── */
  var testiPos = 0;
  window.shiftTesti = function (dir) {
    var track = document.getElementById("testiTrack");
    if (!track) return;
    var cards = Array.from(track.children);
    var cardW = cards[0].offsetWidth + 14;
    var vis = Math.max(1, Math.floor(track.parentElement.offsetWidth / cardW));
    testiPos = Math.max(0, Math.min(testiPos + dir, cards.length - vis));
    track.style.transform = "translateX(-" + testiPos * cardW + "px)";
  };

  /* ── Scroll reveal ─────────────────────────────────────── */
  var revObs = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add("visible");
          revObs.unobserve(e.target);
        }
      });
    },
    { threshold: 0.08 },
  );

  document.querySelectorAll(".reveal").forEach(function (el) {
    revObs.observe(el);
  });

  /* ── Touch swipe support ───────────────────────────────── */
  function attachSwipe(trackId, shiftFn) {
    var track = document.getElementById(trackId);
    if (!track) return;
    var startX = 0,
      startY = 0,
      moved = false;
    track.addEventListener(
      "touchstart",
      function (e) {
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
        moved = false;
      },
      { passive: true },
    );
    track.addEventListener(
      "touchmove",
      function (e) {
        var dx = e.touches[0].clientX - startX;
        var dy = e.touches[0].clientY - startY;
        if (Math.abs(dx) > Math.abs(dy)) moved = true;
      },
      { passive: true },
    );
    track.addEventListener(
      "touchend",
      function (e) {
        if (!moved) return;
        var dx = e.changedTouches[0].clientX - startX;
        if (Math.abs(dx) < 40) return;
        shiftFn(dx < 0 ? 1 : -1);
      },
      { passive: true },
    );
  }

  attachSwipe("pathsTrack", window.shiftPaths);
  attachSwipe("testiTrack", window.shiftTesti);
})();
