<?php
/**
 * The single post page template.

 */

get_header();
the_post();
?>
	<main class="page-content page-content--single">
		<h1><?php the_title(); ?></h1>
		<div class="page-entry">
			<?php the_content(); ?>
		</div>
	</main>
<?php
get_footer();
