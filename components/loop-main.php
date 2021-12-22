//
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php echo get_the_date(); ?>
<?php the_permalink(); ?>
<?php echo get_the_title(); ?>
<?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php else : ?>
        <p>入力されたキーワードに該当する結果はありませんでした。入力キーワードを変更して再度検索を行ってください。</p>
<?php endif; ?>
