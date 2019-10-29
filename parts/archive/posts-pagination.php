<?php
$query = new WP_Query( array('post_type' => 'post') );
$total_posts = $query->found_posts;
$default_posts_per_page = get_option( 'posts_per_page' );
$higligth_post = get_field('higligth_post', get_option('page_for_posts'));


$total = isset($higligth_post) && !empty($higligth_post) ?ceil(($total_posts-1)/$default_posts_per_page) : ceil($total_posts/$default_posts_per_page);

$pages = the_posts_pagination( array(
    'mid_size'  => 1,
    'total' => $total,
    'end_size' => 3,
    'prev_next' => false,
) );

echo $pages;