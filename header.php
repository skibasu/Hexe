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
		<div class="container">
			<div class="main-header__wrapper">
				<?php 
				$logo_id = get_field('page_logo', 'options');
				$logo = wp_get_attachment_image($logo_id, 'page-logo');

				if( $logo ): 
				?>

				<div class="page-logo">

				<?php
				echo $logo; 
				endif;
				?>
				</div>
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => "main-header__main-nav" ) ); ?>
				<div class="hamburger">
					<div class="hamburger__wrapper">
						<span class="hamburger__item"></span>
						<span class="hamburger__item"></span>
						<span class="hamburger__item"></span>
						<span class="hamburger__item"></span>
					</div>
				</div>
			</div>
		</div>
	</header>
