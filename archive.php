<?php get_header(); ?>

<main class="l-main">
  <div class="l-hero"><!-- アイキャッチ（ヒーロー）　ここから -->
  <section class="p-hero__archive"><!-- 見出しのある文章記事なのでsection -->
  <div class="p-hero__archive__png--pc p-hero__archive__png--sp" style="background-image: url(<?php the_post_thumbnail_url(); ?>)" alt="背景の画像"></div>

  <h2 class="p-hero__archive__menu-label">Menu:</h2>
  <h3 class="p-hero__archive__item-label"><?php wp_title(''); ?></h3>
</section>
</div><!-- アイキャッチ（ヒーロー）　ここまで -->

<article class="p-contents__archive">
<div class="p-contents__archive__inner--top">
  <section class="p-contents__archive__introduction"><!-- 導入記事　ここから -->
  <div class="p-contents__archive__introduction__inner">
    <h2 class="p-contents__archive__introduction__title"><?php echo category_description( $category_id ); ?></h2>
    <p class="p-contents__archive__introduction__text"><?php echo category_description( get_category_by_slug('category-slug')->term_id ); ?></p>
  </div>
</section><!-- 導入記事　ここまで -->
</div><!-- p-contents__archive__inner--top　ここまで -->


        <?php get_template_part("components/archive"); ?>


        <div class="p-contents__archive__inner--bottom">
          <!-- ページネーション -->
              <?php wp_pagenavi(); ?>
              <!-- ページネーションここまで -->
            </div><!-- inner--bottomここまで -->
          </article>
        </main>
        <?php get_footer(); ?>
        <?php get_sidebar(); ?>
