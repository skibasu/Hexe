<?php
/**
 * The Header for theme.
 *
 * Displays all of the <head> section and page header
 *
 * @package    WordPress
 * @subpackage themeName
 * @since      themeName 1.0
 */

get_template_part('parts/html-head');
?>
<body <?php body_class(); ?>>
<div id="page">
	<header class="main-header">
			<nav class="main-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
			</nav>
	</header>
