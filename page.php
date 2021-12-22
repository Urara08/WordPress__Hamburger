<?php get_header(); ?>
<?php /*Template Name:ショップ情報;*/ ?>
<!-- hero-->
<main class="l-main">
      <div class="l-hero">
<section class="p-hero__page">
  <div class="p-hero__page__png--sp p-hero__page__png--pc " style="background-image: url(<?php echo CFS()->get('shop_photo'); ?>)" alt="ハンバーガーの画像"></div>
  <h2 class="p-hero__label"><?php echo CFS()->get('shop_title'); ?></h2>
        </section>
      </div>
      <section class="p-contents__single">
        <div class="p-contents__single__inner--top">
          <div class="p-contents__single__block-lead__area">
            <section class="p-contents__single__block-lead">
              <div class="p-contents__single__block-lead__inner">
                <h2 class="p-contents__single__block-lead__title  tag-h2"><?php echo CFS()->get('shop_title'); ?></h2>
                <p class="p-contents__single__block-lead__text"><?php echo CFS()->get('shop_text'); ?></p>
              </div>
            </section>
          </div>
<?php get_template_part("loop-contents"); ?>
</div>


<div class="p-contents__single__inner--bottom">
</div>
</section>
</main>
<?php get_footer(); ?>
  <?php get_sidebar(); ?>
