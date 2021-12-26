<?php get_header(); ?>

<!-- カテゴリー検索された時に表示される -->
<main class="l-main">

<section class="p-hero__archive">
  <div class="p-hero__archive__png--pc" alt="ハンバーガーの画像"></div><!-- 画像はCSSから参照 -->
  <div class="p-hero__archive__png--sp" alt="ハンバーガーの画像"></div><!-- 画像はCSSから参照 -->
  <h2 class="p-hero__archive__menu-label">Menu:</h2>
  <h3 class="p-hero__archive__item-label"><?php wp_title(''); ?></h3><!-- ページのタイトルを表示 -->
</section>



<article class="p-contents__archive">
  <div class="p-contents__archive__inner--top">
  <section class="p-contents__archive__introduction"><!-- 導入記事　ここから -->
  <div class="p-contents__archive__introduction__inner">

    <h2 class="p-contents__archive__introduction__title"><?php single_cat_title(); ?></h2><!-- カテゴリー名を表示 -->
    <div class="p-contents__archive__introduction__text">
    <?php echo category_description( $category_id ); ?><!-- カテゴリーの概要を表示 -->
    </div>

  </div><!-- introduction__innerここまで -->
</section><!-- 導入記事ここまで -->
</div><!-- p-contents__archive__inner--top　ここまで -->

        <!-- ループ 読み込み -->
        <?php get_template_part("components/archive"); ?>


        <div class="p-contents__archive__inner--bottom">
          <!-- ページネーション 読み込み-->
          <?php wp_pagenavi(); ?>
        </div><!-- inner--bottomここまで -->

      </article>
        </main>
        <?php get_footer(); ?>
        <?php get_sidebar(); ?>
