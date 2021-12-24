<?php get_header(); ?>

<!-- hero-->
<main class="l-main">

      <div class="l-hero">
<section class="p-hero__page">
  <div class="p-hero__page__png--sp p-hero__page__png--pc " style="background-image: url(<?php the_post_thumbnail_url(); ?>)" alt="背景の画像"></div>
  <h2 class="p-hero__label"><?php the_title(); ?></h2>
        </section>
      </div>
      <section class="p-contents__single">
        <div class="p-contents__single__inner--top">
</div>
<?php get_template_part("components/loop-contents"); ?>

<div class="p-contents__single__inner--bottom">
</div>
</section>

</main>
<?php get_footer(); ?>
  <?php get_sidebar(); ?>
