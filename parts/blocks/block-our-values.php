<?php 
$left_column = get_sub_field('block_our_values_left_column');
$right_column = get_sub_field('block_our_values_right_column');
$title = get_sub_field('block_our_values_title');
$vars = ['left_column' => $left_column, 'right_column' => $right_column];

?>
<section class="block-our-values">
<?php get_theme_part('parts/blocks/block-two-columns',null, $vars);?>
    <div class="container">
    <?php 

    if ( $title ) : 

    ?>
    <h2 class="block-our-values__title"><?php echo $title; ?></h2>
    <?php
    endif; 

    if (have_rows('block_our_values_values')) :
    
    ?>
        <div id="menu-desktop" class="block-our-values__values brand-archive__menu desktop">
    <?php

        $i = 1;
        $k = 1;

        while ( have_rows('block_our_values_values')) : the_row();  
            $name = get_sub_field('block_our_values_value_name');
            $value_description = get_sub_field('block_our_values_description');

            if ($i == 1) :

        ?>
            <div class="row block-our-values__row brand-archive__row">
        <?php
            endif;

            if($name) :
        ?>      

                <div class="block-our-values__column brand-archive__column brand-archive__column--<?php echo $i?>">
                    <div class="brand-archive__column__inner-wrapper">
                        <div class="hexagon">
                            <div class="hexagon__border">
                                <?php get_theme_part('parts/brands/hexagon',null) ?>
                            </div>
                            <h5 class="block-our-values__name"><?php echo $name; ?></h5>
                            <?php echo $value_description; ?>    
                        </div>
                    </div>
                </div>
                <?php
                $count = 0;
                $locations = get_field("block_our_values_values");

                if (is_array($locations)) {
                    $count = count($locations);
                }


                if( $i == 3 || $k == $count) :

                ?>
            </div>
            <?php
                endif;
            endif;
             $i = $i == 3 ? 0 : $i;
            $i++;
            $k++;
        endwhile; 
    endif;
    ?>
    </div>
</section>   