"use strict";

let swiper = new Swiper(".swiper1", {
  loop: false,
  rewind: true,
  centeredSlides: false,
  /* autoplay: {
    delay: 2500,
  }, */
  speed: 300,
  slidesPerView: 1.3,
  spaceBetween: 20,
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
    hide: false,
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

function updateScrollbarDragSize(sw) {
  const sb = sw.scrollbar;
  if (!sb || !sb.el) return;

  const track = sb.el; // トラック
  const drag = track.querySelector(".swiper-scrollbar-drag"); // ドラッグ
  if (!drag) return;

  const isH = sw.isHorizontal();
  const trackSize = isH ? track.clientWidth : track.clientHeight;

  // スライド1枚の幅（spaceBetweenを含む実効幅）
  // slidesSizesGrid は各スライドのサイズ配列（px）
  const ss = sw.slidesSizesGrid;
  const oneSlide =
    ss && ss.length
      ? ss[Math.min(sw.activeIndex, ss.length - 1)]
      : isH
      ? sw.slides[0].offsetWidth
      : sw.slides[0].offsetHeight;

  // 全体幅（仮想サイズ）。なければ slidesSizesGrid の合計
  const total =
    typeof sw.virtualSize === "number" && sw.virtualSize > 0
      ? sw.virtualSize
      : ss && ss.length
      ? ss.reduce((a, b) => a + b, 0)
      : isH
      ? sw.wrapperEl.scrollWidth
      : sw.wrapperEl.scrollHeight;

  // 1枚ぶんの割合でドラッグ幅を設定（最小幅を少し確保）
  const MIN = 16; // 最小幅(px) 任意
  const dragSizePx = Math.max(MIN, trackSize * (oneSlide / total));

  if (isH) {
    drag.style.width = `${dragSizePx}px`;
    drag.style.height = "";
  } else {
    drag.style.height = `${dragSizePx}px`;
    drag.style.width = "";
  }
}
