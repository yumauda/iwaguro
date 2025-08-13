"use strict";
// Then, once the page loads...
window.addEventListener("DOMContentLoaded", function () {
  gsap.fromTo(
    ".js-logo-top",
    {
      clipPath: "inset(0% 0% 0% 0%)",
      opacity: 1,
    },
    {
      duration: 1,
      delay: 2,
      opacity: 0,
      ease: "power3.out",
      clipPath: "inset(0% 100% 0% 0%)",
    }
  );
  gsap.fromTo(
    ".js-loading",
    {
      opacity: 1,
    },
    {
      duration: 2,
      opacity: 0,
      delay: 2,
      stagger: 0.6,
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-loading-cover",
    {
      zIndex: 9999,
    },
    {
      duration: 3,
      delay: 3,
      zIndex: 0,
    }
  );
  gsap.fromTo(
    ".js-logo",
    {
      opacity: 0,
    },
    {
      opacity: 1,
      duration: 3,
      delay: 0.5,
      ease: "power3.out",
      stagger: 0.1,
    }
  );
  gsap.fromTo(
    ".js-mv-title",
    {
      clipPath: "inset(100% 0% 0% 0%)",
    },
    {
      duration: 1.5,
      delay: 3,
      clipPath: "inset(0% 0% 0% 0%)",
      /*  stagger: 0.3, */
      /* scrollTrigger: {
        trigger: ".p-top-about",
        start: "0% 30%",
      }, */
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
      duration: 15,
      delay: 0.5,
      scrollTrigger: {
        trigger: ".p-top-about",
        start: "0% 50%",
      },
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

  // トップストーリーのパララックス効果
 /*  gsap.to(".p-top-story__img1", {
    y: -30,
    ease: "none",
    scrollTrigger: {
      trigger: ".p-top-story",
      start: "top bottom",
      end: "bottom top",
      scrub: 1
    }
  }); */

});
