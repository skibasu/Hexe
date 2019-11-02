<?php
$link = null;
$p_id = null;

if( isset($id) && !empty($id) ){
  $p_id = $id;
}

if( isset($link_href) && !empty($link_href) ){
  $link = $link_href;
}

$color = get_field('brand_logo_border_color', $p_id);

$fill = $color ? "fill:".$color.";" : "fill:#fff;";
$stroke = $color ? "stroke:".$color.";" : "stroke:#ffffff;";
?>

<svg xmlns="http://www.w3.org/2000/svg"  width="409.346" height="354.313" viewBox="0 0 409.346 354.313">
<?php if ( !empty($link ) ) : ?>
  <a xlink:href="<?php echo $link; ?>">
<?php endif; ?>
    <path id="Polygon_2119_copy_4" style="<?php echo $fill; ?><?php echo $stroke?>stroke-width: 3px;  fill-rule: evenodd;" d="M1210.18,448.511L1108.71,624.175l-203.176.14L803.828,448.792,905.3,273.128l203.18-.141Z" transform="translate(-802.344 -271.5)"/>
<?php if ( !empty($link ) ) : ?>
  </a>
<?php endif; ?>
</svg>