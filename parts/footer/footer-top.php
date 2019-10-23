<div class="main-footer__top ">
    <div class="main-footer__top-wrapper">
        <div class="main-footer__item">

        <?php get_template_part('parts/global/page-logo'); ?>

        <?php get_template_part('parts/footer/footer-contact'); ?>  
        

        </div>

        <div class="main-footer__item">

        <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => 'nav', 'container_class' => "main-footer__main-nav" ) ); ?>

        </div>
    </div>
</div> 