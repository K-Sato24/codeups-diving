
jQuery(function ($) {

  // ハンバーガー、ドロワー
$(function () {
  $(".js-hamburger, .js-drawer-link").click(function (event) {
    event.stopPropagation();
    $(".js-hamburger").toggleClass("is-active");
    $(".js-header").toggleClass("is-active");
    $(".js-drawer").fadeToggle();
    $("body").toggleClass("is-fixed");
  });

    $(".header__logo-link").click(function () {
      if ($(".js-drawer").is(":visible")) {
          $(".js-hamburger").removeClass("is-active");
          $(".js-header").removeClass("is-active");
          $(".js-drawer").fadeOut();
          $("body").removeClass("is-fixed");
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

// // ページトップへ戻る
// const pageTop = document.querySelector(".js-paage-top");
// window.addEventListener("scroll", function() {
//   if (100 < window.scrollY) {
//     pageTop.classList.add("is-show");
//   } else {
//     pageTop.classList.remove("is-show");
//   }
// });

// ページトップへ戻る
const pageTop = document.querySelector(".js-paage-top");
const pageTopColor = document.querySelector(".js-page-top-color");
const footer = document.querySelector(".footer");

window.addEventListener("scroll", function() {
  const footerRect = footer.getBoundingClientRect();
  const windowHeight = window.innerHeight;

  if (window.scrollY > 100) {
    pageTop.classList.add("is-show");
  } else {
    pageTop.classList.remove("is-show");
  }

  if (footerRect.top <= windowHeight) {
    pageTopColor.classList.add("is-color");
  } else {
    pageTopColor.classList.remove("is-color");
  }
});

// // モーダル画像のパスを取得
// $(".js-gallery-modal-open").click(function () {
//   var src = $(this).attr("src");
//   var cap = $(this).attr("alt");
//   // $(".js-gallery-modal").fadeIn().css("display", "flex");

//   $(".js-gallery-modal-open > img").attr("src", src);
//   $(".caption").attr("alt", alt);
// });



// // モーダル
// const galleryModals = document.querySelectorAll(".js-gallery-modal");
// const modalOpenItems = document.querySelectorAll(".js-gallery-modal-open");

// modalOpenItems.forEach(function (modalOpenItem) {
//   modalOpenItem.addEventListener("click", function (e) {
//     e.preventDefault();
//     galleryModals.forEach(function (galleryModal) {
//       setTimeout(function () {
//         galleryModal.showModal();
//         document.body.classList.add("is-fixed");
//       }, 300);
//     });
//   });
// });

// galleryModals.forEach(function (galleryModal) {
//   galleryModal.addEventListener("click", function (e) {
//     if (e.target === galleryModal) {
//       closeModal(galleryModal);
//     }
//   });
// });

// function closeModal(modal) {
//   modal.close();
//   document.body.classList.remove("is-fixed");
// }

// モーダル
document.addEventListener("DOMContentLoaded", function() {
  const modal = document.querySelector(".js-gallery-modal");
  const modalImage = modal.querySelector(".about-gallery__modal-image img");

  const modalOpenItems = document.querySelectorAll(".js-gallery-modal-open");

  modalOpenItems.forEach(function (modalOpenItem) {
    modalOpenItem.addEventListener("click", function (e) {
      e.preventDefault();
      
      const img = modalOpenItem.querySelector("img");
      const src = img.getAttribute("src");
      const alt = img.getAttribute("alt");

      modalImage.setAttribute("src", src);
      modalImage.setAttribute("alt", alt);

      setTimeout(function () {
        modal.showModal();
        document.body.classList.add("is-fixed");
      }, 300);
    });
  });

  modal.addEventListener("click", function (e) {
    if (e.target === modal) {
      closeModal(modal);
    }
  });

  function closeModal(modal) {
    modal.close();
    document.body.classList.remove("is-fixed");
  }
});
