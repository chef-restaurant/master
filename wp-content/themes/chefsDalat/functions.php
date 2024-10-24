<?php
 define("THEME", get_template_directory_uri());

 function register_my_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));
}
add_action('init', 'register_my_menus');

function my_theme_setup() {
    add_theme_support('menus');
    add_theme_support('widgets');
    
}
add_action('after_setup_theme', 'my_theme_setup');

function custom_widget_init() {
    register_sidebar(array(
        'name' => 'Chefs Phone Number',
        'id' => 'chefs-phone-number',
        'before_widget' => '<span class="widget-phone-number widget">',
        'after_widget' => '</span>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => 'Chefs Location Map',
        'id' => 'chefs-map',
        'before_widget' => '<span class="widget-map widget">',
        'after_widget' => '</span>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'custom_widget_init');
