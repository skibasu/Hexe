
<?php

if(have_rows('page_slogans') ):

?>    
<h1 class="page-slogan">
<?php

    while (have_rows('page_slogans')) : the_row();
        $slogan = get_sub_field('page_single_slogan');
    ?>

    <span class="slogan"><?php echo $slogan ?></span>

<?php
    endwhile;
?>
</h1>

<div class="btn-wrapper">
    <a href="#" class="btn btn--a">read more</a>
</div>

<?php 
else:
?>

<h1 class="page-title"><?php  the_title() ?></h1>

<?php 
endif;
?>

