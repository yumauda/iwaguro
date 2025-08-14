"use strict";

let swiper = new Swiper(".swiper1", {
  loop: false,
  rewind: true,
  centeredSlides: false,
  /* autoplay: {
    delay: 2500,
  }, */
  speed: 300,
  slidesPerView: 1.5,
  spaceBetween: 20,
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
    hide: false, // 常に表示
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 3.5,
      spaceBetween: 12,
    },
  },
});
