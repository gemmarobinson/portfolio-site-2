<?php get_header(); ?>

<div class="h-page-wrap">
    <div class="c-service">
        <div class="container">

            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-12 col-lg-5">
                    <div class="h-width-415px mb-5 mb-lg-0">
                        <h1 class="c-title--news mb-3 mb-lg-5"><?php echo get_the_title(); ?>.</h1>
                        <h2 class="h3 h-underline">Introduction</h2>
                        <?php the_field('introductory_text'); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="h-full-width--right c-service__top-image h-background-block" style="background-image: url('<?php echo get_field('top_image'); ?>')"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="h-border-bottom--permanent pb-4">
                        <h2 class="h-border-bottom--permanent pb-2 mb-2">List of Services</h2>
                        <h3><?php echo get_field('s2_title'); ?></h3>
                        <ul class="c-list c-service__list pl-lg-4">
                            <?php
                                while ( have_rows('list_of_services') ) : the_row();

                                    echo '<li>'.get_sub_field('service').'</li>';

                                endwhile;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="h-border-bottom--permanent position-relative">
                        <div class="c-services__slider c-services__slider js-service-slider-one">
                            <?php 

                                $images = get_field('slider_one');

                                if( $images ):
                                    foreach( $images as $image ): 
                                        ?>
                                        <div>
                                            <div class="c-services__slide h-background-block js-service-slide-one" style=" background-image: url('<?php echo $image['url']; ?>');">
                                            </div>
                                            <p class="h3 c-services__slide-caption"><?php echo $image['caption']; ?></p>
                                        </div>
                                        <?php 
                                    endforeach;
                                endif; 
                            ?>
                        </div>
                        <div class="c-services__slider-arrows js-service-arrows__one"></div>
                    </div>
                    <p class="pt-4"><?php echo get_field('paragraph_below_slider'); ?></p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="h-border-bottom--permanent pb-2 mb-4">What we offer</h2>
                    <div class="h-border-bottom--permanent c-services__content">
                        <?php the_field('what_we_offer_content'); ?>
                    </div>
                </div>
            </div>            

            <div class="row">
                <div class="col-12 pb-lg-4">
                    <div class="position-relative">
                        <div class="c-services__slider c-services__slider js-service-slider-two">
                            <?php 

                                $images = get_field('slider_two');

                                if( $images ):
                                    foreach( $images as $image ): 
                                        ?>
                                        <div>
                                            <div class="c-services__slide h-background-block js-service-slide-two" style=" background-image: url('<?php echo $image['url']; ?>');">
                                            </div>
                                            <p class="h3 c-services__slide-caption"><?php echo $image['caption']; ?></p>
                                        </div>
                                        <?php 
                                    endforeach;
                                endif; 
                            ?>
                        </div>
                        <div class="c-services__slider-arrows js-service-arrows__two"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="c-single-project__button d-flex justify-content-center">
                        <a href="<?php echo get_bloginfo('url'); ?>/services" class="c-btn c-btn--border">Back to services</a>
                    </div>                    
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>