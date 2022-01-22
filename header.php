<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="l-body js-body">
    <header  class="l-header">
      <div class="p-header">
        <div class="p-header__wrapper">
          <div class="c-wrapper__logo" >
            <h1 class="c-logo--title--hamburger header__ttl"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
          </div>
          <?php get_search_form(); ?>
          <div class="c-btn--menu__wrapper">
            <div tabindex="0" class="toggle_btn c-btn--menu clickable"><p class="c-btn--menu__label">Menu</p></div>
          </div><!-- c-btn--menu__wrapperここまで -->
        </div>
      </div>
    </header>
