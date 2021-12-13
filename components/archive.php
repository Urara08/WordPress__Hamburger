
        <div class="p-contents__archive__inner--middle">
<ul class="p-contents__archive__cards"><!-- card　ここから -->

<?php
    if(have_posts()) :
      while(have_posts()) :
        the_post();
        ?>
        <div class="c-wrapper--card--archive">
          <li class="c-card--archive">

              <div class="thumbnail">
                <?php
                if(has_post_thumbnail() ) :
                  the_post_thumbnail('');
                  else :
                    ?><div class="no-thumbnail"></div><?php
                  endif;
                  ?>
                  </div>

                  <div class="c-caption-group--card--archive">
                    <h3 class="c-category--card"><?php the_title(); ?></h3>
                    <h4 class="c-sub-heading--card"><?php  the_title(); ?></h4>
                    <div class="c-detail--card--archive"><?php the_excerpt(); ?></div>
                    <div class="c-btn-wrapper--card--archive">
                      <div class="c-btn--card"><a lass="c-btn--card" href="<?php the_permalink(); ?>" class="c-btn-label--card">詳しくみる</a></div>
                    </div>

                </div>
            </li>
          </div>
              <?php
              endwhile;
            else:
            ?>
            <li class="c-card--archive">お探しの商品は見つかりませんでした</li><?php
            endif;
            ?>
            </ul>
            </div>
