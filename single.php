<?php
/**
 * The single post page template.

 */

get_header();
the_post();
?>
	<main class="page-content page-content--single">
	<?php 
	
	get_template_part('parts/hero/hero'); 
	
		if( get_post_type() == 'brands') {

			get_template_part('parts/brands/single-brand'); 

		}
	?>
	</main>
<?php
get_footer();
