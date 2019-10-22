<?php
function activate_support() {
    add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );

    register_nav_menu('primary', 'Primary navigation - Header');
    register_nav_menu('secondary', 'Secondary navigation - Footer');

    add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
    add_image_size( 'homepage-thumb', 150, 180 ); // Soft Crop Mode
    add_image_size( 'page-logo', 260, 460 ); // Unlimited Height Mode
    
}

add_action('init', 'activate_support');