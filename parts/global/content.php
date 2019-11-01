<?php 

if (!empty(get_the_content(get_the_ID()))) :

?>
<section class="page-content"></section>
    <div class="container">
    <?php the_content(); ?>
    </div>
</section>  
<?php
endif;

