<?php get_header(); ?>
<?php /*Template Name:ブランチメニュー;*/ ?>
      <main class="l-main">
      <?php
    if(have_posts()) :
      while(have_posts()) :
        the_post();
        ?>
        <div class="l-hero">
          <section class="p-hero">
            <div class="p-hero__png--pc p-hero__png--sp"  style="background-image: url(<?php the_post_thumbnail_url(); ?>)" alt="背景の画像"></div><!-- アイキャッチ画像を表示-->
            <h2 class="p-hero__label"><?php bloginfo( 'description' ); ?></h2><!-- サイトの説明の部分を表示-->
          </section>
        </div>
        <div class="p-contents__wrapper">
        <article class="p-contents">

          <ul class="p-contents__inner">
            <li class="p-contents__branch-menu take-out"  style="background-image: url(<?php echo CFS()->get('Take-Out--photo') ?>)"><!-- カスタム投稿の写真を表示-->
              <ul class="p-contents__branch-menu__inner">
              <li><h2 class="p-contents__branch-menu__label"><?php wp_nav_menu( array('theme_location' => 'take-out',) ); ?></h2></li>
              <li><dl class="p-contents__branch-menu__box--top"><dt class="p-contents__branch-menu__box__title">Take Out</dt><dd class="p-contents__branch-menu__box__text"><?php echo CFS()->get('Take-Out--top'); ?></dd></ｄl></li><!-- カスタム投稿のテキストを表示-->
              <li><dl class="p-contents__branch-menu__box--bottom"><dt class="p-contents__branch-menu__box__title">Take Out</dt><dd class="p-contents__branch-menu__box__text"><?php echo CFS()->get('Take-Out--bottom'); ?></dd></dl></li><!-- カスタム投稿のテキストを表示-->
            </ul>
          </li>
          <li class="p-contents__branch-menu eat-in" style="background-image: url(<?php echo CFS()->get('Eat-In--photo') ?>)"><!-- カスタム投稿の写真を表示-->
              <ul class="p-contents__branch-menu__inner">
              <li><h2 class="p-contents__branch-menu__label"><?php wp_nav_menu( array('theme_location' => 'eat-in',) ); ?></h2></li>
              <li><dl class="p-contents__branch-menu__box--top"><dt class="p-contents__branch-menu__box__title">Eat In</dt><dd class="p-contents__branch-menu__box__text"><?php echo CFS()->get('Eat-In--top'); ?></dd></ｄl></li><!-- カスタム投稿のテキストを表示-->
              <li><dl class="p-contents__branch-menu__box--bottom"><dt class="p-contents__branch-menu__box__title">Eat In</dt><dd class="p-contents__branch-menu__box__text"><?php echo CFS()->get('Eat-In--bottom'); ?></dd></dl></li><!-- カスタム投稿のテキストを表示-->
              </ul>
            </li>
          </ul>
        </article>
      </div>
      <div class="p-access-map__wrapper">
        <section class="p-access-map">
          <figure class="p-access-map__png-pc" style="background-image: url(<?php echo CFS()->get('Map--photo--pc') ?>)"></figure><!-- カスタム投稿の写真を表示（PCで表示）-->
          <figure class="p-access-map__png-tab" style="background-image: url(<?php echo CFS()->get('Map--photo--tab') ?>)"></figure><!-- カスタム投稿の写真を表示（Pタブレットで表示）-->
          <figure class="p-access-map__png-sp" style="background-image: url(<?php echo CFS()->get('Map--photo--sp') ?>)"></figure><!-- カスタム投稿の写真を表示（スマホで表示）-->
          <div class="p-access-map__text-group">
          <h3  class="p-access-map__text-group__index"><em"><?php echo CFS()->get('map_title'); ?></em></h3><!-- カスタム投稿のテキストを表示-->
          <p class="p-access-map__text-group__body"><?php echo CFS()->get('map_text'); ?></p><!-- カスタム投稿のテキストを表示-->
        </div>
        <div class="p-access-map__mask"></div>
        <div class="p-access-map__mask-sp"></div>
      </section>
    </div>
  </main>
  <?php
  endwhile;
endif;
?>

  <?php get_footer(); ?>
  <?php get_sidebar(); ?>
