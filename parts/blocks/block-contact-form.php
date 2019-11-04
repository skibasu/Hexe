
<?php
$form = get_sub_field('contact_form_shordcode');
$title =  get_sub_field('contact_form_title');

if ($form) :

?>
<section id="contact-form" class="block-contact-form">
<div class="container">

    <div class="block-contact-form__form-wrapper">
    <?php if ($title) : ?>
        <h2 class="block-contact-form__title"><?php echo $title; ?></h2>
    <?php endif; ?>
        <?php echo do_shortcode($form); ?>
    </div>

</div>
</section>
<?php
endif;
?>