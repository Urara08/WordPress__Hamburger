<?php get_header(); ?>

<main class="l-main">
  <div class="p-hero"><!-- heroここから-->
  <section class="p-hero__page">
  <div class="p-hero__page__png--sp p-hero__page__png--pc " style="background-image: url(<?php the_post_thumbnail_url(); ?>)" alt="背景の画像"></div><!--アイキャッチ画像読み込み-->
  <h2 class="p-hero__page__menu-label"><?php the_title(); ?></h2>
</section>
</div><!-- heroここまで-->

<section class="p-contents__single"><!-- コンテンツここから->
  <div class="p-contents__single__inner--top"></div>

<!-- コンテンツのループ-->
<?php get_template_part("components/loop-contents"); ?>

<div class="p-contents__single__inner--bottom">
</div>
</section><!-- コンテンツここまで-->
</main>

<?php get_footer(); ?>
<?php get_sidebar(); ?>
