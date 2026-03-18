<?php
require get_template_directory() . '/inc/customizer.php';

function gp_load_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css", false, '1.0', 'all');
    wp_enqueue_script('main', get_template_directory_uri() . "/js/main.js", array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'gp_load_scripts');

function gp_setup_theme() {
    register_nav_menus(array(
        'gp_main_menu' => 'Main Menu',
        'gp_footer_menu' => 'Footer Menu'
    ));

    $args = array('width' => 225, 'height' => 1920);
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 110,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true
    ));
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form','gallery','caption','style','script'));
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gp_setup_theme');

function gp_sidebars() {
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'sidebar-blog',
        'description' => 'Blog Sidebar Widgets',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));

    for ($i = 1; $i <= 3; $i++) {
        register_sidebar(array(
            'name' => "Service $i",
            'id' => "services-$i",
            'description' => "Service area $i",
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ));
    }
}
add_action('widgets_init', 'gp_sidebars');
?>