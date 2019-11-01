<?php 
$has_title = get_sub_field('block_has_title');
$title = get_sub_field('block_block_title');
?>
<section class="block-two-columns">
    <div class="container">
    <?php if ( $has_title && !empty($title) ) : ?>

        <h2 class="block-two-columns__title"><?php echo $title; ?></h2>

    <?php endif;?>
        <div class="row">

            <div class="col-inner-wrapper col col-12 col-lg-6">
                <?php the_sub_field('block_left_column'); ?>
            </div>

            <div class="col-inner-wrapper col col-12 col-lg-6">
                <?php the_sub_field('block_right_column'); ?>
            </div>

        </div>
    </div>

</section>