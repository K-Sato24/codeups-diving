
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
