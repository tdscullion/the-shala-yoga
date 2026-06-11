/* ============================================================
   THE SHALA — home.js
   Course carousel · Testimonials carousel · Blog carousel ·
   Newsletter form validation
   ============================================================ */
(function () {
  "use strict";

  /* Generic slider factory */
  function makeSlider(trackId, gap) {
    gap = gap || 20;
    var pos = 0;
    var track = document.getElementById(trackId);
    if (!track) return function () {};
    var cards = Array.from(track.children);
    return function shift(dir) {
      var trackW = track.parentElement.offsetWidth;
      var cardW = cards[0] ? cards[0].offsetWidth + gap : 310;
      var vis = Math.max(1, Math.floor(trackW / cardW));
      pos = Math.max(0, Math.min(pos + dir, cards.length - vis));
      track.style.transform = "translateX(-" + pos * cardW + "px)";
    };
  }

  /* Expose sliders to inline onclick handlers */
  window.shiftCar = makeSlider("carTrack");
  window.shiftTesti = makeSlider("testiTrack", 14);
  window.shiftBlog = makeSlider("blogTrack");

  /* Newsletter form */
  window.handleNL = function (btn) {
    var name = document.getElementById("nlName").value.trim();
    var email = document.getElementById("nlEmail").value.trim();
    if (!name) {
      btn.textContent = "Enter your name";
      btn.style.background = "var(--charcoal-plum)";
      setTimeout(function () {
        btn.textContent = "Subscribe";
        btn.style.background = "";
      }, 2500);
      return;
    }
    if (!email || !email.includes("@")) {
      btn.textContent = "Enter valid email";
      btn.style.background = "var(--charcoal-plum)";
      setTimeout(function () {
        btn.textContent = "Subscribe";
        btn.style.background = "";
      }, 2500);
      return;
    }
    btn.textContent = "Thank you ✓";
    btn.style.background = "#2d7a47";
    btn.disabled = true;
  };
})();
