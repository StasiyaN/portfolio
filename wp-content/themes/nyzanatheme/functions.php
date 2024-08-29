<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array('parent-style') );
    wp_enqueue_style ('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Permanent+Marker&family=Quicksand:wght@300..700&display=swap', array(), null);
    wp_enqueue_script ('font-awesome', 'https://kit.fontawesome.com/966a0dada8.js', array('jquery'), null, true);
    wp_enqueue_script('popup-script', get_stylesheet_directory_uri() . '/assets/js/popup.js', array('jquery'), null, true);
}

// Custom image sizes
function custom_image_sizes() {
     add_image_size('banner', 1440, 962, true);
     add_image_size('project-photo', 600, 1000, true);
}
add_action('after_setup_theme', 'custom_image_sizes');




