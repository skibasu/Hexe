<div class="mobile-menu">

    <div class="mobile-menu__header">
        <div class="container">
			<div class="mobile-menu__wrapper">
				
			<?php 

			get_template_part('parts/global/page-logo');

			get_template_part('parts/global/hamburger');
			
			?>
				
			</div>
        </div>
    </div>

    <?php  wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => "mobile-menu__nav" ) ); ?>

</div>