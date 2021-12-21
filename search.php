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
      <h2>
<?php the_search_query(); //検索された文字列を取得 ?>の検索結果</h2>
<div class="row">
<?php if (have_posts()): ?>
  <?php while ( have_posts() ) : the_post(); ?>
        <li>
            <h3><?php the_title(); ?></h3>
            <a href="<?php echo get_the_permalink(); ?>">
            <?php
            if(mb_strlen(get_the_permalink(), 'UTF-8')>80){
                $excerpt= mb_substr(get_the_permalink(), 0, 80);
                echo $excerpt.'...';
            }else{
                echo get_the_permalink();
            }
            ?>
            </a>
        </li>
    <?php endwhile; ?>
<?php else : ?>
        <p>入力されたキーワードに該当する結果はありませんでした。入力キーワードを変更して再度検索を行ってください。</p>
<?php endif; ?>
</main>

<?php get_footer(); ?>
  <?php get_sidebar(); ?>
