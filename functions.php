<?php

// enqueing styles and scripts
function brown_theme_load_scripts()
{

    //for developer to make version of style
    // wp_enqueue_style('brown-theme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . 'style.css'), 'all');
    // wp_enqueue_style('brown-theme-main-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/assets/css/main.css'), 'all');

    //for production they dont need version of style
    wp_enqueue_style('brown-theme-style',get_stylesheet_uri(),array(),'1.0','all');
    wp_enqueue_style('brown-theme-main-style',get_template_directory_uri() . '/assets/css/main.css',array(),1.0,'all');
    wp_enqueue_style('brown-theme-boostrap-style',get_template_directory_uri() . '/assets/css/bootstrap.min.css',array(),'1.0','all');

    //for production js
    wp_enqueue_script('brown-theme-boostrap-scripts',get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',array(),'1.0','all');

    //enqueue google fonts
    // wp_enqueue_style('mogli-googlefont', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'brown_theme_load_scripts');

function brown_theme_config()
{
    //registering menu
    register_nav_menus(
        array(
            'brown_theme_main_menu' => 'Main Menu',
        )
    );

    // theme support ---------

    //adding post thumbnails supports
    add_theme_support('post-thumbnails');

    //adding custom logo supports
    add_theme_support('custom-logo',array(
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    ));
}
add_action('after_setup_theme', 'brown_theme_config', 0);


// Change this value to the number of characters you want to display in $the_excerpt() function
function custom_excerpt_length( $length ) {
    return 26; // Change this value to the number of characters you want to display
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );