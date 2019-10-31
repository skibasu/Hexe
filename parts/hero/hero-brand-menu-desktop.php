
<?php
$posts = get_field('brands_menu', 'options');
//var_dump($posts);
if ($posts):
?>
<div id="menu-desktop" class="brand-archive__menu desktop">
<?php
$i=1;
$k=1;
    foreach ($posts as $p) :
        $id = $p->ID;
        $logo_id = get_field('brand_logo', $id);
        $logo = wp_get_attachment_image($logo_id, 'brand-logo');

        if( $i == 1) :
?>

    <div class="row brand-archive__row">
    <?php
    endif;
    ?>
        <div class="brand-archive__column brand-archive__column--<?php echo $i?>">
            <div class="brand-archive__column__inner-wrapper">
                <div class="hexagon">
                    <div class="hexagon__border">
                        <?php jpr_get_template_part_with_vars('parts/brands/hexagon',null, ['id'=> $i, 'link_href' => get_the_permalink($id)]) ?>
                    </div>
                    <?php echo  $logo ; ?>
                </div>
            </div>
        </div>
        <?php
        if( $i == 3 || $k == count($posts)) :
        ?>
    </div>
<?php
        endif;
        $i = $i == 3 ? 0 : $i;
        $i++; 
        $k++;
    endforeach;
?>
</div>
<?php
endif;
?> 