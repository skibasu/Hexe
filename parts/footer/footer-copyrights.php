<?php 
$copy_rights = get_field('copy_rights_info', 'options');
$privacy = get_field('privacy_policy_link', 'options');

if ($privacy) :

?>
<div class="main-footer__bottom-nav">
    <a class="main-footer__privacy-link" href="<?php echo $privacy['url'] ?>"><?php echo $privacy['title'] ?></a>    
</div>
<?php
endif;

if( $copy_rights ) :

?>
<div class="copyrights">
    <p><?php  echo do_shortcode($copy_rights); ?></p>
</div>
<?php
endif;
?>