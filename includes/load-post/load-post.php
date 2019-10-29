<?php

add_action('wp_ajax_no_priv_ajax_load_post', 'ajax_load_post');
add_action('wp_ajax_ajax_load_post', 'ajax_load_post');

function ajax_load_post() {
    $id = $_POST['postId'];
    $the_query  = new WP_Query(array('p' => $id));

    ob_start();

    if ($the_query->have_posts()) {
        
        while ( $the_query->have_posts() ) {
            $the_query->the_post();

           get_template_part('parts/archive/single-post-lightbox');
        }
    }
   


     wp_send_json_success( ob_get_clean() );
      wp_reset_postdata();
    die();
}