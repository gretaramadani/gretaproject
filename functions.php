<?php
if ( file_exists( get_template_directory() . '/inc/customizer.php' ) ) {
    require get_template_directory() . '/inc/customizer.php';
}

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );

function gretaproject_main_scripts() {
    wp_enqueue_style( 'gretaproject-style', get_stylesheet_uri() );
    wp_enqueue_script( 'gretaproject-main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'gretaproject_main_scripts' );

function gretaproject_main_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu', 'gretaproject-main' ),
        )
    );
}
add_action( 'init', 'gretaproject_main_menus' );