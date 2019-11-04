<?php
function activate_support() {
    add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );

    register_nav_menu('primary', 'Primary navigation');
    register_nav_menu('secondary', 'Secondary navigation');
  
    add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
    add_image_size( 'homepage-thumb', 150, 180 ); // Soft Crop Mode
    add_image_size( 'page-logo', 260, 460 ); // Unlimited Height Mode
    add_image_size( 'social-icon', 24, 24, true );
    add_image_size( 'hero-panel', 680, 2000 );
    add_image_size( 'hightlight-post', 470, 434 );
    add_image_size( 'post-thumbnail', 470, 230);
    add_image_size( 'brand-logo', 268, 120);
    add_image_size( 'brands-list-logo', 300, 120 );
    add_image_size( 'brand-thumbnail', 847, 1600);
    add_image_size( 'brands-list-thumbnail', 520, 1000);
    add_image_size( 'founder-face', 140, 140 );
}

add_action('init', 'activate_support');

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyBmyjBjZU82-wgJHTztX7J_xqeICV_AyA4');
}
add_action('acf/init', 'my_acf_init');

function add_my_scripts(){

    wp_register_script( 'gmap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBmyjBjZU82-wgJHTztX7J_xqeICV_AyA4' );
    wp_enqueue_script('gmap');   
}

add_action( 'wp_enqueue_scripts', 'add_my_scripts' );