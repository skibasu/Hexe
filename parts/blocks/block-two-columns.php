<?php 
$has_title = get_sub_field('block_has_title');
$title = get_sub_field('block_block_title');
$v_itle = $vTitle;


$left_column =  $left_column ? $left_column : get_sub_field('block_left_column');
$right_column = $right_column ? $right_column : get_sub_field('block_right_column');

if( isset($left_column) && !empty($left_column) &&  isset($right_column) && !empty($right_column) ) :

?>
<section class="block-two-columns">
    <div class="container">
    <?php 
    if ( $has_title && !empty($title) ) : ?>

        <h2 class="block-two-columns__title"><?php echo $title; ?></h2>

    <?php 
    endif;

    if ( !$has_title && isset($v_title) && !empty($v_title) ) :

    ?>
        <h2 class="block-two-columns__title"><?php echo $v_title; ?></h2>

    <?php
    endif;
    ?>
        <div class="row">

            <div class="col-inner-wrapper col col-12 col-lg-6">
                <?php echo $left_column; ?>
            </div>

            <div class="col-inner-wrapper col col-12 col-lg-6">
                <?php echo $right_column; ?>
            </div>

        </div>
    </div>
</section>
<?php 
endif;
?>