<aside class="l-sidebar">
    <div class="p-sidebar js-sidebar">
      <a class=" p-sidebar__menu__close-btn">
        <i class=" fal fa-times fa-3x js-sidebar__menu__close-btn"></i>
      </a>
      <ul class="p-sidebar__nav"><a class="p-sidebar__nav__label">Menu</a>
      <li><strong class="p-sidebar__nav__title">バーガー</strong>
      <?php wp_nav_menu( array('theme_location' => 'item_1',) ); ?>
      </li>
      <li><strong class="p-sidebar__nav__title">サイド</strong>
      <?php wp_nav_menu( array('theme_location' => 'item_2',) ); ?>
      </li>
      <li><strong class="p-sidebar__nav__title">ドリンク</strong>
      <?php wp_nav_menu( array('theme_location' => 'item_3',) ); ?>
    </ul>
    </div>
  </aside>
