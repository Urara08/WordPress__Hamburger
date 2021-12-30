<?php get_header(); ?>
<main class="l-main">

<section class="p-hero__archive">
  <div class="p-hero__archive__png--pc" style="background-image: url(<?php echo esc_url(get_theme_file_uri('/Img/hero_pc__archive.png'));?>"  alt="ハンバーガーの画像"></div><!-- 画像はCSSから参照 -->
  <div class="p-hero__archive__png--sp" style="background-image: url(<?php echo esc_url(get_theme_file_uri('/Img/hero_sp__archive.png'));?>"  alt="ハンバーガーの画像"></div><!-- 画像はCSSから参照 -->
  <h2 class="p-hero__archive__menu-label">Menu:</h2>
  <h3 class="p-hero__archive__item-label"><?php wp_title(''); ?></h3><!-- ページのタイトルを表示 -->
</section>

<article class="p-contents__archive">

<section class="p-contents__archive__introduction"><!-- 導入記事　ここから -->
  <div class="p-contents__archive__introduction__inner">

    <h2 class="p-contents__archive__introduction__title"><?php single_cat_title(); ?></h2><!-- カテゴリー名を表示 -->
    <div class="p-contents__archive__introduction__text">
    <?php echo category_description( $category_id ); ?><!-- カテゴリーの概要を表示 -->
    </div>

  </div><!-- introduction__innerここまで -->
</section><!-- 導入記事ここまで -->

<div class="p-contents__archive__inner--middle">
  <ul <?php post_class('p-contents__archive__cards'); ?>>

<?php if (have_posts()): ?>
  <?php while ( have_posts() ) : the_post(); ?>


  <div class="c-wrapper--card--archive">
      <li class="c-card--archive">
        <div class="thumbnail">
          <?php
          if(has_post_thumbnail() ) :
            the_post_thumbnail('');
            else :
              ?>
              <div class="no-thumbnail"></div>
              <?php
              endif;
              ?>
              </div>

              <div class="c-caption-group--card--archive">
                    <h3 class="c-category--card"><?php the_title(); ?></h3>
                    <h4 class="c-sub-heading--card"><?php  the_title(); ?></h4>
                    <div class="c-detail--card--archive"><?php the_excerpt(); ?></div>
                    <div class="c-btn-wrapper--card--archive">
                      <div class="c-btn--card"><a lass="c-btn--card" href="<?php echo esc_url( home_url( '/' ) ); ?>item/<?php global $post; echo($slug = $post->post_name);?>" class="c-btn-label--card">詳しくみる</a></div>
                    </div>

              </div>
            </li>
          </div>


      <?php endwhile; ?>
      <?php else : ?><!-- 検索されたアイテムがない場合-->
        <p>入力されたキーワードに該当する結果はありませんでした。入力キーワードを変更して再度検索を行ってください。</p>
        <?php endif; ?>
      </ul>
    </div>

    <div class="p-contents__archive__inner--bottom">
      <!-- ページネーション 読み込み-->
      <?php wp_pagenavi(); ?>
    </div><!-- inner--bottomここまで -->
  </article>
</main>

      <?php get_footer(); ?>
      <?php get_sidebar(); ?>
