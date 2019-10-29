 
<?php
$thumbnail = get_the_post_thumbnail($id, 'post-thumbnail');
$post_date =get_the_date('d.m.Y', $id); 
$categories = get_the_category($id);
$categories_output = '';

if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $categories_output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a> ';
    }
}
?>
 <article class="lightbox-post"> 
        
            <h3 class="lightbox-post__title"><?php the_title(); ?></h3>
           
             <p class="lightbox-post__info">  
                <span class="date"><?php echo $post_date; ?></span>
                <span>at </span>
                <span class="category"><?php echo $categories_output; ?></span>
            </p>

            <?php

            if ( !empty(get_the_content() ) ):

            ?>

            <div class="lightbox-post__content">
                <?php the_content(); ?>
            </div>
             
            <?php
            endif;
            ?>
</article>