<?php

function load_stylesheets(){
    wp_register_style('custom', get_template_directory_uri().'/app.css', '',1, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript(){
    wp_register_script('myfirstscript', get_template_directory_uri().'/app.js', array('jquery'), 1, true);
    wp_enqueue_script('myfirstscript');
}

add_action('wp_enqueue_scripts', 'load_javascript');

// Add Menu
add_theme_support('menus');

//Register some Menu
register_nav_menus(
    array(
        'top-menu'=> 'Top Menu',
    )
);

//add images size
add_image_size('post_image', 1100, 750, true);

//Add Widget
function widget_init(){
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'class' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )
    );
}

add_action('widgets_init','widget_init');