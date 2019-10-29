<?php
$logo_id = get_field('brand_logo');
$logo = wp_get_attachment_image($logo_id, 'brand-logo');
$border = get_template_directory_uri() . '/images/borders/hexagon.svg';

?>
<div class="row row-brand">

    <div class="col col-12 col-lg-6">
        <div class="col-inner-wrapper">
            <h1 class="brand-title"><?php  the_title(); ?></h1>
            <div class="content-wrapper">
            <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php 

if ( !empty( $logo)):

?>
    <div class="col col-12 col-lg-6">
        <div class="col-inner-wrapper hexagon-wrapper">
            <div class="hexagon">
                <div class="hexagon__border">
                    <?php get_template_part('parts/brands/hexagon') ?>
                    
                </div>
                <?php echo  $logo ; ?>
            </div>
        </div>
    </div>
<?php
endif;
?>
</div>
   

