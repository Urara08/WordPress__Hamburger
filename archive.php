<?php get_header(); ?>
    <main class="l-main">
      <div class="l-hero"><!-- アイキャッチ（ヒーロー）　ここから -->
        <section class="p-hero__archive"><!-- 見出しのある文章記事なのでsection -->
          <div class="p-hero__archive__png--pc" alt="ハンバーガーの画像"></div>
          <div class="p-hero__archive__png--sp" alt="ハンバーガーの画像"></div>
          <h2 class="p-hero__archive__menu-label">Menu:</h2>
          <h3 class="p-hero__archive__item-label">チーズバーガー</h3>
        </section>
      </div><!-- アイキャッチ（ヒーロー）　ここまで -->
      <article class="p-contents__archive"><!-- ここから下コンテンツ -->
        <div class="p-contents__archive__inner--top">
          <section class="p-contents__archive__introduction"><!-- 導入記事　ここから -->
            <div class="p-contents__archive__introduction__inner">
              <h2 class="p-contents__archive__introduction__title">小見出しが入ります</h2>
              <p class="p-contents__archive__introduction__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
          </section><!-- 導入記事　ここまで -->
        </div><!-- p-contents__archive__inner--top　ここまで -->
        <div class="p-contents__archive__inner--middle">
          <section class="p-contents__archive__cards"><!-- card　ここから -->
            <div class="c-wrapper--card--archive">
            <figure class="c-card--archive"><!-- 商品詳細　① -->
              <div class="c-photo-frame--card--archive">
                <div class="c-photo--archive" alt="ハンバーガーの画像"></div>
              </div>
              <figcaption class="c-caption-group--card--archive">
                <h3 class="c-category--card">チーズバーガー</h3>
                <h4 class="c-sub-heading--card">小見出しが入ります</h4>
                <p class="c-detail--card--archive">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <div class="c-btn-wrapper--card--archive">
                  <div class="c-btn--card"><a class="c-btn-label--card">詳しくみる</a></div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="c-wrapper--card--archive">
            <figure class="c-card--archive"><!-- 商品詳細　② -->
              <div class="c-photo-frame--card--archive">
                <div class="c-photo--archive" alt="ハンバーガーの画像"></div>
              </div>
              <figcaption class="c-caption-group--card--archive">
                <h3 class="c-category--card">ダブルチーズバーガー</h3>
                <h4 class="c-sub-heading--card">小見出しが入ります</h4>
                <p class="c-detail--card--archive">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <div class="c-btn-wrapper--card--archive">
                  <div class="c-btn--card"><a class="c-btn-label--card">詳しくみる</a></div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="c-wrapper--card--archive">
            <figure class="c-card--archive"><!-- 商品詳細　③ -->
              <div class="c-photo-frame--card--archive">
                <div class="c-photo--archive" alt="ハンバーガーの画像"></div>
              </div>
              <figcaption class="c-caption-group--card--archive">
                <h3 class="c-category--card">スペシャルチーズバーガー</h3>
                <h4 class="c-sub-heading--card">小見出しが入ります</h4>
                <p class="c-detail--card--archive">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <div class="c-btn-wrapper--card--archive">
                  <div class="c-btn--card"><a class="c-btn-label--card">詳しくみる</a></div>
                </div>
              </figcaption>
            </figure>
          </div>
          </section><!-- card　ここまで -->
        </div><!-- Inner--middleの最後 -->
        <div class="p-contents__archive__inner--bottom">
              <ul class="p-pages__list-group"><!-- ページネーション -->
                <li class="p-pages__list-group-item__title">page</li>
                <li class="p-pages__list-group-item__counter">1/10</li>
                <li class="p-pages__list-group-item__back--sp"><a href="#"><img class="p-pages__list-group-item__back__png--sp" src="<?php echo esc_url(get_theme_file_uri('img/グループ 7.png'));?>" alt="前のページへ"><span class="p-pages__list-group-item__back__word--sp">前へ</span></a></li>
                <li class="p-pages__list-group-item__back--pc"><a href="#"><img class="p-pages__list-group-item__back__png--pc" src="<?php echo esc_url(get_theme_file_uri('img/グループ 7.png'));?>" alt="前のページへ"></a></li>
                <li class="p-pages__list-group-item this"><a href="#">1</a></li>
                <li class="p-pages__list-group-item"><a href="#">2</a></li>
                <li class="p-pages__list-group-item"><a href="#">3</a></li>
                <li class="p-pages__list-group-item"><a href="#">4</a></li>
                <li class="p-pages__list-group-item"><a href="#">5</a></li>
                <li class="p-pages__list-group-item"><a href="#">6</a></li>
                <li class="p-pages__list-group-item"><a href="#">7</a></li>
                <li class="p-pages__list-group-item"><a href="#">8</a></li>
                <li class="p-pages__list-group-item"><a href="#">9</a></li>
                <li class="p-pages__list-group-item__next--sp"><a href="#"><span class="p-pages__list-group-item__next__word--sp">次へ</span><img class="p-pages__list-group-item__next__png--sp" src="<?php echo esc_url(get_theme_file_uri('img/グループ 8.png'));?>" alt="次のページへ"></a></li>
                <li class="p-pages__list-group-item__next--pc"><a href="#"><img class="p-pages__list-group-item__next__png--sp" src="<?php echo esc_url(get_theme_file_uri('img/グループ 8.png'));?>" alt="次のページへ"></a></li>
              </ul><!-- ページネーションの最後 -->
            </div><!-- Inner--middleここまで -->
          </article>
        </main>
        <?php get_footer(); ?>
        <?php get_sidebar(); ?>
