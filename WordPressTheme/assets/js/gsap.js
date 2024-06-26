'use strict';

document.addEventListener("DOMContentLoaded", function () {
  var openingBg = document.querySelector('.js-opening-bg');
  var openingTitle = document.querySelector('.js-opening-title');
  var opening01 = document.querySelector('.js-opening01');
  var opening02 = document.querySelector('.js-opening02');
  var fvTitle = document.querySelector('.js-fv-title');
  var headerAnim = document.querySelector('.js-header-anim');
  if (!openingBg || !openingTitle || !opening01 || !opening02 || !fvTitle || !headerAnim) {
    // 該当する要素が存在しない場合は何もしない
    return;
  }
  var tl = gsap.timeline({
    onComplete: initSwiper
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
});