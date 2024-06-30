"use strict";

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
  $(window).resize(function () {
    var md = 768;
    if ($(window).width() >= md) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-header").removeClass("is-active");
      $(".js-drawer").hide();
    }
    ;
  });


// Contact Form 7 で必須項目未入力で送信できない場合、
// フォーム上部にスクロールさせる
  var form = $('.wpcf7-form');
  var targetId = '#contact-form__error-message'; // スクロールしたいIDを指定
  var headerHeight = $('.header').outerHeight(); // ヘッダーの高さを取得（'.header' はヘッダーのセレクタに置き換えてください）

  // フォームが存在するかチェック
  if (form.length > 0) {
    // MutationObserverを使用してクラスの変更を監視
    var observer = new MutationObserver(function(mutations) {
      mutations.forEach(function(mutation) {
        // .invalid クラスが付与された場合の処理
        if ($(mutation.target).hasClass('invalid')) {
          // 特定のIDの位置を取得し、ヘッダーの高さを考慮してスクロール位置を調整
          var position = $(targetId).offset().top - headerHeight;
          $('html, body').animate({
            scrollTop: position
          }, 300); // 300ミリ秒でアニメーション
        }
      });
    });

    // 各フォーム要素に対してMutationObserverを設定
    form.each(function() {
      observer.observe(this, {
        attributes: true,         // 属性の変化を監視
        attributeFilter: ['class'] // 監視する属性をクラスに限定
      });
    });
  }




});

// --------------上 jQuery ------------------

// fvスライダー
function initSwiper() {
  var swiper = new Swiper(".js-fv-swiper", {
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

// Campaignスライダー
var swiper = new Swiper(".js-campaign-swiper", {
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 24,
  navigation: {
    nextEl: ".js-campaign-swiper-button-next",
    prevEl: ".js-campaign-swiper-button-prev"
  },
  breakpoints: {
    768: {
      spaceBetween: 40
    }
  }
});

// 画像アニメーション
var box = $('.js-slide-color-box'),
  speed = 700;
box.each(function () {
  $(this).append('<div class="slide-color"></div>');
  var color = $(this).find($('.slide-color')),
    image = $(this).find('img');
  var counter = 0;
  image.css('opacity', '0');
  color.css('width', '0%');
  color.on('inview', function () {
    if (counter == 0) {
      $(this).delay(200).animate({
        'width': '100%'
      }, speed, function () {
        image.css('opacity', '1');
        $(this).css({
          'left': '0',
          'right': 'auto'
        });
        $(this).animate({
          'width': '0%'
        }, speed);
      });
      counter = 1;
    }
  });
});

// ページトップへ戻る
var pageTop = document.querySelector(".js-paage-top");
var pageTopColor = document.querySelector(".js-page-top-color");
var footer = document.querySelector(".footer");
window.addEventListener("scroll", function () {
  var footerRect = footer.getBoundingClientRect();
  var windowHeight = window.innerHeight;
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

// // モーダル
document.addEventListener("DOMContentLoaded", function () {
  var modal = document.querySelector(".js-gallery-modal");
  if (!modal) {
    // このページには .js-gallery-modal 要素が存在しないため、処理を中断
    return;
  }
  var modalImage = modal.querySelector(".about-gallery__modal-image img");
  if (!modalImage) {
    console.error(".about-gallery__modal-image img が見つかりません");
    return;
  }
  var modalOpenItems = document.querySelectorAll(".js-gallery-modal-open");
  modalOpenItems.forEach(function (modalOpenItem) {
    modalOpenItem.addEventListener("click", function (e) {
      e.preventDefault();
      var img = modalOpenItem.querySelector("img");
      if (img) {
        var src = img.getAttribute("src");
        var alt = img.getAttribute("alt");
        modalImage.setAttribute("src", src);
        modalImage.setAttribute("alt", alt);
      }
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

// // informationタブ
$(document).ready(function () {
  var tabButton = $(".js-tab-button"),
    tabContent = $(".js-tab-content");
  function activateTab(tabName) {
    tabButton.removeClass("is-active");
    tabContent.removeClass("is-active");

    // タブボタンとタブコンテンツを一致させる
    tabButton.each(function (index) {
      if (tabContent.eq(index).attr("id") === tabName) {
        $(this).addClass("is-active");
        tabContent.eq(index).addClass("is-active");
      }
    });
  }

  // ページ読み込み時にクエリパラメーターを確認してタブを表示
  var params = new URLSearchParams(window.location.search);
  var tab = params.get('tab');
  if (tab) {
    activateTab(tab);
  }

  // タブクリック時の処理（is-activeクラスのつけ外しのみ）
  tabButton.on("click", function () {
    var index = tabButton.index(this);
    tabButton.removeClass("is-active");
    $(this).addClass("is-active");
    tabContent.removeClass("is-active");
    tabContent.eq(index).addClass("is-active");
  });

  // 初回ロード時にタブの状態を更新
  if (tab) {
    activateTab(tab);
  }
});

// Price パラメータページ遷移（スクロール）
window.addEventListener('DOMContentLoaded', function (event) {
  var urlParams = new URLSearchParams(window.location.search);
  var table = urlParams.get('table');
  if (table) {
    var element = document.getElementById(table);
    if (element) {
      var headerHeight = document.querySelector('header').offsetHeight;
      var elementStyle = window.getComputedStyle(element);
      var marginTop = parseFloat(elementStyle.marginTop);

      // margin-topが0の場合は40pxのスペースを確保
      if (marginTop === 0) {
        marginTop = 40;
      }
      var elementPosition = element.getBoundingClientRect().top;
      var offsetPosition = elementPosition - headerHeight - marginTop;
      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
      });
    }
  }
});

// Contact お問い合わせ項目 reqired
// name属性でチェックボックスを取得する
var checkBoxes = $('[name="inquiry-item"]');

//チェックボックスの状態変化時に処理する
checkBoxes.on('change', function () {
  //チェック済チェックボックス数をカウント
  var isCheckedCount = checkBoxes.filter(':checked');
  isCheckedCount.length > 0
  //カウントが1以上の場合は全チェックボックスのrequired属性を削除する
  ? checkBoxes.attr('required', false)
  //カウントが0の場合は全チェックボックスにrequired属性を付与する
  : checkBoxes.attr('required', true);
});

// FAQアコーディオン
document.addEventListener("DOMContentLoaded", function () {
  setUpAccordion();
});

/**
 * ブラウザの標準機能(Web Animations API)を使ってアコーディオンのアニメーションを制御します
 */
var setUpAccordion = function setUpAccordion() {
  var details = document.querySelectorAll(".js-details");
  var RUNNING_VALUE = "running"; // アニメーション実行中のときに付与する予定のカスタムデータ属性の値
  var IS_OPENED_CLASS = "is-opened"; // アイコン操作用のクラス名

  details.forEach(function (element) {
    var summary = element.querySelector(".js-summary");
    var content = element.querySelector(".js-accordion-content");
    summary.addEventListener("click", function (event) {
      // デフォルトの挙動を無効化
      event.preventDefault();

      // 連打防止用。アニメーション中だったらクリックイベントを受け付けないでリターンする
      if (element.dataset.animStatus === RUNNING_VALUE) {
        return;
      }

      // detailsのopen属性を判定
      if (element.open) {
        // アコーディオンを閉じるときの処理
        // アイコン操作用クラスを切り替える(クラスを取り除く)
        element.classList.toggle(IS_OPENED_CLASS);

        // アニメーションを実行
        var closingAnim = content.animate(closingAnimKeyframes(content), animTiming);
        // アニメーション実行中用の値を付与
        element.dataset.animStatus = RUNNING_VALUE;

        // アニメーションの完了後に
        closingAnim.onfinish = function () {
          // open属性を取り除く
          element.removeAttribute("open");
          // アニメーション実行中用の値を取り除く
          element.dataset.animStatus = "";
        };
      } else {
        // アコーディオンを開くときの処理
        // open属性を付与
        element.setAttribute("open", "true");

        // アイコン操作用クラスを切り替える(クラスを付与)
        element.classList.toggle(IS_OPENED_CLASS);

        // アニメーションを実行
        var openingAnim = content.animate(openingAnimKeyframes(content), animTiming);
        // アニメーション実行中用の値を入れる
        element.dataset.animStatus = RUNNING_VALUE;

        // アニメーション完了後にアニメーション実行中用の値を取り除く
        openingAnim.onfinish = function () {
          element.dataset.animStatus = "";
        };
      }
    });
  });
};

/**
 * アニメーションの時間とイージング
 */
var animTiming = {
  duration: 400,
  easing: "ease-out"
};

/**
 * アコーディオンを閉じるときのキーフレーム
 */
var closingAnimKeyframes = function closingAnimKeyframes(content) {
  return [{
    height: content.offsetHeight + 'px',
    // height: "auto"だとうまく計算されないため要素の高さを指定する
    opacity: 1
  }, {
    height: 0,
    opacity: 0,
    marginTop: 0,
    paddingBlock: 0
  }];
};

/**
 * アコーディオンを開くときのキーフレーム
 */
var openingAnimKeyframes = function openingAnimKeyframes(content) {
  return [{
    height: 0,
    opacity: 0,
    marginTop: 0,
    paddingBlock: 0
  }, {
    height: content.offsetHeight + 'px',
    opacity: 1
  }];
};

// フォームバリデーション（静的）
function validateForm() {
  var form = document.querySelector('.js-required');
  var requiredFields = form.querySelectorAll('[required]');
  var isValid = true;
  requiredFields.forEach(function (field) {
    if (!field.value.trim()) {
      isValid = false;
    }
  });
  var errorMessage = document.getElementById('contact-form__error-message');
  if (!isValid) {
    errorMessage.style.display = 'flex';
    return false; // フォームの送信を中止
  } else {
    errorMessage.style.display = 'none';
    return true; // フォームを送信
  }
}

// informationのタブ切り替え    const params = new URLSearchParams(window.location.search);
// const tab = params.get('tab');
// if (tab) {
//     document.querySelector(`#tab${tab}`).classList.add('is-active');
// } else {
//     document.querySelector('.tab-content').classList.add('is-active');
// }
