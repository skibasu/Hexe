<?php
function custom_excerpt( $id , $limit=37, $more='' ) {
	
	$permalink = get_permalink( $id );
	$excerpt = get_post_field('post_content', $id);

    $excerpt = wp_trim_words($excerpt, $limit,  $more);

	$excerpt = "<p>$excerpt</p>";
	
	return $excerpt;
}