<?php
$posts = get_field('brands_menu', 'options');

if ($posts):
?>
<div id="menu-mobile" class="brand-archive__menu mobile">
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
                        <?php get_theme_part('parts/brands/hexagon',null, ['id'=> $i, 'link_href' => get_the_permalink($id)]) ?>
                    </div>
                    <?php echo  $logo ; ?>
                </div>
            </div>
        </div>
        <?php
        if( $i == 2 || $k == count($posts)) :
        ?>
    </div>
<?php
        endif;
        $i = $i == 2 ? 0 : $i;
        $i++; 
        $k++;
    endforeach;
?>
</div>
<?php
endif;
?> 