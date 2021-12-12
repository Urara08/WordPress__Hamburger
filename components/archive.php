<div class="p-contents__archive__inner--middle">
  <section class="p-contents__archive__cards">
    <?php
    if(have_posts()) :
      while(have_posts()) :
        the_post();
        ?>
        <div class="c-wrapper--card--archive">
          <figure class="c-card--archive">
            <div class="c-photo-frame--card--archive">
              <div class="thumbnail">
                <?php
                if(has_post_thumbnail() ) :
                  the_post_thumbnail();
                  else :
                    ?><div class="no-thumbnail"></div><?php
                  endif;
                  ?>
                  </div>
                </div>
                  <figcaption class="c-caption-group--card--archive">
                    <h3 class="c-category--card"><?php the_title(); ?></h3>
                    <h4 class="c-sub-heading--card"><?php  the_title(); ?></h4>
                    <div class="c-detail--card--archive"><?php the_excerpt(); ?></div>
                    <div class="c-btn-wrapper--card--archive">
                      <div class="c-btn--card"><a href="<?php the_permalink(); ?>" class="c-btn-label--card">詳しくみる</a></div>
                      </div>
              </figcaption>
            </figure>
          </div>
              <?php
              endwhile;
            else:
            ?>
            <p class="c-card--archive">お探しの商品は見つかりませんでした</p><?php
            endif;
            ?>
            </section><!-- card　ここまで -->
          </div><!-- Inner--middleの最後 -->
