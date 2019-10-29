<?php
function my_scripts() {

    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri(). '/css/main.css', array() );

    wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendors/jQuery/jquery-3.4.1.min.js', array(), '3.4.1', true );


    wp_enqueue_script( 'gsapcssrule', get_template_directory_uri() . '/js/vendors/GreenSock/CSSRulePlugin.min.js', array(), '2.1.3', true );

    wp_enqueue_script( 'tween-lite', get_template_directory_uri() . '/js/vendors/GreenSock/TweenMax.min.js', array(), '2.1.3', true );
    
    wp_enqueue_script( 'time-line', get_template_directory_uri() . '/js/vendors/GreenSock/TimelineMax.min.js', array(), '2.1.3', true );

    wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/index.js', array('jquery'), '1.0', true );

    wp_localize_script('theme-scripts', 'example_ajax_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ));

}
    
add_action( 'wp_enqueue_scripts', 'my_scripts' );



//apply_filters('script_loader_tag', string $tag, string $handle, string $src);

function add_async_attribute($tag, $handle) {
    if ( 'theme-scripts' !== $handle )
        return $tag;
    return str_replace( 'text/javascript', 'module', $tag );
}
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);