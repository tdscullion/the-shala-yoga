/* ============================================================
   THE SHALA — gallery.js
   Tabbed gallery with mosaic grid + lightbox
   ============================================================ */
(function () {
  "use strict";

  /* ── TABS ───────────────────────────────────────────────────
     Switch between gallery categories (All, 200hr, 300hr, etc.)
  ─────────────────────────────────────────────────────────── */
  document.querySelectorAll(".g-tab").forEach(function (tab) {
    tab.addEventListener("click", function () {
      var target = tab.dataset.tab;

      document.querySelectorAll(".g-tab").forEach(function (t) {
        t.classList.remove("active");
      });
      document.querySelectorAll(".tab-panel").forEach(function (p) {
        p.classList.remove("active");
      });

      tab.classList.add("active");
      document
        .querySelector('.tab-panel[data-panel="' + target + '"]')
        .classList.add("active");
    });
  });

  /* ── LIGHTBOX ───────────────────────────────────────────────
     Opens clicked image full-screen with prev/next navigation.
     Unsplash placeholder URLs are upsized to w=1600 for lightbox.
     TODO WordPress: remove the URL manipulation once real images
     are in assets/images/ — just use img.src directly.
  ─────────────────────────────────────────────────────────── */
  var lb = document.getElementById("lightbox");
  var lbImg = document.getElementById("lbImg");
  var lbCounter = document.getElementById("lbCounter");

  var currentSet = [];
  var currentIdx = 0;

  function openLb(set, idx) {
    currentSet = set;
    currentIdx = idx;
    updateLb();
    lb.classList.add("open");
    document.body.style.overflow = "hidden";
  }

  function closeLb() {
    lb.classList.remove("open");
    document.body.style.overflow = "";
  }

  function updateLb() {
    var img = currentSet[currentIdx].querySelector("img");
    var src = img.src
      .replace(/w=\d+&h=\d+&fit=crop/, "w=1600&h=1600&fit=cover")
      .replace(/w=\d+/, "w=1600");
    lbImg.src = src;
    lbCounter.textContent = currentIdx + 1 + " / " + currentSet.length;
  }

  function prevLb() {
    currentIdx = (currentIdx - 1 + currentSet.length) % currentSet.length;
    updateLb();
  }

  function nextLb() {
    currentIdx = (currentIdx + 1) % currentSet.length;
    updateLb();
  }

  document.getElementById("lbClose").addEventListener("click", closeLb);
  document.getElementById("lbPrev").addEventListener("click", prevLb);
  document.getElementById("lbNext").addEventListener("click", nextLb);

  lb.addEventListener("click", function (e) {
    if (e.target === lb) {
      closeLb();
    }
  });

  document.addEventListener("keydown", function (e) {
    if (!lb.classList.contains("open")) {
      return;
    }
    if (e.key === "Escape") {
      closeLb();
    }
    if (e.key === "ArrowLeft") {
      prevLb();
    }
    if (e.key === "ArrowRight") {
      nextLb();
    }
  });

  /* Wire up click on every mosaic cell in every tab panel */
  document.querySelectorAll(".mosaic").forEach(function (grid) {
    var cells = Array.prototype.slice.call(grid.querySelectorAll(".m-cell"));
    cells.forEach(function (cell, i) {
      cell.addEventListener("click", function () {
        openLb(cells, i);
      });
    });
  });
})();
