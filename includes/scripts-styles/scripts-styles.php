<?php
function my_scripts() {

    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri(). '/css/main.css', array() );

    wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendors/jQuery/jquery-3.4.1.min.js', array(), '3.4.1', true );

    wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/index.js', array(), '1.0', true );
}
    
add_action( 'wp_enqueue_scripts', 'my_scripts' );