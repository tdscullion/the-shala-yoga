// Blog
/* ============================================================
   THE SHALA — blog-index.js
   Filter bar · Topics panel · Topic selection · Clear filter
   ============================================================ */
(function () {
  "use strict";

  var moreBtn = document.getElementById("filterMore");
  var panel = document.getElementById("topicsPanel");
  var chips = document.getElementById("filterChips");
  var activeBar = document.getElementById("filterActive");
  var activePill = document.getElementById("filterActivePill");
  var clearBtn = document.getElementById("filterClear");

  if (!moreBtn || !panel) return;

  /* ── Toggle all-topics panel ─────────────────────────── */
  function togglePanel(open) {
    moreBtn.classList.toggle("open", open);
    panel.classList.toggle("open", open);
    moreBtn.setAttribute("aria-expanded", open ? "true" : "false");
    panel.setAttribute("aria-hidden", open ? "false" : "true");
    moreBtn.querySelector(".filter-more-icon").textContent = open ? "−" : "+";
  }

  moreBtn.addEventListener("click", function () {
    togglePanel(!panel.classList.contains("open"));
  });

  /* ── Select a topic ──────────────────────────────────── */
  function selectTopic(name, label) {
    if (name === "all") {
      chips.style.display = "flex";
      activeBar.classList.remove("show");
      chips.querySelectorAll("a").forEach(function (a) {
        a.classList.toggle("active", a.dataset.topic === "all");
      });
    } else {
      chips.style.display = "none";
      activeBar.classList.add("show");
      activePill.textContent = label;
    }
    togglePanel(false);
  }

  /* ── Chip clicks ─────────────────────────────────────── */
  chips.querySelectorAll("a").forEach(function (a) {
    a.addEventListener("click", function (e) {
      e.preventDefault();
      selectTopic(a.dataset.topic, a.textContent.trim());
    });
  });

  /* ── Panel link clicks ───────────────────────────────── */
  panel.querySelectorAll("a").forEach(function (a) {
    a.addEventListener("click", function (e) {
      e.preventDefault();
      selectTopic(a.dataset.topic, a.textContent.trim());
    });
  });

  /* ── Clear filter ────────────────────────────────────── */
  if (clearBtn) {
    clearBtn.addEventListener("click", function () {
      selectTopic("all", "All");
    });
  }

  /* ── Esc closes panel ────────────────────────────────── */
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") togglePanel(false);
  });
})();
