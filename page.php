<?php get_header(); ?>

<div class="h-page-wrap c-default">

    <div class="c-default__header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="h-color-white mb-0"><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="c-default__content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        if( have_rows('section') ):

                            
                            while ( have_rows('section') ) : the_row();

                                ?>
                                <div class="c-default__section">
                                    <h2 class="c-default__heading"><?php echo get_sub_field('section_title'); ?></h2>
                                    <?php the_sub_field('content'); ?>
                                </div>
                                <?php

                            endwhile;

                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>