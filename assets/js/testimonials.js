(function () {
  const chips = document.querySelectorAll(".t-filter-chip");
  const featuredRows = document.querySelectorAll(".ed-row");
  const voiceCards = document.querySelectorAll(".voice-card");

  chips.forEach((chip) => {
    chip.addEventListener("click", () => {
      chips.forEach((c) => c.classList.remove("is-active"));
      chip.classList.add("is-active");
      const filter = chip.dataset.filter;

      const apply = (el) => {
        const cat = el.dataset.category;
        el.style.display =
          filter === "all" || cat === filter || cat === "both" ? "" : "none";
      };

      featuredRows.forEach(apply);
      voiceCards.forEach(apply);
    });
  });
})();
