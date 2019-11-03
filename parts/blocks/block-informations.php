<?php
$content = get_sub_field('block_informations_column');

if ($content) :

?>
<section class="block_informations">
    <div class="container">
        <?php echo $content; ?>
    </div>
</section>
<?php
endif;
?>