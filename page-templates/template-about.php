<?php
	/* Template Name: About */
	get_header();
?>

<div class="h-page-wrap">
    <div class="container">

        <div class="row position-relative">

            <div class="col-12 px-md-0 c-about-hero__image h-background-block" style="background-image:url('<?php echo get_field('header_image'); ?>');">
            </div>

            <div class="col-12 col-md-10 col-lg-6 c-about-hero__text fadeInUp slow wow">
                <h1 class="fadeIn slow wow" data-wow-delay="2s"><?php echo get_field('heading'); ?></h1>
                <h2 class="h3 h-underline mb-5 fadeIn slow wow" data-wow-delay="2s"><?php echo get_field('small_title'); ?></h2>
                <div class="fadeIn slow wow">
                    <?php echo get_field('text'); ?>
                </div>
            </div>
            
            <div class="col-12 col-md-10 col-lg-6 px-md-0 d-flex align-items-lg-end justify-content-lg-end">
                <div class="h-overflow-hidden">
                    <div class="slideInRight wow slow">
                        <p class="h3 c-about-hero__vertical-text pt-2"><?php echo get_field('splitter_text'); ?></p>
                    </div>
                </div>
                <div class="h-line-vertical h-line-vertical--mr-55px h-height-100 d-none d-lg-block"></div>
            </div>

            <div class="h-line-horizontal h-line-horizontal--bottom-left d-none d-lg-block"></div>

        </div>
    </div>
    
    <div class="position-relative">
        <div class="c-green-line"></div>
        <div class="container">
            <div class="row mx-lg-n5 c-process__steps">
                
                <div class="h-overflow-hidden d-flex">
                    <div class="d-flex slideInRight wow slow">
                        <h3 class="h-vertical-text m-0 pl-2 h-pt-35px d-none d-lg-block"><?php echo get_field('about_splitter_text'); ?></h3>
                    </div>
                </div>

                <div class="h-line-vertical h-height-1570px d-none d-lg-block"></div>
                
                <div class="col-lg-7 px-md-0 pl-lg-5 h-pt-85px">
                    <div class="d-flex flex-column">
                        <h3 class="h-underline mb-5 mb-lg-0"><?php echo get_field('about_small_title'); ?></h3>
                        <h2 class="h-width-155px mb-lg-5 c-process__title"><?php echo get_field('about_title'); ?></h2>

                        <?php
                            if( have_rows('design_steps') ):
                                echo '<div class="h-overflow-hidden">';
                                    $count = 1;
                                    while ( have_rows('design_steps') ) : the_row();

                                        echo '<div class="fadeInLeft slow wow">';
                                            echo '<p class="h-font-rosa h-underline mb-0">0'.$count.'</p>';
                                            echo '<h3 class="mb-0">'.get_sub_field('title').'</h3>';
                                            echo '<p class="mb-5 h-width-530px h-color-gray">'.get_sub_field('text').'</p>';
                                        echo '</div>';

                                        $count++;

                                    endwhile;
                                echo '</div>';
                            endif;
                        ?>

                    </div>
                </div>
                
                <div class="h-flex-1 d-none d-lg-block">
                    <div class="h-line-vertical c-process__line"></div>
                    <div class="h-full-width--right c-process__image h-background-block h-background-block--bottom" style="background-image:url('<?php echo get_field('design_process_image'); ?>');"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="row no-gutters">
        <div class="col-12 col-lg-6 d-none d-lg-block">
            <div class="c-testimonials__image h-background-block" style="background-image: url('<?php echo get_field('testimonials_image'); ?>')"></div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="c-testimonials__block h-overflow-hidden">
                <div class="h-width-100">
                    <h2 class="h-color-white--alt h-width-180px h-mb-34px"><?php echo get_field('testimonials_title'); ?></h2>

                    <div class="c-testimonials js-testimonial-slider">
                        <?php
                            if( have_rows('testimonials') ):
                                while ( have_rows('testimonials') ) : the_row();

                                    echo '<div class="c-testimonials__single">';
                                        echo '<p class="h-color-white--alt">'.get_sub_field('text').'</p>';
                                        echo '<p class="h-color-green h3 mb-0">'.get_sub_field('name').'</p>';
                                    echo '</div>';

                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>

                <div class="c-testimonial-arrows js-testimonial-arrows slideInUp slow wow"></div>
            </div>
        </div>
    </div>

    <div class="row c-cta fadeIn slower wow">
        <div class="col-12 text-center">
            <h2 class="h3 h-underline h-underline--middle mb-4"><?php echo get_field('careers_small_title'); ?></h2>
            <p class="c-cta__text h-width-600px mx-auto mb-5"><?php echo get_field('careers_text'); ?></p>
            <?php
                $link = get_field('careers_link');

                echo '<a class="c-btn c-btn--border" href="'.$link['url'].'" target="'.$link['target'].'">'.$link['title'].'</a>';
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>