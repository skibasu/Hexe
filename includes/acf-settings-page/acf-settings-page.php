<?php
function register_acf_options_pages() {

    if( !function_exists('acf_add_options_page') )
        return;

    $option_page = acf_add_options_page(array(
        'page_title'    => __('Theme Settings'),
        'menu_title'    => __('Theme Settings'),
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => true,
        'position'      => '3'
    ));

    	acf_add_options_sub_page(array(
		'page_title' 	=> 'General',
		'menu_title' 	=> 'General',
		'parent_slug' 	=> $option_page['menu_slug'],
    ));
    
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title' 	=> 'Footer',
		'parent_slug' 	=> $option_page['menu_slug'],
	));
}
add_action('acf/init', 'register_acf_options_pages');