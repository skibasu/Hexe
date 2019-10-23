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
}

add_action('init', 'activate_support');