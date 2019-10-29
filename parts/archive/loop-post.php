<?php

$higligth_post = get_field('higligth_post', get_option('page_for_posts'));
$h_post_id = $higligth_post[0];

if (have_posts()) :
?>
<section class="posts-content">
	<div class="container">
		<div class="posts-content__wrapper">
			
			<?php 

			if( !empty($higligth_post )) {

				get_template_part('parts/archive/highlight-post');

			}
			?>
			<div class="row row--variant-1">
			<?php 
			
			while ( have_posts() ) {

			the_post(); 

				if( $h_post_id !== get_the_ID() ){

					get_template_part('parts/archive/single-post');

				}
			} 
			?>
			</div>
		</div>
		<div class="posts-content__pagination">
			<?php get_template_part('parts/archive/posts-pagination'); ?>
		</div>
	</div>	
	<?php get_template_part('parts/archive/single-lightbox'); ?>
</section>

<?php
endif; 
?>
