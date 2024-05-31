
jQuery(function ($) {

  // ハンバーガー
$(function () {
  $(".js-hamburger, .js-drawer").click(function (event) {
    event.stopPropagation();
    $(".js-hamburger").toggleClass("is-active");
    $(".js-header").toggleClass("is-active");
    $(".js-drawer").fadeToggle();
    $("body").toggleClass("is-fixed");
  });

  $(".js-header").click(function () {
    if ($(".js-drawer").is(":visible")) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-header").removeClass("is-active");
      $(".js-drawer").fadeOut();
    }
  });

  $(document).click(function () {
    if ($(".js-drawer").is(":visible")) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-header").removeClass("is-active");
      $(".js-drawer").fadeOut();
    }
  });
});

// ブレイクポイントでドロワーメニューを非表示にする
$(window).resize(function() {
  let md = 768; 

  if($(window).width() >= md) {
    $(".js-hamburger").removeClass("is-active");
    $(".js-header").removeClass("is-active");
    $(".js-drawer").hide();
  };
});

});


// fvスライダー
function initSwiper() {
var swiper = new Swiper(".js-fv-swiper", {
  loop: true,
  effect: "fade",
  allowTouchMove: false,
  speed: 600,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
});
}

// Campaignスライダー
var swiper = new Swiper(".js-campaign-swiper", {
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 24,
  navigation: {
    nextEl: ".js-campaign-swiper-button-next",
    prevEl: ".js-campaign-swiper-button-prev",
  },
  breakpoints: {
    768: {
      spaceBetween: 40,
    }
  }
});

// 画像アニメーション
let box = $('.js-slide-color-box'),
    speed = 700;

box.each(function(){
    $(this).append('<div class="slide-color"></div>')
    let color = $(this).find($('.slide-color')),
    image = $(this).find('img');
    let counter = 0;

    image.css('opacity','0');
    color.css('width','0%');
    color.on('inview', function(){
        if(counter == 0){
        $(this).delay(200).animate({'width':'100%'},speed,function(){
                  image.css('opacity','1');
                  $(this).css({'left':'0' , 'right':'auto'});
                  $(this).animate({'width':'0%'},speed);
                })
            counter = 1;
          }
    });
});

// ページトップへ戻る
const pageTop = document.querySelector(".js-paage-top");
window.addEventListener("scroll", function() {
  if (100 < window.scrollY) {
    pageTop.classList.add("is-show");
  } else {
    pageTop.classList.remove("is-show");
  }
});