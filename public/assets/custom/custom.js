let staticStart = false;
(function () {
  ("use strict");

  /*=====================================
    Sticky
    ======================================= */
  window.onscroll = function () {
    const headerNavbar = document.querySelector("header");
    const sticky = headerNavbar.offsetTop;

    if (window.scrollY > sticky) {
      headerNavbar.classList.add("sticky");
    } else {
      headerNavbar.classList.remove("sticky");
    }
    /** count statistic */
    const statisticElement = document.getElementById("statistic");
    if (!staticStart && isInViewport(statisticElement)) {DoCount(); staticStart = true;}
  };
  carousel();
})();

function carousel() {
  let items = document.querySelectorAll("#news-carousel .carousel-item");

  items.forEach((el) => {
    const minPerSlide = 3;
    let next = el.nextElementSibling;
    for (var i = 1; i < minPerSlide; i++) {
      if (!next) {
        next = items[0];
      }

      let cloneChild = next.cloneNode(true);
      el.appendChild(cloneChild.children[0]);
      next = next.nextElementSibling;
    }
  });
}

/** animation */
window.addEventListener("load", () =>
  AOS.init({
    duration: 600,
    easing: "ease-in-out",
    once: true,
    mirror: false,
  })
);

/** count statistic */
function DoCount() {
  function counter(element) {
    this.element = element;
    this.max = this.element.getAttribute("data-max");
    this.currentValue = 0;
    this.intervalID;
    this.count = function () {
      this.currentValue += Math.round(this.max / 10, 0);
      this.element.innerHTML = this.currentValue;
      if (this.currentValue >= this.max) {
        clearInterval(this.intervalID);
      }
    };
  }
  const maxes = [87, 14, 12500];

  const counterElements = document.querySelectorAll(".counter");

  let counters = [];

  for (let i = 0; i < maxes.length; i++) {
    counters[i] = new counter(counterElements[i]);
    counters[i].intervalID = setInterval(function () {
      counters[i].count();
    }, 100);
  }
}

function isInViewport(element) {
  var rect = element.getBoundingClientRect();
  var html = document.documentElement;
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || html.clientHeight) &&
    rect.right <= (window.innerWidth || html.clientWidth)
  );
}
