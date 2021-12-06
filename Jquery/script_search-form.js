$(function(){
  $('input').focusin(function(e)  {//検索ボックスがフォーカスされると
      $('.js-search-form__icon').addClass('is-active')//虫眼鏡が消える
    });

  $('input').focusout(function(e)  {//検索ボックスのフォーカスが外れると
      $('.js-search-form__icon').removeClass('is-active')//虫眼鏡が現れる
    });
  });
