<?php
/**
 * The static page template.
 */

get_header();
the_post();
?>
	<main class="page-content">
        <?php 
        
        get_template_part('parts/hero/hero'); 

        get_template_part('parts/global/content'); 
        
        ?> 

       <?php ContentBlock::display_theme_blocks(); ?>
	</main>
<?php
get_footer();
