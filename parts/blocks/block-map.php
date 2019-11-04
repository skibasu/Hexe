<?php 
$location = get_sub_field('contact_google_map');

if( $location ): ?>
<section class="block-map">

    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>

</section>

<?php 
endif; 
?>