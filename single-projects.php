<?php get_header(); ?>

<div class="h-page-wrap">
    
    <div class="c-single-project__header h-background-block slideInDown wow slow" style="background-image: url('<?php echo get_field('header_image'); ?>')">   
    </div>

    <div class="c-single-project container">
        <div class="row no-gutters h-border-left">
            <!-- pt-3 pt-sm-5 px-sm-5 -->
            <div class="col-12 col-md-6 pt-3 pt-sm-5 px-sm-5 c-single-project__title">

                <h1 class="mb-0">
                    <?php 
                        $title = get_the_title().'.';
                        $wordCount = str_word_count($title);
                        $split = intdiv($wordCount, 2);
                        $words = explode(' ', $title);
                        $count = 1;

                        foreach ($words as $word) {
                            echo $word;

                            if ($count == $split) {
                                echo '<br />';
                            } else {
                                echo ' ';
                            }

                            $count++;
                        }
                    ?>
                </h1>

                <h2 class="h3 h-underline">
                    <?php
                        $field = get_the_terms(get_the_id(), 'project-category');
                       
                        echo $field[0]->name;
                    ?>
                </h2>
            </div>
        </div>
        <div class="row no-gutters h-border-left px-sm-5">
            <div class="col-12">                
                <div class="row no-gutters justify-content-between mt-2 mt-sm-5 h-border-bottom--permanent">
                    <div class="col-12 col-lg-5 mb-lg-3">
                        <p><?php echo get_field('introductory_text'); ?></p>
                    </div>
                    <div class="col-lg-6 pl-lg-4 mt-md-4 mt-lg-0 h-border-lg-left d-flex flex-column">
                        <?php
                            if( have_rows('info') ):

                                while ( have_rows('info') ) : the_row();

                                    echo '<p><span class="h-font-azo">'.get_sub_field('what').' : </span>'.get_sub_field('text').'</p>';

                                endwhile;

                            endif;
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="col-12">
                <?php
                    $count = 1;
                    while ( have_rows('content') ) : the_row();

                        if( get_row_layout() == 'sliderimage_with_text_and_square_image' ):
                            ?>
                            <div class="row no-gutters c-portfolio-block h-border-bottom--permanent fadeIn wow slow">

                                <div class="col-12 position-relative h-overflow-hidden">

                                    <p class="mb-0 h-underline h-font-rosa">0<?php echo $count; ?></p>

                                    <div class="c-portfolio-block__slider js-portfolio-slider__one">
                                        <?php 

                                            $images = get_sub_field('slider');

                                            if( $images ):
                                                foreach( $images as $image ): 
                                                    ?>
                                                    <div class="c-portfolio-block__slide h-background-block js-portfolio-slide__one" style=" background-image: url('<?php echo $image['url']; ?>');">
                                                    </div>
                                                    <?php 
                                                endforeach;
                                            endif; 
                                        ?>
                                    </div>

                                    <div class="c-portfolio-block__slider-arrows js-portfolio-arrows__one"></div>

                                </div>

                                <div class="col-12 d-flex flex-wrap c-portfolio-block--bottom">

                                    <div class="c-portfolio-block__image h-background-block" style="background-image: url('<?php echo get_sub_field('square_image'); ?>');">            
                                    </div>

                                    <div class="c-portfolio-block__text">
                                        <?php the_sub_field('text'); ?>
                                    </div>

                                </div>

                            </div>
                            <?php

                        elseif( get_row_layout() == 'full_width_image_with_caption' ): 

                            ?>
                            <div class="row no-gutters c-portfolio-block h-border-bottom--permanent fadeIn wow slow">

                                <div class="col-12">

                                    <p class="mb-0 h-underline h-font-rosa">0<?php echo $count; ?></p>
                                    <img class="c-portfolio-block__single-image" src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('image_caption'); ?>" />
                                    <p class="mb-0"><?php echo get_sub_field('image_caption'); ?></p>
        
                                </div>
                            </div>
                            <?php

                        elseif( get_row_layout() == 'slider__image_with_text_and_square_image_to_right' ):

                            ?>
                            <div class="row no-gutters c-portfolio-block h-border-bottom--permanent fadeIn wow slow">

                                <div class="col-12 position-relative h-overflow-hidden">

                                    <p class="mb-0 h-underline h-font-rosa">0<?php echo $count; ?></p>

                                    <div class="c-portfolio-block__slider js-portfolio-slider__two">
                                        <?php 

                                            $images = get_sub_field('slider');

                                            if( $images ):
                                                foreach( $images as $image ): 
                                                    ?>
                                                    <div class="c-portfolio-block__slide h-background-block js-portfolio-slide__two" style="background-image: url('<?php echo $image['url']; ?>');">
                                                    </div>
                                                    <?php 
                                                endforeach;
                                            endif; 
                                        ?>
                                    </div>

                                    <div class="c-portfolio-block__slider-arrows js-portfolio-arrows__two"></div>

                                </div>

                                <div class="col-12 d-flex flex-wrap flex-column-reverse flex-lg-row c-portfolio-block--bottom">

                                    <div class="c-portfolio-block__text c-portfolio-block__text--left">
                                        <?php the_sub_field('text'); ?>
                                    </div>

                                    <div class="c-portfolio-block__image h-background-block" style="background-image: url('<?php echo get_sub_field('square_image'); ?>');">            
                                    </div>

                                </div>

                            </div>
                            <?php

                        endif;

                        $count++;

                    endwhile;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="c-single-project__button d-flex flex-column flex-sm-row align-items-center justify-content-center">
                    <a href="<?php echo get_bloginfo('url'); ?>/projects" class="c-btn c-btn--border mx-2 mb-3 mb-sm-0">Back to projects</a>
                    <a href="<?php echo get_bloginfo('url'); ?>/project-category/<?php echo $field[0]->slug; ?>" class="c-btn c-btn--border mx-2">All <?php echo strtolower($field[0]->name); ?></a>
                </div>
            </div>

        </div>
    </div>

</div>

<?php get_footer(); ?>