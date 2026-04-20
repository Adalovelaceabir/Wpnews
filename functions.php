<?php
/**
 * Theme setup and custom functions
 */

// Theme Setup
function news_portal_setup() {
    // Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register Navigation Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'news-portal'),
    ));

    // Set thumbnail sizes
    set_post_thumbnail_size(300, 200, true);
    add_image_size('news-portal-large', 800, 400, true);
}
add_action('after_setup_theme', 'news_portal_setup');

// Enqueue Scripts and Styles
function news_portal_scripts() {
    // Main stylesheet (style.css is required, we enqueue our additional CSS)
    wp_enqueue_style('news-portal-style', get_stylesheet_uri());
    wp_enqueue_style('news-portal-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');

    // JavaScript for loading animation and interactions
    wp_enqueue_script('news-portal-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'news_portal_scripts');

// Register Widget Areas (optional future features)
function news_portal_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'news-portal'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'news_portal_widgets_init');
