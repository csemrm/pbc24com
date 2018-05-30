<?php

function softvalley_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support('custom-logo', array(
        'height' => 83,
        'width' => 325,
    ));
    register_nav_menus(array(
        'mainMenu' => 'Main Menu',
        'serviceMenu' => 'Service Menu'
    ));
    
}

add_action('after_setup_theme', 'softvalley_theme_setup');

function softvalley_the_custom_logo() {

    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    }
}

function softvalley_enqueue_styles() {
    //main,code/css/960,style,slider/themes/fresh/jquery.slider
    wp_enqueue_style('softvalley_default', get_stylesheet_uri(), null, time());
    wp_enqueue_style('softvalley_main', get_stylesheet_directory_uri() . '/css/main.css', null, time());
    wp_enqueue_style('softvalley_960', get_stylesheet_directory_uri() . '/css/code/css/960.css', null, time());
    wp_enqueue_style('softvalley_jquery_slider', get_stylesheet_directory_uri() . '/css/slider/themes/fresh/jquery.slider.css', null, time());
}

add_action('wp_enqueue_scripts', 'softvalley_enqueue_styles');

function softvalley_enqueue_scripts() {
    //wp_deregister_script('jquery');
    //wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/main.js', false, '2.x', true);
    //wp_enqueue_script('jquery');
    wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    wp_enqueue_script('slider', get_stylesheet_directory_uri() . '/js/slider/jquery.slider.min.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'softvalley_enqueue_scripts');

function softvalley_widgets_init() {
    register_sidebar(
            array(
                'name' => __('Right Sidebar', 'softvalley'),
                'id' => 'sidebar-right',
                'description' => __('Add widgets here to appear in your sidebar.', 'softvalley'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<div class="product_title">',
                'after_title' => '</div>',
            )
    );

    register_sidebar(
            array(
                'name' => __('Banner Sidebar', 'softvalley'),
                'id' => 'sidebar-banner',
                'description' => __('Add widgets here to appear in your sidebar.', 'softvalley'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<div class="grid_12"">',
                'after_title' => '</div>',
            )
    );

    register_sidebar(
            array(
                'name' => __('Blog Sidebar', 'softvalley'),
                'id' => 'sidebar-blog',
                'description' => __('Add widgets here to appear in your sidebar.', 'softvalley'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<div class="grid_12"">',
                'after_title' => '</div>',
            )
    );
}

add_action('widgets_init', 'softvalley_widgets_init');

function softvalley_custom_nav_menu($args) {
 
    return $args;
}

add_filter('wp_nav_menu_args', 'softvalley_custom_nav_menu');
