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
    ".js-text-gradation",
    {
      "--scaleX": 0,
    },
    {
      "--scaleX": 1,
      duration: 3,
      delay: 0.5,
      scrollTrigger: {
        trigger: ".p-gradation",
        start: "0% 50%",
      },
      stagger: 0.4,
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-about-title",
    {
      clipPath: "inset(100% 0% 0% 0%)",
    },
    {
      duration: 1.5,
      clipPath: "inset(0% 0% 0% 0%)",
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-top-about",
        start: "0% 30%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-about-gradation",
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
      stagger: 0.4,
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
  gsap.fromTo(
    ".js-interview-title",
    {
      clipPath: "inset(100% 0% 0% 0%)",
    },
    {
      duration: 1.5,
      clipPath: "inset(0% 0% 0% 0%)",
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-top-interview",
        start: "0% 30%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-interview-gradation",
    {
      "--scaleX": 0,
    },
    {
      "--scaleX": 1,
      duration: 3,
      delay: 0.5,
      scrollTrigger: {
        trigger: ".p-top-interview",
        start: "0% 50%",
      },
      stagger: 0.4,
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-left--vertical-interview",
    {
      "--scaleY": 0,
    },
    {
      "--scaleY": 1,
      duration: 3,
      delay: 0.5,
      scrollTrigger: {
        trigger: ".p-top-interview",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-left--row-interview",
    {
      "--scaleX": 0,
    },
    {
      "--scaleX": 1,
      duration: 3,
      delay: 0.5,
      scrollTrigger: {
        trigger: ".p-top-interview",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-left--vertical-pickup",
    {
      "--scaleY": 0,
    },
    {
      "--scaleY": 1,
      duration: 3,
      delay: 0.5,
      scrollTrigger: {
        trigger: ".p-pickup",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-left--row-pickup",
    {
      "--scaleX": 0,
    },
    {
      "--scaleX": 1,
      duration: 3,
      delay: 0.5,
      scrollTrigger: {
        trigger: ".p-pickup",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
});
