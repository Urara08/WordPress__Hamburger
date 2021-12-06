$(function(){
  window.onload = function(){
      $('.c-btn--menu').on('click', function () {//MENUボタンをクリックすると
      $('.c-btn--menu, .js-sidebar, .js-sidebar__menu__close-btn , .js-overlay, .js-body').toggleClass('is-show',)//サイドバーが出る
    });

  $('.js-sidebar__menu__close-btn').on('click', function () {//✕ボタンをクリックすると
      $('.js-sidebar, .js-overlay, .js-sidebar__menu__close-btn, .js-body').removeClass('is-show')//サイドバーが閉じる
    });

  $(window).on('resize', function () {//画面をリサイズすると
      $('.js-sidebar, .js-overlay, .js-sidebar__menu__close-btn, .js-body').removeClass('is-show')//サイドバーが閉じる
    });
  }});
