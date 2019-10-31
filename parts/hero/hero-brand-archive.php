
<section class="brand-archive">
<?php 
$title = get_field('brands_page_title', 'options');
?>

<h1 class="brand-archive__title"><?php  echo $title; ?></h1>

<?php

get_template_part('parts/hero/hero-brand-menu-desktop');

get_template_part('parts/hero/hero-brand-menu-mobile');

?>
</section>