<?php get_header(); ?>

<div class="h-overflow-hidden">
    <div class="c-homepage-header d-flex align-items-center js-homepage-header">
        <div class="c-homepage-header__video-wrap">
            <video autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/homepage-video.mp4" type="video/mp4">
            </video>
        </div>
        <div class="h-overlay"></div>
        <div class="container">
            <div class="row mx-xl-n5">
                <div class="col-12 h-overflow-hidden">
                    <h1 class="h-color-white c-homepage-header__title mb-0 slideInUp slow wow delay-2s"><?php echo get_field('header_text'); ?></h1>
                </div>
            </div>
        </div>
        <div class="c-homepage-header__btn slideInUp wow delay-3s">
            <a href="#anchor-page-top" class="c-btn c-btn--tall">Explore</a>
        </div>
    </div>

    <div class="c-homepage-header--animation"></div>
</div>

<div id="anchor-page-top"></div>


<div class="h-border-bottom h-bg--grey-drawing-top-left">
    <div class="container h-border-left h-pt-225px">
        <div class="row no-gutters px-md-5">

            <div class="col-12 col-lg-6 pt-lg-2">
                <p class="h-font-rosa h-underline fadeIn slow wow">01</p>
            </div>

            <div class="col-12 col-lg-6">
                <h3 class="h-underline fadeInLeft slow wow"><?php echo get_field('one_subtitle'); ?></h3>
            </div>

            <div class="col-12 col-lg-5">
                <h2 class="h-width-250px fadeIn slow wow"><?php echo get_field('one_title'); ?></h2>
                <p class="pr-5 fadeIn slow wow"><?php echo get_field('one_text'); ?></p>
                <a href="<?php echo get_field('one_button')['url']; ?>" class="c-btn c-btn--border fadeIn slow wow"><?php echo get_field('one_button')['title']; ?></a>
            </div>

            <div class="col-12 h-full-width--right mt-4 mt-lg-0">
                <div class="h-image-offset">
                    <div class="h-image-offset__inner"></div>
                    <div class="c-homepage-block" style="background-image: url('<?php echo get_field('one_image')['url']; ?>');"></div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="c-homepage-projects h-border-bottom">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center">

            <div class="col-12 col-lg-9 col-xl-8 text-center position-relative fadeIn slower wow">
                <div class="c-homepage-projects__line"></div>
                <p class="h-font-rosa h-underline h-underline--middle">02</p>
                <h2 class="mb-0"><?php echo get_field('two_title'); ?></h2>
                <div class="js-project-titles">
                    <?php
                        $posts = get_field('two_projects');

                        foreach( $posts as $post): setup_postdata($post);

                            echo '<div>';
                                echo '<h3>'.get_the_title().'</h3>';
                                echo '<a href="'.get_the_permalink().'" class="c-btn c-btn--border mb-3">View project</a>';
                            echo '</div>';

                        endforeach; wp_reset_postdata();
                    ?>
                </div>
                <a href="<?php echo get_field('view_all_button')['url']; ?>" class="c-homepage-project__view-all h3 h-underline h-underline--long">
                    <?php echo get_field('view_all_button')['title']; ?>
                </a>
            </div>

            <div class="col-12 col-lg-9 col-xl-8 h-overflow-hidden">
                <div class="js-project-images slideInLeft slower wow">
                    <?php
                        $posts = get_field('two_projects');

                        foreach( $posts as $post): setup_postdata($post);
                            ?>
                                <div 
                                    class="c-homepage-project__image h-background-block d-flex align-items-center justify-content-center"
                                    style="background-image:url(<?php echo get_field('homepage_image'); ?>);"
                                > 
                                </div>
                            <?php
                        endforeach; wp_reset_postdata();
                    ?>
                </div>
                <div class="col-12 px-0 d-flex justify-content-end c-homepage-project__arrows js-project-arrows slideInUp wow delay-2s"></div>
            </div>

        </div>
    </div>
</div>



<div class="c-homepage-awards h-bg--grey-drawing-top-right">
    <div class="container">
        <div class="row mx-auto px-lg-5 d-none d-lg-flex">
            <div class="col-12 h-pt-225px h-border-left">
            </div>
        </div>
        <div class="row no-gutters flex-column-reverse flex-lg-row mt-5 mt-lg-0">
            <div class="col-12 px-lg-5 fadeIn slow wow">
                <p class="h-font-rosa h-underline h-underline">03</p>
                <h2 class="h-width-220px"><?php echo get_field('three_title'); ?></h2>
                <p class="h-width-400px mb-5"><?php echo get_field('three_text'); ?></p>
                <?php 
                    $image = get_field('awards_image');
                    echo '<img src="'.$image['url'].'" alt="'.$image['alt'].'" />';
                ?>
                <p><?php echo get_field('awards_image_caption'); ?></p>
            </div>
        </div>
    </div>
</div>



<div class="">
    <div class="row">
        <div class="col-12 text-center">
            <div class="c-contact-block h-background-block d-flex align-items-center justify-content-center" style="background-image: url(<?php echo get_field('four_background_image'); ?>);">
                <div class="h-overflow-hidden"> 
                    <a href="<?php echo get_field('four_button')['url']; ?>" class="c-btn slideInUp wow">
                        <?php echo get_field('four_button')['title']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>