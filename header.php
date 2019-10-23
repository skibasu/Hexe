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

get_template_part('parts/global/html-head');
?>
<body <?php body_class(); ?>>
<div id="page">
	<header class="main-header">
		<div class="container">
			<div class="main-header__wrapper">
				
				
			<?php 

			get_template_part('parts/global/page-logo');

			wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => "main-header__main-nav" ) ); 

			get_template_part('parts/global/hamburger');
			
			?>
				

			</div>
		</div>
	</header>
