<?php 

if (!empty(get_the_content(get_the_ID()))) :

?>
<section class="block-content">
    <div class="container">
    <?php the_content(); ?>
    </div>
</section>  
<?php
endif;

