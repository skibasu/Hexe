<?php
$thumbnail = get_the_post_thumbnail($id, 'brand-thumbnail');

if( have_rows('brand_content')) :

?>
 <section class="single-brand__content">
        <div class="container">
            <div class="row row--content">
            <?php

            while (have_rows('brand_content')) : the_row();

            ?>
                <div class="single-brand__content-column">
                    <div class="single-brand__content-column-inner-wrapper">
                    <?php the_sub_field('column_content'); ?>
                    </div>
                </div> 
            <?php
            endwhile;
            ?>
            </div>
            <?php

            if (!empty($thumbnail)):

            ?>
            <figure class="single-brand__thumbnail">
                <?php echo $thumbnail; ?>
            </figure>
            <?php
            endif;
            ?>
    </div>
</section>
<?php
endif;
?>
