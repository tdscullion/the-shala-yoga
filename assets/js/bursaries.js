/* ============================================================
   THE SHALA — bursaries.js
   Testimonials carousel
   ============================================================ */
(function () {
  "use strict";

  /* ── TESTIMONIALS CAROUSEL ──────────────────────────────────
     Gap between cards is 14px (matches CSS gap value).
  ─────────────────────────────────────────────────────────── */
  var testiPos = 0;

  function shiftTesti(dir) {
    var track = document.getElementById("testiTrack");
    if (!track) {
      return;
    }
    var cards = Array.prototype.slice.call(track.children);
    var gap = 14;
    var cardW = cards[0] ? cards[0].offsetWidth + gap : 396;
    var vis = Math.max(1, Math.floor(track.parentElement.offsetWidth / cardW));
    var maxPos = Math.max(0, cards.length - vis);
    testiPos = Math.max(0, Math.min(testiPos + dir, maxPos));
    track.style.transform = "translateX(-" + testiPos * cardW + "px)";
  }

  window.shiftTesti = shiftTesti;
})();
