<?php

if (have_rows('page_social_icons', 'options')):

?>
<ul class="social-list">
<?php

while( have_rows('page_social_icons', 'options')) : 
    the_row();

    $url = get_sub_field('page_social_icon_url', 'options');
    $icon = get_sub_field('single_social_icon', 'options');
    $icon_url = $icon['url'];
    $icon_id = $icon['id'];
    $icon_img = wp_get_attachment_image($icon_id, 'social-icon');

    $ext = pathinfo( $icon_url, PATHINFO_EXTENSION ); 

    if ($icon && $url) :

?>
    <li class="social-list__item">
    <?php

    if ( $ext == 'svg') :

    ?>

        <a class="social-icon" href="<?php echo $url; ?>"><?php  echo file_get_contents( $icon_url ); ?></a>

    <?php
    else :
    ?> 

        <a class="social-icon" href="<?php echo $url; ?>"><?php  echo  $icon_img  ?></a>

    <?php
    endif;
    ?>
    </li>
<?php
    endif;
endwhile;
?>
</ul>
<?php
endif;
?>