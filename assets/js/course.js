/* ============================================================
   THE SHALA — course.js
   Individual course page template
   Gallery lightbox · Testimonials carousel ·
   Accordion · Sticky booking bar ·
   Related courses scroll · Express Interest form
   ============================================================ */
(function () {
  "use strict";

  /* ── GALLERY LIGHTBOX ──────────────────────────────────────
     TODO WordPress: pass image array via wp_localize_script()
     from the ACF gallery field on the course CPT.
  ─────────────────────────────────────────────────────────── */
  var galleryImgs = [
    {
      src: "assets/images/course-kids-yoga-1.jpg",
      alt: "Charli Van Ness — lead teacher",
    },
    {
      src: "assets/images/course-kids-yoga-2.jpg",
      alt: "Kids yoga in practice",
    },
    { src: "assets/images/course-kids-yoga-3.jpg", alt: "Kids yoga class" },
    { src: "assets/images/course-kids-yoga-4.jpg", alt: "Kids yoga training" },
    { src: "assets/images/course-kids-yoga-5.jpg", alt: "Kula Kids group" },
  ];

  var currentImg = 0;
  var lightbox = document.getElementById("lightbox");
  var lightboxImg = document.getElementById("lightboxImg");
  var lightboxCounter = document.getElementById("lightboxCounter");

  function openLightbox(idx) {
    currentImg = idx;
    lightboxImg.src = galleryImgs[idx].src;
    lightboxImg.alt = galleryImgs[idx].alt;
    lightboxCounter.textContent = idx + 1 + " / " + galleryImgs.length;
    lightbox.classList.add("open");
    document.body.style.overflow = "hidden";
  }

  function closeLightbox() {
    lightbox.classList.remove("open");
    document.body.style.overflow = "";
  }

  function closeLightboxOnBg(e) {
    if (e.target === lightbox) {
      closeLightbox();
    }
  }

  function shiftLightbox(dir) {
    currentImg = (currentImg + dir + galleryImgs.length) % galleryImgs.length;
    lightboxImg.src = galleryImgs[currentImg].src;
    lightboxImg.alt = galleryImgs[currentImg].alt;
    lightboxCounter.textContent = currentImg + 1 + " / " + galleryImgs.length;
  }

  document.addEventListener("keydown", function (e) {
    if (!lightbox || !lightbox.classList.contains("open")) {
      return;
    }
    if (e.key === "Escape") {
      closeLightbox();
    }
    if (e.key === "ArrowRight") {
      shiftLightbox(1);
    }
    if (e.key === "ArrowLeft") {
      shiftLightbox(-1);
    }
  });

  window.openLightbox = openLightbox;
  window.closeLightbox = closeLightbox;
  window.closeLightboxOnBg = closeLightboxOnBg;
  window.shiftLightbox = shiftLightbox;

  /* ── EXPRESS INTEREST FORM ───────────────────────────────────
     TODO WordPress: wire to CF7 or WPForms.
  ─────────────────────────────────────────────────────────── */
  function handleInterestSubmit(btn) {
    var name = document.getElementById("int-name").value.trim();
    var email = document.getElementById("int-email").value.trim();

    if (!name || !email) {
      btn.textContent = "Please fill in your name and email \u2191";
      btn.style.background = "var(--charcoal-plum)";
      setTimeout(function () {
        btn.textContent = "Register My Interest \u2192";
        btn.style.background = "";
      }, 2500);
      return;
    }

    btn.textContent = "Thank you \u2014 we\u2019ll be in touch soon \u2713";
    btn.style.background = "#2d7a47";
    btn.disabled = true;
  }

  window.handleInterestSubmit = handleInterestSubmit;

  /* ── ACCORDION ─────────────────────────────────────────────
     Single-open: close all, then open clicked item.
  ─────────────────────────────────────────────────────────── */
  function toggleAcc(trigger) {
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
  }

  window.toggleAcc = toggleAcc;

  /* ── STICKY BOOKING BAR ─────────────────────────────────────
     Desktop: shows after course header (#top) scrolls out.
     Mobile:  shows after .side-col scrolls out of view.
  ─────────────────────────────────────────────────────────── */
  var hero = document.getElementById("top");
  var sideCol = document.querySelector(".side-col");
  var bar = document.getElementById("bookingBar");

  function isMobile() {
    return window.matchMedia("(max-width:900px)").matches;
  }

  function updateBar() {
    var target = isMobile() && sideCol ? sideCol : hero;
    if (!target || !bar) {
      return;
    }
    var rect = target.getBoundingClientRect();
    var scrolledPast = rect.bottom < 80;
    bar.classList.toggle("visible", scrolledPast);
  }

  if (bar) {
    updateBar();
    window.addEventListener("scroll", updateBar, { passive: true });
    window.addEventListener("resize", updateBar);
  }

  /* ── TESTIMONIALS CAROUSEL ──────────────────────────────────
     Gap between cards is 18px (matches CSS gap value).
  ─────────────────────────────────────────────────────────── */
  var testiPos = 0;

  function shiftTesti(dir) {
    var track = document.getElementById("testiTrack");
    if (!track) {
      return;
    }
    var cards = Array.prototype.slice.call(track.children);
    var cardW = cards[0] ? cards[0].offsetWidth + 14 : 340;
    var vis = Math.max(1, Math.floor(track.parentElement.offsetWidth / cardW));
    var maxPos = Math.max(0, cards.length - vis);
    testiPos = Math.max(0, Math.min(testiPos + dir, maxPos));
    track.style.transform = "translateX(-" + testiPos * cardW + "px)";
  }

  window.shiftTesti = shiftTesti;

  /* ── RELATED COURSES — arrow-driven scroll ───────────────── */
  function shiftRelated(dir) {
    var grid = document.getElementById("relatedGrid");
    if (!grid) {
      return;
    }
    var card = grid.querySelector(".rc");
    if (!card) {
      return;
    }
    var step = card.offsetWidth + 12;
    grid.scrollBy({ left: dir * step, behavior: "smooth" });
  }

  window.shiftRelated = shiftRelated;
})();
