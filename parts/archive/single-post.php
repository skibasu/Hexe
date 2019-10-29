<?php
$id = get_the_ID();
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
<div class="single-post__column">
    <div class="single-post__column-wrapper">

        <article data-id="<?php echo $id?>" class="single-post post-article"> 
            <?php  if( !empty($thumbnail) ) : ?>

            <figure class='single-post__thumbnail'>
                <a href="<?php the_permalink(); ?>" class="block on-open">
                    <?php echo $thumbnail; ?>
                </a>
            </figure>

            <?php endif ?>
            <h3 class="single-post__title"> <a href="<?php the_permalink(); ?>" class="on-open"><?php the_title(); ?></a></h3>
           

             <p class="single-post__info">  
                <span class="date"><?php echo $post_date; ?></span>
                <span>at </span>
                <span class="category"><?php echo $categories_output; ?></span>
            </p>

            <?php

            if ( !empty(get_the_content() ) ):

                if ( has_excerpt() ) :

            ?>

            <div class="single-post__content">
                <?php the_excerpt(); ?>
            </div>

            <?php
                else:
            ?>

            <div class="single-post__content">
                <?php echo custom_excerpt($id); ?>
            </div>

         

            <?php
                endif;
            endif;
            ?>
            <div class="single-post__read-more">
                <a href="<?php the_permalink();  ?>" class="btn-read-more on-open">Read more</a>
            </div>
        </article>

    </div>
</div>
