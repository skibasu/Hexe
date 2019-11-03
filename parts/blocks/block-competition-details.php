<?php
$title = get_sub_field('block_competition_details_title');
$block_info_subtitle = get_sub_field('block_competition_details_info_subtitle');
$particapate_description = get_sub_field('block_competition_details_particapate_description');
$particapate_btn_title = get_sub_field('block_competition_details_apply_button');


if (have_rows('block_competition_details_columns')) :

?>
<section class="block-competition-details">
    <div class="container">
    <?php

    if ($title) :

    ?>
        <h2 class="block-competition-details__title"><?php echo $title; ?></h2>
    <?php
    endif;

        while ( have_rows('block_competition_details_columns')) : the_row();
            $col_title = get_sub_field('block_competition_details_column_title');
            $date_in = get_sub_field('block_competition_details_date');
            $date_out = get_sub_field('block_competition_details_date_out');
            $description = get_sub_field('block_competition_details_description');
            $has_button = get_sub_field('block_competition_details_button');
            $button = get_sub_field('block_competition_details_aplly_button');

            $date_out = $date_out ? ' - ' .$date_out : null;
    ?>

        <div class="block-competition-details__column">
        <?php 

        if( $col_title) :

        ?>

            <h5 class="block-competition-details__column-title"><?php echo $col_title; ?></h5>

        <?php
        endif;

        if ($date_in) :
        ?>
 
            <p class="date"><?php echo $date_in  .$date_out;?></p>
        
        <?php
        endif;

        echo $description;

        if ($has_button && $button):

        ?>

            <div class="page-box-mini">
                <div class="page-box-mini__inner-wrapper">
                    <h3 class="page-box-mini__title"><?php echo $button; ?></h3>
                    <a class="btn btn--apply" href="#">Aplly now</a>
                </div>
            </div>

        <?php 
        endif;
        ?>
        </div>
    <?php   
        endwhile;

        if ($block_info_subtitle) :
    ?>  
        <div class="block-competition-details__info">
            <h3 class="block-competition-details__info-title"><?php echo $block_info_subtitle; ?></h3>
        </div>
    <?php
    endif;

    if ($particapate_description) :
    ?>
        <div class="page-box page-box--a">
            <?php echo $particapate_description; ?>
             <div class="page-box-mini">
                <div class="page-box-mini__inner-wrapper">
                <?php

                if ($particapate_btn_title) :
                
                ?>

                    <h3 class="page-box-mini__title"><?php echo $particapate_btn_title; ?></h3>

                <?php
                endif;
                ?>
                    <a class="btn btn--apply" href="#">Aplly now</a>
                </div>
            </div>
        </div>
    <?php
    endif;
    ?>
    </div>
</section>
<?php
endif;
?>