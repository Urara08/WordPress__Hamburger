<?php get_header(); ?>
<?php /*Template Name:アイテム;*/ ?>

<main class="l-main">
  <div class="l-hero">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

      <section id="<?php the_title(); ?>" class="p-hero__single">
      <div class="item_photo__wrapper">
        <img class="item_photo" src="<?php echo CFS()->get('item_photo','large-item'); ?>" alt="<?php the_title(); ?>">
      </div>
      <h2 class="p-hero__label"><?php echo CFS()->get('item_title'); ?></h2>
    </section>
  </div>
    <section class="p-contents__single">
      <div class="p-contents__single__inner--top">
        <div class="p-contents__single__block-lead__area">
          <section class="p-contents__single__block-lead">
            <div class="p-contents__single__block-lead__inner">
              <h2 class="p-contents__single__block-lead__title  tag-h2"><?php echo CFS()->get('item_title'); ?></h2><br>
              <p class="p-contents__single__block-lead__text"><?php echo CFS()->get('item_text'); ?></p>
            </div>
          </section>
        </div>
        <?php endwhile;
        else :
      ?>
      <p>表示する記事がありません</p>
      <?php endif;
      ?>

<div class="p-contents__single__inner--bottom">
</div>

</section>
</main>

<?php get_footer(); ?>
<?php get_sidebar(); ?>
