<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

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
    }
    add_action( 'wp_enqueue_scripts', 'add_files' );
