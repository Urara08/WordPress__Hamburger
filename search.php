<?php get_header(); ?>
<main class="l-main">

<section class="p-hero__archive">
  <div class="p-hero__archive__png--pc" alt="ハンバーガーの画像"></div><!-- 画像はCSSから参照 -->
  <div class="p-hero__archive__png--sp" alt="ハンバーガーの画像"></div><!-- 画像はCSSから参照 -->

  <h2 class="p-hero__archive__menu-label">Menu:</h2>
  <h3 class="p-hero__archive__item-label"><?php wp_title(''); ?></h3><!-- タイトルを表示 -->
</section>

<article class="p-contents__archive">
<div class="p-contents__archive__inner--top search"></div>


<?php if (have_posts()): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="p-contents__archive__inner--middle">

    <ul class="p-contents__archive__cards"><!-- card　ここから -->
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
                <h3 class="c-category--card"><?php the_title(); ?></h3><!-- タイトルを表示-->
                <h4 class="c-sub-heading--card"><?php  the_title(); ?></h4><!-- タイトルを表示-->
                <div class="c-detail--card--archive"><?php the_excerpt(); ?></div><!-- 文章の続きを表示-->
                <div class="c-btn-wrapper--card--archive">
                  <div class="c-btn--card"><a lass="c-btn--card" href="<?php echo home_url('/'); ?>item/<?php global $post; echo($slug = $post->post_name);?>" class="c-btn-label--card">詳しくみる</a></div>
                </div><!-- 詳細ボタンを押すとアイテム（詳細）ページに転送される-->

              </div>
            </li>
          </div>
        </ul>
      </div>

      <?php endwhile; ?>
      <?php else : ?><!-- 検索されたアイテムがない場合-->
        <p>入力されたキーワードに該当する結果はありませんでした。入力キーワードを変更して再度検索を行ってください。</p>
        <?php endif; ?>
      </article>
      </main>

      <?php get_footer(); ?>
      <?php get_sidebar(); ?>
