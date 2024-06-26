'use strict';

document.addEventListener("DOMContentLoaded", function () {
  var swiper;
  function initSwiper() {
    swiper = new Swiper(".js-fv-swiper", {
      loop: true,
      effect: "fade",
      allowTouchMove: false,
      speed: 600,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      }
    });
  }

  // Swiper初期化
  initSwiper();
  var openingBg = document.querySelector('.js-opening-bg');
  var openingTitle = document.querySelector('.js-opening-title');
  var opening01 = document.querySelector('.js-opening01');
  var opening02 = document.querySelector('.js-opening02');
  var fvTitle = document.querySelector('.js-fv-title');
  var headerAnim = document.querySelector('.js-header-anim');
  if (openingBg && openingTitle && opening01 && opening02 && fvTitle && headerAnim) {
    var tl = gsap.timeline({
      onComplete: function onComplete() {
        swiper.update();
        swiper.autoplay.start();
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
  } else {
    swiper.autoplay.start();
  }

  // 画面幅が変更されたときにSwiperの設定を更新し、再開
  window.addEventListener('resize', function () {
    if (swiper) {
      swiper.update();
      swiper.autoplay.start();
    }
  });
});