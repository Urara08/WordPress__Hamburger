<?php get_header(); ?>
<main class="l-main">
<div class="l-hero"><!-- アイキャッチ（ヒーロー）　ここから -->
<section class="p-hero__archive">
  <div class="p-hero__archive__png--pc p-hero__archive__png--sp" alt="画像"></div>

  <h2 class="p-hero__archive__menu-label">Menu:</h2>
  <h3 class="p-hero__archive__item-label"><?php wp_title(''); ?></h3>
</section>
</div><!-- アイキャッチ（ヒーロー）　ここまで -->

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
                <h3 class="c-category--card"><?php the_title(); ?></h3>
                <h4 class="c-sub-heading--card"><?php  the_title(); ?></h4>
                <div class="c-detail--card--archive"><?php the_excerpt(); ?></div>
                <div class="c-btn-wrapper--card--archive">
                  <div class="c-btn--card"><a lass="c-btn--card" href="<?php echo home_url('/'); ?>item/<?php global $post; echo($slug = $post->post_name);?>" class="c-btn-label--card">詳しくみる</a></div>
                </div>

              </div>
            </li>
          </div>
        </ul>
      </div>

      <?php endwhile; ?>
      <?php else : ?>
        <p>入力されたキーワードに該当する結果はありませんでした。入力キーワードを変更して再度検索を行ってください。</p>
        <?php endif; ?>
      </article>
      </main>

      <?php get_footer(); ?>
      <?php get_sidebar(); ?>
