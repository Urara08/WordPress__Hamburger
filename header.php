<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=375,initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="l-body js-body">
    <header  class="l-header">
      <div class="p-header">
        <div class="p-header__wrapper">
          <div class="c-wrapper__logo">
            <a href="<?php echo esc_url(home_url());?>"><h1 class="c-logo--title--hamburger">Hamburger</h1></a>
          </div>
          <?php get_search_form(); ?>
      <div class="c-btn--menu__wrapper">
            <div class="toggle_btn c-btn--menu "><p class="c-btn--menu__label">Menu</p></div>
          </div><!-- c-btn--menu__wrapperここまで -->
        </div>
      </div>
    </header>
