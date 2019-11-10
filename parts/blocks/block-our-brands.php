<?php
$title = get_sub_field('block_our-brands_title');
$posts = get_sub_field('block_our_brands_posts');

if( $posts ) :

?>

<section class="block-our-brands">
    <div class="container">
    <?php if ( !empty($title) ) : ?>

        <h2 class="block-our-brands__title"><?php echo $title; ?></h2>

    <?php endif;?>
    <?php
    if ($posts):
        $i = 1;
        foreach ($posts as $p) :
            $id = $p->ID;
            $logo_id = get_field('brand_logo', $id);
            $logo = wp_get_attachment_image($logo_id, 'brands-list-logo');

            $logo_small_id = get_field('brand_front_page_logo', $id);
            $logo_small = wp_get_attachment_image($logo_small_id, 'brands-list-logo');
            
            $thumbnail = get_the_post_thumbnail($id, 'brands-list-thumbnail');
            $color = get_field('brand_color', $id);

            $border = $color ? " style='border:3px solid $color';" : null;
                
            $bgr = $color ? " style='background-color:$color';" : null;

        ?>
        <article class="block-our-brands__brand">
        <div class="block-our-brands__brand-wrapper"<?php echo $border; ?>>
            <div class="row">

                <div class="col col-12 col-lg-65">
                    <div class="col-inner-wrapper">
                    <?php 

                    if ( !empty($logo ) || !empty($logo_small)) : 

                    ?>
                        <a href="<?php the_permalink($id);?>" class="block-our-brands__logo">
                            <?php echo $logo_small ? $logo_small  : $logo ; ?>
                        </a>
                    <?php 
                    endif;

                    if (!empty(get_post_field('post_content', $id))) :

                    ?>
                    <div class="block-our-brands__description">
                        <?php echo apply_filters('the_content', $p->post_content); ?>
                    </div>
                    <?php 
                    endif;
                    ?>
                    <a href="<?php the_permalink($id); ?>" class="btn btn--brand"<?php echo $bgr; ?>>Read More</a>
                    </div>
                </div>

                <div class="col col-12 col-lg-35">
                    <div class="col-inner-wrapper">

                    <?php if ($thumbnail) : ?>
                    <figure class="block-our-brands__thumbnail">
                        <a href="<?php the_permalink($id);?>">
                            <?php echo $thumbnail; ?>
                        </a>
                    </figure>
                    <?php endif; ?>

                    </div>
                </div>

            </div>
        </div>
        </article>
    <?php
        $i++;
        endforeach;
    endif;
    ?>
    </div>
</section>

<?php 
endif;
?>