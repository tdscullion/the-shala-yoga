(function () {
  "use strict";

  var revObs = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add("visible");
          revObs.unobserve(e.target);
        }
      });
    },
    { threshold: 0.04 },
  );

  document.querySelectorAll(".reveal").forEach(function (el) {
    revObs.observe(el);
  });
})();
