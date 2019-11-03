<?php
$left_column = get_sub_field('block_contest_left_column');
$right_column = get_sub_field('block_contest_right_column');
$col_title = get_sub_field('block_contest_title');
$page_box_title = get_sub_field('block_contest_info_title');

$vars = ['left_column' => $left_column, 'right_column' => $right_column, 'v_title' => $col_title];

if ( have_rows('block_contest_info_columns') || $left_column || $right_column) :

?>
<section class="block-contest">

<?php
get_theme_part('parts/blocks/block-two-columns',null, $vars);

    if ( have_rows('block_contest_info_columns') ) :

?>
    <div class="container">
       
        <div class="page-box">
            <?php 

            if ( $page_box_title ) :

            ?>
            <h2 class="page-box__title"><?php echo $page_box_title; ?></h2>
            <?php
            endif;
            ?>
            <ol class="row page-box__row">
            <?php 

            while (have_rows('block_contest_info_columns')) : the_row();
                $content = get_sub_field('block_contest_single_column');

                if ($content) :
            ?>

            <li class="col col-lg-4"><?php echo $content; ?></li>

            <?php
                endif;
            endwhile;
            ?>
            </ol>
        </div>
    </div>
<?php
endif;
?>
</section>
<?php 
endif;
?>