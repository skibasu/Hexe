<?php 
$title = get_sub_field('block_our_founders_title');

if (have_rows('block_our_founders_main')) :

    
?>
<section class="block-our-founders">
    <div class="container">
    <?php

    if ($title) :

    ?>
    <h2 class="block-our-founders__title"><?php echo $title; ?></h2>
    <?php
    endif;
    ?>
 
    <?php
        while (have_rows('block_our_founders_main')) : the_row();

            $color = get_sub_field('block_our_founders_border');
    ?>

        <div class="block-our-founders__block" style="border: 3px solid <?php echo $color; ?>">
            <div class="block-our-founders__block-inner-wrapper">
               

            <?php 

            if (have_rows('block_our_founders_block')) : 

                while (have_rows('block_our_founders_block')) : the_row();
                    $image_id = get_sub_field('block_our_founders_founder_image');
                    $image  = wp_get_attachment_image($image_id, 'founder-face');
                    $name = get_sub_field('block_our_founders_founder_name');
                    $position = get_sub_field('foblock_our_founders_position');
                    $description = get_sub_field('block_our_founders_description');
                    $order = get_sub_field('block_our_founders_image_position');

                    $order = $order ? "order-last" : null;
                    

            ?>

            <div class="block-our-founders__elem">
                    <div class="row">
                        <div class="col col-lg-40 <?php echo $order;?>">
                            <div class="col-inner-wrapper">
                            <?php

                            if ( $image ):

                            ?>
                            <figure class="founder-face">
                                <?php echo $image; ?>
                            </figure>
                            <?php
                            endif;
                            
                            if ($name) :

                            ?>
                            <h5 class="block-our-founders__name founder-name"><?php echo $name; ?></h5>
                            <?php
                            endif;

                            if ($position) :

                            ?>
                            <p class="founder-description"><?php echo $position; ?></p>
                            <?php
                            endif;
                            ?>

                            </div>
                        </div>
                        <div class="col col-lg-60 founder-bio <?php echo $order ? 'order-first' : null ?>">
                            <div class="col-inner-wrapper">
                            <?php echo $description ?>   
                            </div>
                        </div>
                    </div>
            
            </div>

            <?php
                endwhile;
            endif;
            ?>
               
            </div>
        </div>
<?php
        endwhile;
endif;
?>
    </div>
</section>