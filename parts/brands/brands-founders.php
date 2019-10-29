<?php 
$bg_color = get_field('brand_founders_background_color');

$color = get_field('brand_founders_text_color');

$style = $bg_color ? "style='background-color:$bg_color'" : null;

if( have_rows('brand_founders')) :

?>
<section class="single-brand__founders" <?php echo $style; ?>>
    <div class="container container--medium">
        <div class="row">
        <?php 

        while (have_rows('brand_founders')) : the_row();
            $face_id = get_sub_field('founder_picture');
            $face = wp_get_attachment_image($face_id, 'founder-face');
            $name = get_sub_field('founder_name');
            $description = get_sub_field('founder_description');
        ?>
            <div class="single-brand__founders-column col col-12 col-lg-6">
                <div class="single-brand__founders-column-inner-wrapper" style="color: <?php echo $color; ?>">
                    <?php 

                    if (!empty($face) ) :

                    ?>
                    <figure class="founder-face">
                        <?php echo $face; ?>
                    </figure>
                    <?php 
                    endif;

                    if($name): 

                    ?>
                    <h5 class="founder-name">
                        <?php echo $name; ?>
                    </h5>
                    <?php
                    endif;

                    if ($description) :

                    ?>
                    <p class="founder-description">
                        <?php echo $description; ?>
                    </p>
                    <?php 
                    endif;
                    ?>
                </div>
            </div>
            <?php 
            endwhile;
            ?>
        </div>
    </div>
</section>
<?php
endif;
?>