<?php 
$title = get_the_title( ) ; 
$c_form  = get_field('contact_form_shordcode');
$c_title = get_field('contact_form_title');
?>
<h1 class="page-title"><?php echo $title ; ?></h1>
<?php

if ($c_form) :

?>
<section id="contact-form" class="block-contact-form">
<div class="container">

    <div class="block-contact-form__form-wrapper">
    <?php if ($c_title) : ?>
        <h2 class="block-contact-form__title"><?php echo $c_title; ?></h2>
    <?php endif; ?>
        <?php echo do_shortcode($c_form); ?>
    </div>

</div>
</section>
<?php
endif;
?>