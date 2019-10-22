<?php
/**
 * The static page template.
 */

get_header();
the_post();
?>
	<main class="page-content">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <div class="page-entry"><?php
                the_content();
            ?></div>
        </div>
	</main>
<?php
get_footer();
