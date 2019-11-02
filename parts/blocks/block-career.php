<?php
$title = get_sub_field('block_career_job_title');
$content = get_sub_field('block_career_job_left_column');
$job = get_sub_field('block_career_job_job');
$city = get_sub_field('block_career_job_city');
$btn = get_sub_field('block_career_job_button');
?>
<section class="block-career">
    <div class="container">
        <?php

        if ($title) :

        ?>
        <h2 class="block-career__title"><?php echo $title; ?></h2>
        <?php
        endif;

        if ($job && $btn) :

        ?>
        <div class="row">

            <div class="col col-lg-6">
                <div class="col-inner-wrapper">
                    <?php echo $content ;?>
                </div>
            </div>

            <div class="col col-lg-6">
                <div class="col-inner-wrapper">
                    <h5 class="block-career__job-title"><?php echo $job; ?></h2>
                <?php

                if ($city) :
                    
                ?>
                <p class="block-career__city"><?php echo $city;?></p>
                <?php
                endif;
                ?>
                <a href="<?php echo $btn['href']?>"" class="btn btn--f"><?php echo $btn['title'] ?></a>
                </div>
            </div>

        </div>
        <?php 
        endif;
        ?>
    </div>
</section>