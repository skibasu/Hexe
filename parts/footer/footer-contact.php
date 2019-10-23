<?php 
$contact = get_field('footer_contact_info', 'options'); 

if($contact) :

?>
<div class="main-footer__contact">
    <?php echo $contact; ?>
</div>
<?php
endif;
?>
