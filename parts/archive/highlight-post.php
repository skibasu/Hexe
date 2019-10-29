<?php
$higligth_post = get_field('higligth_post', get_option('page_for_posts'));
$id = $higligth_post[0];
$post = get_post($id);
$title = get_the_title($id);
$post_date =get_the_date('d.m.Y',$id); 
$thumbnail = get_the_post_thumbnail($id, 'hightlight-post');
$categories = get_the_category($id);
$permalink = get_the_permalink($id);
$categories_output = '';
$excerpt = $post->post_excerpt;
// $content = apply_filters('the_content', get_post_field('post_content', $id));

if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $categories_output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a> ';
    }
}

?>
<div class="row">
<div class="col col-12 hightlight-post__column">
    <div class="col-inner-wrapper">
        <article data-id="<?php echo $id; ?>" class="inner-row highlight-post post-article">

            <div class="col col-12  col-md-6">
                <?php if( !empty($thumbnail) ) : ?>

                <figure class='highlight-post__thumbnail'>
                    <a href="<?php echo $permalink; ?>" class="block on-open">
                        <?php echo $thumbnail; ?>
                    </a>
                </figure>
                
                <?php endif; ?>
            </div>

            <div class="col col-12 col-md-6">

                <div class="highlight-post__title-wrapper">
                    <h3 class="highlight-post__title"> <a href="<?php echo $permalink; ?>" class="on-open"><?php echo $title; ?></a></h2>
                </div>

                <p class="highlight-post__info">  
                    <span class="date"><?php echo $post_date; ?></span>
                    <span>at </span>
                    <span class="category"><?php echo $categories_output; ?></span>
                </p>
                <?php

                if ( !empty($excerpt) ) :
                ?>

                <div class="highlight-post__content">
                  <p><?php echo $excerpt; ?></p>
                </div> 

                <?php
                    else:
                ?>

                <div class="highlight-post__content">
                    <?php echo custom_excerpt($id); ?>
                </div>
                <?php
                endif;
                ?>
            
                <div class="single-post__read-more">
                    <a href="<?php echo $permalink; ?>" class="btn-read-more on-open">Read more</a>
                </div>
            </div>
        </article>
    </div>
</div>
</div>
