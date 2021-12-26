<form class="p-search-form" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<input class="p-search-form__keyword" type="text"  value="<?php the_search_query()?>" name="s" id="s">
<a class="js-search-form__icon"><img class="p-search-form__icon" src="<?php echo esc_url(get_theme_file_uri('/img/search-icon.png'));?>"></a>
<button class= "p-search-form__button" type="submit" ><a class= "p-search-form__button__label">検索</a></button>
</form>
