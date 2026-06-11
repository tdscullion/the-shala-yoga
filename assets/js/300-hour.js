/* ============================================================
   THE SHALA — 300-hour.js
   Sticky booking bar · Accordion · Gallery lightbox ·
   Testimonials carousel · Teacher carousel ·
   Related courses scroll
   ============================================================ */
(function () {
  "use strict";

  /* ── Accordion ─────────────────────────────────────────── */
  window.toggleAcc = function (trigger) {
    var body = trigger.nextElementSibling;
    var isOpen = trigger.classList.contains("open");
    document.querySelectorAll(".acc-trigger").forEach(function (t) {
      t.classList.remove("open");
      t.nextElementSibling.classList.remove("open");
    });
    if (!isOpen) {
      trigger.classList.add("open");
      body.classList.add("open");
    }
  };

  /* ── Sticky booking bar ────────────────────────────────── */
  var hero = document.getElementById("top");
  var sideCol = document.querySelector(".side-col");
  var bar = document.getElementById("bookingBar");

  function isMobile() {
    return window.matchMedia("(max-width:900px)").matches;
  }

  function updateBar() {
    var target = isMobile() && sideCol ? sideCol : hero;
    if (!target || !bar) return;
    bar.classList.toggle("visible", target.getBoundingClientRect().bottom < 80);
  }

  if (bar) {
    updateBar();
    window.addEventListener("scroll", updateBar, { passive: true });
    window.addEventListener("resize", updateBar);
  }

  /* ── Gallery lightbox ──────────────────────────────────── */
  var galleryImgs = [
    {
      src: "assets/images/300hr-gallery-1.jpg",
      alt: "Charli Van Ness — lead teacher",
    },
    { src: "assets/images/300hr-gallery-2.jpg", alt: "In the training room" },
    { src: "assets/images/300hr-gallery-3.jpg", alt: "Studio practice" },
    { src: "assets/images/300hr-gallery-4.jpg", alt: "Teacher training" },
    { src: "assets/images/300hr-gallery-5.jpg", alt: "The whole group" },
  ];
  var currentImg = 0;
  var lightbox = document.getElementById("lightbox");
  var lightboxImg = document.getElementById("lightboxImg");
  var lightboxCounter = document.getElementById("lightboxCounter");

  window.openLightbox = function (idx) {
    currentImg = idx;
    lightboxImg.src = galleryImgs[idx].src;
    lightboxImg.alt = galleryImgs[idx].alt;
    lightboxCounter.textContent = idx + 1 + " / " + galleryImgs.length;
    lightbox.classList.add("open");
    document.body.style.overflow = "hidden";
  };

  window.closeLightbox = function () {
    lightbox.classList.remove("open");
    document.body.style.overflow = "";
  };

  window.closeLightboxOnBg = function (e) {
    if (e.target === lightbox) window.closeLightbox();
  };

  window.shiftLightbox = function (dir) {
    currentImg = (currentImg + dir + galleryImgs.length) % galleryImgs.length;
    lightboxImg.src = galleryImgs[currentImg].src;
    lightboxImg.alt = galleryImgs[currentImg].alt;
    lightboxCounter.textContent = currentImg + 1 + " / " + galleryImgs.length;
  };

  document.addEventListener("keydown", function (e) {
    if (!lightbox || !lightbox.classList.contains("open")) return;
    if (e.key === "Escape") window.closeLightbox();
    if (e.key === "ArrowRight") window.shiftLightbox(1);
    if (e.key === "ArrowLeft") window.shiftLightbox(-1);
  });

  /* ── Testimonials carousel ─────────────────────────────── */
  var testiPos = 0;
  window.shiftTesti = function (dir) {
    var track = document.getElementById("testiTrack");
    if (!track) return;
    var cards = Array.from(track.children);
    var cardW = cards[0] ? cards[0].offsetWidth + 18 : 340;
    var vis = Math.max(1, Math.floor(track.parentElement.offsetWidth / cardW));
    var max = Math.max(0, cards.length - vis);
    testiPos = Math.max(0, Math.min(testiPos + dir, max));
    track.style.transform = "translateX(-" + testiPos * cardW + "px)";
  };

  /* ── Teacher carousel scroll ───────────────────────────── */
  window.shiftTeacherCarousel = function (dir) {
    var grid = document.getElementById("teacherCarousel");
    if (!grid) return;
    var card = grid.querySelector(".t-card");
    if (!card) return;
    grid.scrollBy({
      left: dir * (card.offsetWidth + 20) * 2,
      behavior: "smooth",
    });
  };

  /* ── Related courses scroll ────────────────────────────── */
  window.shiftRelated = function (dir) {
    var grid = document.getElementById("relatedGrid");
    if (!grid) return;
    var card = grid.querySelector(".rc");
    if (!card) return;
    grid.scrollBy({ left: dir * (card.offsetWidth + 12), behavior: "smooth" });
  };
})();
