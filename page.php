<?php
/**
 * The static page template.
 */

get_header();
the_post();
?>
	<main class="page-content">
        <?php get_template_part('parts/hero/hero'); ?> 
        <div class="container">
            <div class="page-entry" style="color:white;"><?php
                the_content();
            ?></div>
        </div>
	</main>
<?php
get_footer();
