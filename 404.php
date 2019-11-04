<?php
get_header();
the_post();
?>
<main class="page-content">
<?php 
	
get_template_part('parts/hero/hero'); 

?> 
	<section class="page-404">
		<div class="container block-content">
			<h1 class="page-404__title"><?php _e( '404 - Not found.' ); ?></h1>
			<h2>
				<?php _e( 'We\'re sorry, but the page you are looking for cannot be found. What should you do at this point? Here are some options:', 'themeName' ); ?>
			</h2>
			<ul>
				<li><?php _e( 'If you typed in a URL, check that it is typed in correctly.', 'themeName' ); ?></li>
				<li><?php _e( 'Perhaps it was just a fluke, and if you try again by clicking refresh, it\'ll pop right up!', 'themeName' ); ?></li>
				<li><?php _e( 'Or head back to our home page', 'themeName' ); ?> <a
						href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_url( home_url() ); ?></a> <?php _e( 'and navigate from there.', 'themeName' ); ?>
				</li>
			</ul>			
		</div>
	</section>
</main>
<?php
get_footer();
?>
