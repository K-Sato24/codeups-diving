
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
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 24,
  // centeredSlides: true,
  navigation: {
    nextEl: ".js-campaign-swiper-button-next",
    prevEl: ".js-campaign-swiper-button-prev",
  },
  breakpoints: {
    // スライドの表示枚数：500px以上の場合
    768: {
      allowTouchMove: true,
      spaceBetween: 40,
    }
  }
});