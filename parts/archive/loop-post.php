<?php
/**
 * Loop for home page.
 *
 * @package    WordPress
 * @subpackage themeName
 * @since      themeName 1.0
 */

?>
<section class="posts-content">
	<?php while ( have_posts() ) : the_post(); ?>
        <?php get_theme_part('archive/single-post'); ?>
	<?php endwhile; ?>
</section>
