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
	
	get_template_part('parts/hero/hero'); 

	if ( get_post_type() === 'post' ){

	get_template_part('parts/archive/loop-post');  

	}

	?> 
	</main>
<?php
get_footer();
