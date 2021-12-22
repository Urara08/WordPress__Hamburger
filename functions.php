<?php
    function custom_theme_support(){
        add_theme_support('html5',array(
            'search-form',
            'gallery',
            'caption',
            'wp-block-styles',
        ));}

    //テーマサポート
    add_theme_support( 'menus' );//メニューの管理
    add_theme_support( 'title-tag' );//タイトルの吐き出し
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');

    register_nav_menu( 'title_burger', ' サイドタイトル_バーガー ' );
    register_nav_menu( 'title_side', ' サイドタイトル_サイド ' );
    register_nav_menu( 'title_drink', ' サイドタイトル_ドリンク ' );

    register_nav_menu( 'item_1', ' サイドナビゲーション_1 ' );
    register_nav_menu( 'item_2', ' サイドナビゲーション_2 ' );
    register_nav_menu( 'item_3', ' サイドナビゲーション_3 ' );

    register_nav_menu( 'footer_1', ' フッターナビゲーション_1 ' );

    //タイトル出力
    function WordPress__Hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'WordPress__Hamburger_title' );

    function add_files() {
        wp_enqueue_style( 'M+PLUS+1p', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300;400;500;700&display=swap', array() );//googleフォント読み込み
        wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap', array() );//googleフォント読み込み
        wp_enqueue_style( 'stylesheet', get_theme_file_uri( '/Scss/common.css' ), false );//CSSの読み込み
        wp_enqueue_style( 'font-awesome', 'https://pro.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4' );//font_awesome読み込み
        wp_deregister_script( 'jquery'); //デフォルトの jQuery は読み込まない
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery/jquery-3.6.0.min.js', "", "3.6.0", true );// jQuery本体読み込み
        wp_enqueue_script( 'sidebar.js', get_template_directory_uri() . '/jquery/script_sidebar.js', array('jquery'), '1.0.0', true);// jQueryスクリプトファイル読み込み
        wp_enqueue_script( 'search-form.js', get_template_directory_uri() . '/jquery/script_search-form.js', array('jquery'), '1.0.0', true);// jQueryスクリプトファイル読み込み
    }
    add_action( 'wp_enqueue_scripts', 'add_files' );// 関数の実行

    //カスタム投稿
    function add_custom_post_type(){
        // アイテム
        register_post_type(
            'item', // 1.投稿タイプ名
            array(   // 2.オプション
                'label' => 'アイテム', // 投稿タイプの名前
                'public'        => true, // 利用するのでtrue
                'has_archive'   => true, // アーカイブを有効にする
                'menu_position' => 5, // メニューの位置
                'menu_icon'     => 'dashicons-wordpress', // メニューで使用するアイコン
                'supports' => array( // サポートする機能
                    'title',
                    'author',
                    'thumbnail',
                    'excerpt',
                    'custom-fields' ,
                )
            )
        );
    }
    add_action('init', 'add_custom_post_type');



function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'category'; // 任意のURL
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


// 検索キーワードが未入力時に404.phpにリダイレクトする
function my_set_redirect_template(){
    if (isset($_GET['s']) && empty($_GET['s'])) {
    include('404.php');
    exit;
    }
}
add_action('template_redirect', 'my_set_redirect_template');

/*【出力カスタマイズ】検索対象をカスタム投稿タイプで絞り込む */
function my_pre_get_posts($query) {
    if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
      $query->set( 'post_type', array('item','page','page-history') );
    }
  }
  add_action( 'pre_get_posts','my_pre_get_posts' );
