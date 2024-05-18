
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  // ハンバーガー
  $(function () {
    $(".js-hamburger,.js-drawer").click(function () {
      $(".js-hamburger").toggleClass("is-active");
      $(".js-header").toggleClass("is-active");
      $(".js-drawer").fadeToggle();
      // $("body").toggleClass("is-fixed");
    });
  });

});

// fvスライダー
var swiper = new Swiper(".js-fv-swiper", {
  loop: true,
  effect: "fade",
  speed: 600,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
});


// Campaignスライダー
var swiper = new Swiper(".js-campaign-swiper", {
  slidesPerView: "auto",
  spaceBetween: 24,
  // centeredSlides: true,
  allowTouchMove: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});