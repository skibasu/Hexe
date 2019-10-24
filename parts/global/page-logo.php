<?php 
$logo_id = get_field('page_logo', 'options');
$logo = wp_get_attachment_image($logo_id, 'page-logo');

if( $logo ): 
?>

<div class="page-logo">
    <a class="page-logo__link" href="<?php echo get_home_url(); ?>">
    <?php
    echo $logo; 
    endif;
    ?>
    </a>
</div>