/* ============================================================
   THE SHALA — about.js
   Community photo carousel
   ============================================================ */
(function () {
  "use strict";

  var track = document.getElementById("carouselTrack");
  var dotsWrap = document.getElementById("carouselDots");
  if (!track || !dotsWrap) return;

  var cards = Array.from(track.children);
  var VISIBLE = 4;
  var maxPos = cards.length - VISIBLE;
  var pos = 0;
  var autoTimer;

  /* Build dots */
  var pages = Math.ceil(cards.length / VISIBLE);
  for (var i = 0; i < pages; i++) {
    (function (idx) {
      var d = document.createElement("button");
      d.className = "carousel-dot" + (idx === 0 ? " active" : "");
      d.addEventListener("click", function () {
        goTo(idx * VISIBLE);
        resetAuto();
      });
      dotsWrap.appendChild(d);
    })(i);
  }

  function updateDots() {
    var page = Math.round(pos / VISIBLE);
    Array.from(dotsWrap.children).forEach(function (d, i) {
      d.classList.toggle("active", i === page);
    });
  }

  function goTo(n) {
    pos = Math.max(0, Math.min(n, maxPos));
    track.style.transform =
      "translateX(-" + pos * (cards[0].offsetWidth + 14) + "px)";
    updateDots();
  }

  document.getElementById("prevBtn").addEventListener("click", function () {
    goTo(pos <= 0 ? maxPos : pos - 1);
    resetAuto();
  });

  document.getElementById("nextBtn").addEventListener("click", function () {
    goTo(pos >= maxPos ? 0 : pos + 1);
    resetAuto();
  });

  function startAuto() {
    autoTimer = setInterval(function () {
      goTo(pos >= maxPos ? 0 : pos + 1);
    }, 3800);
  }

  function resetAuto() {
    clearInterval(autoTimer);
    startAuto();
  }

  /* Touch swipe */
  var tx = 0;
  track.addEventListener(
    "touchstart",
    function (e) {
      tx = e.touches[0].clientX;
    },
    { passive: true },
  );
  track.addEventListener("touchend", function (e) {
    var dx = e.changedTouches[0].clientX - tx;
    if (Math.abs(dx) > 40) {
      goTo(dx < 0 ? pos + 1 : pos - 1);
      resetAuto();
    }
  });

  window.addEventListener("resize", function () {
    goTo(pos);
  });

  startAuto();
})();
