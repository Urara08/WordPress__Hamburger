<?php
    function custom_theme_support(){
        add_theme_support('html5',array(
            'search-form',
            'gallery',
            'caption',
        ));}

    //テーマサポート
    add_theme_support( 'menus' );//メニューの管理
    add_theme_support( 'title-tag' );//タイトルの吐き出し
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
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
