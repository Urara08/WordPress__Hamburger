<?php

    //基本機能
    function my_setup(){
    add_theme_support( 'menus' );//メニューの管理
    add_theme_support('post-thumbnails');//アイキャッチ生成
    add_theme_support( 'title-tag' );//タイトルタグ生成
    add_theme_support('automatic-feed-links');//RSSフィード
    add_theme_support('html5',array(
            'search-form',
            'gallery',
            'caption',
            'wp-block-styles',
            ) );
        }
        add_action( 'after_setup_theme', 'my_setup' );


    // CSS / JavaScriptの読み込み
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
        add_action( 'wp_enqueue_scripts', 'add_files' );


    //サムネイルのサイズ設定
    // 'large-feature'という名前で幅100%、高さautoのサムネイルを作成
    add_image_size( 'large-feature', 677, 471, true );
    add_image_size( 'large-item', 1553, 500, true );

    // カスタムメニューの設定
        register_nav_menu( 'title_burger', ' サイドタイトル_バーガー ' );
        register_nav_menu( 'title_side', ' サイドタイトル_サイド ' );
        register_nav_menu( 'title_drink', ' サイドタイトル_ドリンク ' );
        register_nav_menu( 'item_1', ' サイドナビゲーション_1 ' );
        register_nav_menu( 'item_2', ' サイドナビゲーション_2 ' );
        register_nav_menu( 'item_3', ' サイドナビゲーション_3 ' );
        register_nav_menu( 'take-out', ' テイクアウト ' );
        register_nav_menu( 'eat-in', ' イートイン ' );
        register_nav_menu( 'footer_1', ' フッターナビゲーション_1 ' );


    //タイトル出力
    function WordPress__Hamburger_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );//ブログのタイトルを出力・・エスケープの代わりに第二引数に「display」
        } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title( '', false );//タイトルを出力
        }
        return $title;
        }
    add_filter( 'pre_get_document_title', 'WordPress__Hamburger_title' );


    //カスタム投稿(メニューの詳細の入力)
    function add_custom_post_type(){
    register_post_type(
        'item', // 1.投稿タイプ名
        array(   // 2.オプション
            'label' => 'アイテム', // 投稿タイプの名前
            'public'        => true, // 利用するのでtrue
            'has_archive'   => true, // アーカイブを有効にする
            'menu_position' => 5, // 管理画面のメニューの位置
            'menu_icon'     => 'dashicons-wordpress', // 管理画面のアイコン
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


    // 検索キーワードが未入力時に404.phpを表示する
    function my_set_redirect_template(){
    if (isset($_GET['s']) && empty($_GET['s'])) {
    include('404.php');
    exit;
    }}
    add_action('template_redirect', 'my_set_redirect_template');


    //検索結果を投稿のみにする
    function SearchFilter( $query ) {
    if ( $query -> is_search ) {
        $query -> set( 'post_type', 'post' );}
        return $query;}
    add_filter( 'pre_get_posts', 'SearchFilter' );


    //ブロックエディターの設定
    add_editor_style('Scss/editor-style.css');
    add_action('after_setup_theme','my_editor_support');
    function my_editor_support() {
        add_theme_support('editor-styles');
        add_editor_style('Scss/editor-style.css');
}
