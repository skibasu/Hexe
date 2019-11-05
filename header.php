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
<body <?php body_class(); ?> style="overflow:hidden;height:100%">
<?php get_template_part('parts/global/page-loader'); ?>
<div id="page">
	<header id="header" class="main-header static-header">
		<div class="container">
			<div class="main-header__wrapper">
					
			<?php 

			get_template_part('parts/global/page-logo');

			wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => "main-header__main-nav" ) ); 

			get_template_part('parts/global/hamburger');
			
			?>
				

			</div>
			
			<?php get_template_part('parts/global/mobile-menu'); ?>
			
		</div>
	</header>

	<header id="scroll-header" class="main-header fixed-header">
		<div class="container">
			<div class="main-header__wrapper">
					
			<?php 

			get_template_part('parts/global/page-logo');

			wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => "main-header__main-nav" ) ); 

			get_template_part('parts/global/hamburger');
			
			?>
				

			</div>
			
			<?php get_template_part('parts/global/mobile-menu'); ?>
			
		</div>
	</header>


	
