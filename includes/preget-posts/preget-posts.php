<?php
function preget_posts($query) {
	
	if (!is_admin() &&  in_array ( $query->get('post_type'), array('brands') )) {
		
		$query->set('posts_per_page', '-1' );

	}	
}
add_action('pre_get_posts', 'preget_posts'); 