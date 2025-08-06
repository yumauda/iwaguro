"use strict";

// Then, once the page loads...
window.addEventListener("DOMContentLoaded", function () {
  gsap.fromTo(
    ".js-image",
    {
      opacity: 0,
      y: 30,
      clipPath: "inset(0% 100% 0% 0%)",
    },
    {
      duration: 1.5,
      opacity: 1,
      y: 0,
      clipPath: "inset(0% 0% 0% 0%)",
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".js-start",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-left--vertical",
    {
      "--scaleY": 0,
    },
    {
      "--scaleY": 1,
      duration: 3,
      delay: 0.5,
      scrollTrigger: {
        trigger: ".p-top-about",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-left--row",
    {
      "--scaleX": 0,
    },
    {
      "--scaleX": 1,
      duration: 3,
      delay: 0.5,
      scrollTrigger: {
        trigger: ".p-top-about",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
});
