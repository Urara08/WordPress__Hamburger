<?php get_header(); ?>
<?php /*Template Name:ブランチメニュー;*/ ?>
      <main class="l-main">
        <div class="l-hero">
          <section class="p-hero">
            <div class="p-hero__png--pc" alt="ハンバーガーの画像"></div>
            <div class="p-hero__png--sp"  alt="ハンバーガーの画像"></div>
            <h2 class="p-hero__label description"><?php bloginfo( 'description' ); ?></h2>
          </section>
        </div>
　　　　<div class="p-contents__wrapper">
        <article class="p-contents">

          <ul class="p-contents__inner">
            <li class="p-contents__branch-menu take-out">
              <ul class="p-contents__branch-menu__inner">
              <li><h2 class="p-contents__branch-menu__label">Take Out</h2></li>
              <li><dl class="p-contents__branch-menu__box--top"><dt class="p-contents__branch-menu__box__title">Take Out</dt><dd class="p-contents__branch-menu__box__text"><?php echo CFS()->get('Take-Out--top'); ?></dd></ｄl></li>
              <li><dl class="p-contents__branch-menu__box--bottom"><dt class="p-contents__branch-menu__box__title">Take Out</dt><dd class="p-contents__branch-menu__box__text"><?php echo CFS()->get('Take-Out--bottom'); ?></dd></dl></li>
            </ul>
          </li>
          <li class="p-contents__branch-menu eat-in">
              <ul class="p-contents__branch-menu__inner">
              <li><h2 class="p-contents__branch-menu__label">Eat In</h2>
              <li><dl class="p-contents__branch-menu__box--top"><dt class="p-contents__branch-menu__box__title">Eat In</dt><dd class="p-contents__branch-menu__box__text"><?php echo CFS()->get('Eat-In--top'); ?></dd></dl></li>
              <li><dl class="p-contents__branch-menu__box--bottom"><dt class="p-contents__branch-menu__box__title">Eat In</dt><dd class="p-contents__branch-menu__box__text"><?php echo CFS()->get('Eat-In--bottom'); ?></dd></dl></li>
            </ul>
            </li>
          </ul>
        </article>
      </div>
      <div class="p-access-map__wrapper">
        <section class="p-access-map">
          <figure class="p-access-map__png-pc" alt="地図"></figure>
          <figure class="p-access-map__png-tab" alt="地図"></figure>
          <figure class="p-access-map__png-sp" alt="地図"></figure>
          <div class="p-access-map__text-group">
          <h3  class="p-access-map__text-group__index"><em"><?php echo CFS()->get('map_title'); ?></em></h3>
          <p class="p-access-map__text-group__body"><?php echo CFS()->get('map_text'); ?></p>
        </div>
        <div class="p-access-map__mask"></div>
        <div class="p-access-map__mask-sp"></div>
      </section>
    </div>
  </main>
  <?php get_footer(); ?>
  <?php get_sidebar(); ?>
