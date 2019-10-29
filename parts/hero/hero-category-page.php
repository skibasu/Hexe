<?php 
$categories = get_the_category(); 

if (isset($categories) && !empty($categories) && !empty($categories[0])):

?>
<h1 class="page-title"><?php echo $categories[0]->name ; ?></h1>
<?php
endif;
?>