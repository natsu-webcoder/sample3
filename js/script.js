jQuery(function($) {
  
  //FAQのアコーディオン
  $('.accordion__question').on('click', function() {
    $(this).toggleClass('active');
    $(this).next().slideToggle(200);
  });

  //ハンバーガーメニュー
  var btnMenu = $(".js-btn-menu");
  var globalNav = $(".p-header-nav");

  btnMenu.on("click", function () {
    btnMenu.toggleClass("is-active");
    globalNav.toggleClass("is-show");
  });

  // メニュー項目がクリックされたときにメニューを閉じる
  $(".p-sp-menu__link").on("click", function () {
    btnMenu.removeClass("is-active");
    globalNav.removeClass("is-show");
  });
});

!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})()


document.addEventListener("DOMContentLoaded", function() {
  new ScrollHint('.js-scrollable');
});