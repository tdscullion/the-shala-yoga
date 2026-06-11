(function () {
  "use strict";

  const btns = document.querySelectorAll(".f-btn");
  const allCards = document.querySelectorAll(".card:not(.filler)");
  const countEl = document.getElementById("count");
  const emptyEl = document.getElementById("empty-state");
  const odSection = document.getElementById("od-section");
  const flagshipItems = document.querySelectorAll(".flagship-card");

  const sections = [
    {
      label: document.getElementById("sec-2026"),
      grid: document.getElementById("grid-2026"),
    },
    {
      label: document.getElementById("sec-2027"),
      grid: document.getElementById("grid-2027"),
    },
  ];

  function applyFilter(filter) {
    if (filter === "ondemand") {
      btns.forEach((b) => b.classList.remove("active"));
      document
        .querySelector('[data-filter="ondemand"]')
        .classList.add("active");
      odSection.scrollIntoView({ behavior: "smooth", block: "start" });
      odSection.style.transition = "outline 0s";
      odSection.style.outline = "3px solid rgba(243,153,0,0.6)";
      setTimeout(() => {
        odSection.style.outline = "none";
      }, 1200);
      countEl.textContent = "3";
      allCards.forEach((c) => c.classList.remove("hidden"));
      flagshipItems.forEach((f) => (f.style.display = ""));
      sections.forEach(({ label }) => {
        if (label) label.style.display = "";
      });
      emptyEl.classList.remove("show");
      return;
    }

    let total = 0;
    allCards.forEach((card) => {
      const tags = card.dataset.tags || "";
      const show = filter === "all" || tags.includes(filter);
      card.classList.toggle("hidden", !show);
      if (show) total++;
    });

    flagshipItems.forEach((item) => {
      const tags = item.dataset.tags || "";
      const show = filter === "all" || tags.includes(filter);
      item.style.display = show ? "" : "none";
      if (show) total++;
    });

    sections.forEach(({ label, grid }) => {
      if (!label || !grid) return;
      const vis = grid.querySelectorAll(".card:not(.hidden)").length;
      label.style.display = vis === 0 ? "none" : "";
    });

    countEl.textContent = total;
    emptyEl.classList.toggle("show", total === 0);
  }

  btns.forEach((btn) => {
    btn.addEventListener("click", () => {
      btns.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
      applyFilter(btn.dataset.filter);
    });
  });

  applyFilter("all");
})();
