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

    if (have_rows('page_slogans')) :

    ?>
    <h1 class="page-slogan">
    <?php

        while (have_rows('page_slogans')) : the_row();
            $slogan = get_sub_field('page_single_slogan');
    ?>

    <span class="slogan"><?php echo $slogan ?></span>
    
    <?php
        endwhile;
    ?>
    </h1>
    <?php
    else:
    ?>
        <h1 class="page-title"><?php the_title(); ?></h1>

    <?php
    endif;

    if (is_front_page()) :
    ?>
        <a href="#" class="btn btn--a">read more</a>
    <?php
    endif;
    ?>
    </div>
</section>