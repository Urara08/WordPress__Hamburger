<footer class="l-footer">
        <div class="p-footer" style="background-image: url(<?php echo esc_url(get_theme_file_uri('/Img/c-footer.png'));?>)">
          <div class="p-footer__wrapper">
            <ul class="p-footer__menu">
              <li class="p-footer__menu__info"><?php wp_nav_menu( array('theme_location' => 'footer_1',) ); ?></li>
              <li class="p-footer__menu__copy">Copyright: RaiseTech</li>
          </ul>
        </div>
      </div>
    </footer>
  </article>
  <div class="c-overlay js-overlay"></div>
  <?php wp_footer(); ?>
</body>
</html>
