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
    add_image_size( 'brand-thumbnail', 847, 1600);
    add_image_size( 'founder-face', 140, 140 );
}

add_action('init', 'activate_support');