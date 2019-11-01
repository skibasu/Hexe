<?php
$title = get_sub_field('latest_news_block_title');
$posts = get_sub_field('block_latest_posts_posts');

if ($posts) :

?>
<section class="block-latest-news">
    <div class="container">

    <?php if ( !empty($title) ) : ?>
        <h2 class="block-latest-news__title"><?php echo $title; ?></h2>
    <?php endif;?>

        <div class="row">
        <div class="block-latest-news__slick-slider">
        <?php
        if ($posts):

            foreach ($posts as $p) :
                $id = $p->ID;
                $title = get_the_title($id);
                $permalink = get_the_permalink($id);
                $post_date =get_the_date('d.m.Y', $id); 
                $categories = get_the_category($id);
                $categories_output = '';

                if ( ! empty( $categories ) ) {
                    foreach( $categories as $category ) {
                        $categories_output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a> ';
                    }
                }
            
            ?>

            <div class="block-latest-news__slick-slider__item">
                <div class="col-inner-wrapper">

                    <article data-id="<?php echo $id?>" class="single-post post-article"> 
     
                        <h3 class="single-post__title"> <a href="<?php echo $permalink; ?>" class="on-open"><?php echo $title; ?></a></h3>
                    

                        <p class="single-post__info">  
                            <span class="date"><?php echo $post_date; ?></span>
                            <span>at </span>
                            <span class="category"><?php echo $categories_output; ?></span>
                        </p>

                        <?php

                        if ( !empty(apply_filters('the_content', $p->post_content)) ):

                            if ( !empty($p->post_excerpt) ) :

                        ?>

                        <div class="single-post__content">
                            <?php echo $p->post_excerpt; ?>
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
                            <a href="<?php echo $permalink;  ?>" class="btn-read-more on-open">Read more</a>
                        </div>
                    </article>

                </div>
            </div>
        
        <?php
            endforeach;
            ?>
             </div>
             <?php
        endif;
        ?>
       
        </div>
    </div>
    <?php get_template_part('parts/archive/single-lightbox'); ?>
</section>
<?php 
endif;
?>