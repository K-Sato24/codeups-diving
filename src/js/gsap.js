'use strict';

document.addEventListener("DOMContentLoaded", function () {
  let fvSwiper;

  function initFvSwiper() {
    fvSwiper = new Swiper(".js-fv-swiper", {
      loop: true,
      effect: "fade",
      allowTouchMove: false,
      speed: 600,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false
      }
    });
  }

  // 特定のページでのみ初期化
  if (document.querySelector(".js-fv-swiper")) {
    initFvSwiper();
  }

  const openingBg = document.querySelector('.js-opening-bg');
  const openingTitle = document.querySelector('.js-opening-title');
  const opening01 = document.querySelector('.js-opening01');
  const opening02 = document.querySelector('.js-opening02');
  const fvTitle = document.querySelector('.js-fv-title');
  const headerAnim = document.querySelector('.js-header-anim');

  if (openingBg && openingTitle && opening01 && opening02 && fvTitle && headerAnim) {
    const tl = gsap.timeline({
      onComplete: function onComplete() {
        if (fvSwiper) {
          fvSwiper.update();
          fvSwiper.autoplay.start();
        }
      }
    });
    tl.from('.js-opening-bg', {
      autoAlpha: 1
    }, 'opening').fromTo('.js-opening-title', {
      autoAlpha: 0
    }, {
      duration: 0.4,
      autoAlpha: 1
    }, 'opening').fromTo('.js-opening-title', {
      autoAlpha: 1
    }, {
      duration: 0.8,
      autoAlpha: 0
    }).fromTo('.js-opening01', {
      y: '100%',
      opacity: 0
    }, {
      y: 0,
      duration: 1.0,
      opacity: 1,
      delay: 0.1,
      ease: "circ.out"
    }, 'img').fromTo('.js-opening02', {
      y: '100%',
      opacity: 0
    }, {
      y: 0,
      duration: 1.0,
      opacity: 1,
      delay: 0.4,
      ease: "circ.out"
    }, 'img').fromTo('.js-fv-title', {
      opacity: 0
    }, {
      duration: 0.7,
      opacity: 1,
      delay: 0.2
    }, 'ending').fromTo('.js-header-anim', {
      opacity: 0
    }, {
      duration: 0.7,
      opacity: 1,
      delay: 0.2
    }, 'ending').to('.js-opening-bg', {
      autoAlpha: 0
    }, 'ending');
  } else if (fvSwiper) {
    fvSwiper.autoplay.start();
  }

  // 画面幅が変更されたときにSwiperの設定を更新し、再開
  window.addEventListener('resize', function () {
    if (fvSwiper) {
      fvSwiper.update();
      fvSwiper.autoplay.start();
    }
  });
});
