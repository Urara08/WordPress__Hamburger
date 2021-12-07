<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=375,initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/Scss/common.css'));?>" type="text/css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-rqn26AG5Pj86AF4SO72RK5fyefcQ/x32DNQfChxWvbXIyXFePlEktwD18fEz+kQU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
  <script src="<?php echo esc_url(get_theme_file_uri('/jquery/jquery-3.6.0.min.js'));?>"></script>
  <script src="<?php echo esc_url(get_theme_file_uri('/jquery/script_sidebar.js'));?>"></script>
  <script src="<?php echo esc_url(get_theme_file_uri('/jquery/script_search-form.js'));?>"></script>
  <?php wp_head(); ?>
</head>
<body>
  <div class="l-body js-body">
    <header  class="l-header">
      <div class="p-header">
        <div class="p-header__wrapper">
          <div class="c-wrapper__logo header__ttl">
            <h1 class="c-logo--title--hamburger header__ttl__sub">Hamburger</h1>
          </div>
          <?php get_search_form(); ?>
      <div class="c-btn--menu__wrapper">
            <div class="toggle_btn c-btn--menu "><p class="c-btn--menu__label">Menu</p></div>
          </div><!-- c-btn--menu__wrapperここまで -->
        </div>
      </div>
    </header>
