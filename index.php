<?php
/**
 * The main template file.
 *
 * @package    WordPress
 * @subpackage themeName
 * @since      themeName 1.0
 */

get_header();
?>
	<main class="page-content page-content--archive">
	
	<?php 
	

	if ( get_post_type() === 'post' ){

	get_template_part('parts/hero/hero'); 
	get_template_part('parts/archive/loop-post');  
	
	}elseif ( get_post_type() === 'brands' ){

	get_template_part('parts/hero/hero'); 

	}

	?> 
	</main>
<?php
get_footer();

