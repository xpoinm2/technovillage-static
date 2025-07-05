<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// Подключение CSS/JS и AOS
function tv_enqueue_assets() {
    wp_enqueue_style( 'tv-style',
        get_template_directory_uri() . '/css/style.css',
        [], filemtime( get_template_directory() . '/css/style.css' )
    );
    wp_enqueue_script( 'tv-script',
        get_template_directory_uri() . '/js/script.js',
        [], filemtime( get_template_directory() . '/js/script.js' ),
        true
    );
    wp_enqueue_style( 'aos-css',
        'https://unpkg.com/aos@2.3.1/dist/aos.css', [], null
    );
    wp_enqueue_script( 'aos-js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js', [], null, true
    );
    wp_add_inline_script( 'aos-js', 'AOS.init({ once:true, duration:600 });' );
}
add_action( 'wp_enqueue_scripts', 'tv_enqueue_assets' );

// Меню
function tv_register_nav() {
    register_nav_menu( 'main-menu', 'Главное меню' );
}
add_action( 'after_setup_theme', 'tv_register_nav' );

// Логотип
function tv_custom_logo() {
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ] );
}
add_action( 'after_setup_theme', 'tv_custom_logo' );

// Тег title управляется WP/SEO-плагином
add_theme_support( 'title-tag' );
