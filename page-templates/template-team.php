<?php
	/* Template Name: Talent */
	get_header();
?>

<div class="h-page-wrap">

    <div class="c-talent">
        <div class="c-talent__grey-background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="h-width-290px c-talent__title fadeIn slow wow"><?php echo get_the_title(); ?>.</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="c-team h-border-bottom">
        <div class="container position-relative">
            <div class="c-team__border-right"></div>
            <p class="h3 c-team__vertical-text"><?php echo get_field('vertical_text'); ?></p>
            <div class="row position-relative">
                <div class="h-line-horizontal h-line-horizontal--right-n30px h-line-horizontal--top-left d-none d-lg-block"></div>
                <div class="col-12">
                    <div class="c-team__inner">
                        <div class="row">
                            <?php 
                                while ( have_rows('team') ) : the_row();
                                    $image = get_sub_field('picture');
                                    ?>
                                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                        <div class="c-team__card px-5 px-sm-0 fadeInUp slow wow">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mb-4 h-width-100" />
                                            <h2 class="h3 mb-0 h-line-height-small"><?php echo get_sub_field('name'); ?></h2>
                                            <h3 class="paragraph h-color-gray mb-0 h-letter-spacing-normal"><?php echo get_sub_field('job_title'); ?></h3>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-border-bottom mb-5">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative">
                        <div class="c-team-slider js-team-slider">
                            <?php 
                                $images = get_field('slider');

                                if( $images ):
                                    foreach( $images as $image ): 
                                        ?>
                                        <div class="js-team-slide">
                                            <div class="c-team-slider__image h-background-block" style=" background-image: url('<?php echo $image['url']; ?>');">
                                            </div>
                                            <p class="h3 c-team-slider__slide-caption mt-3 mb-0"><?php echo $image['caption']; ?></p>
                                        </div>
                                        <?php 
                                    endforeach;
                                endif; 
                            ?>
                        </div>
                        <div class="c-team-slider__arrows js-team-arrows"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    <div class="container">
        <div class="row c-team__cta fadeIn slower wow">
            <div class="col-12 text-center">
                <h2 class="h-width-600px mx-auto mb-5"><?php echo get_field('call_to_action_text'); ?></h2>
                <div>
                    <?php
                        $link = get_field('call_to_action_button');

                        echo '<a class="c-btn c-btn--border" href="'.$link['url'].'" target="'.$link['target'].'">'.$link['title'].'</a>';
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>