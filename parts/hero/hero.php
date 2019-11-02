<?php
$hero = false;


if( is_single() ){

$hero_id = get_field('brands_hero_image', 'options');
$hero = wp_get_attachment_url($hero_id, 'full');

}else {

    $hero_id = get_field('all_pages_hero_image', 'options');
    $hero = wp_get_attachment_url($hero_id, 'full');


}

$style = $hero ? " style='background-image:url($hero);'" : null;

?>
<section class="hero" <?php echo $style; ?>>
    <div class="container">
    <?php
   
    if (is_front_page()) {
         /* if is front page  */
         get_template_part('parts/hero/hero-front-page');

    }elseif (is_home() ) {
        /* if is home page - blog page - archive page  */
        get_template_part('parts/hero/hero-home-page');

    }
    elseif (is_page()) {
         /* if is page */
        get_template_part('parts/hero/hero-page');

    }
    elseif ( get_post_type() === 'brands' && is_single() ) {
        /* if is single brand */
        get_template_part('parts/hero/hero-brand');
    }
    elseif (get_post_type() === 'brands' && !is_single() ) {
        /*if is brands archive */
        get_template_part('parts/hero/hero-brand-archive');
    }
    elseif (is_category() && !is_single() && !is_home()) {
        /* if is category page */
        get_template_part('parts/hero/hero-category-page');
    }
        
    ?>
    </div>
</section>