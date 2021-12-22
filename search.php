<?php get_header(); ?>
<main class="l-main">
<div class="l-hero"><!-- アイキャッチ（ヒーロー）　ここから -->
        <section class="p-hero__archive"><!-- 見出しのある文章記事なのでsection -->
          <div class="p-hero__archive__png--pc" alt="ハンバーガーの画像"></div>
          <div class="p-hero__archive__png--sp" alt="ハンバーガーの画像"></div>
          <h2 class="p-hero__archive__menu-label">Menu:</h2>
          <h3 class="p-hero__archive__item-label"><?php wp_title(''); ?></h3>
        </section>
      </div><!-- アイキャッチ（ヒーロー）　ここまで -->

<div class="row">
<?php if (have_posts()): ?>
      <?php if (!$_GET['s']) { ?>
        <p>検索キーワードが未入力です<p>

      <?php } else { ?>


        <?php while(have_posts()):the_post(); ?>

          <article>

              <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>



          </article>
        <?php endwhile; ?>




      <?php } ?>
    <?php else: ?>
      <p>検索されたキーワードに一致する記事はありませんでした</p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
  <?php get_sidebar(); ?>
