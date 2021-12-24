
<!-- コンテンツ -->
<div class="p-contents__archive__inner--middle">
<?php
        if (have_posts() ) :
            while(have_posts() ) : the_post();
        ?>
        <?php the_content(); ?>
        <?php
            endwhile;
        endif;
        ?>
    </div>
