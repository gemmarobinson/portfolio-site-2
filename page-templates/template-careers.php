<?php
    /* Template Name: Careers */
    get_header();
?>

<div class="h-page-wrap">

    <div class="c-careers">
        <div class="container">

            <div class="row flex-column-reverse flex-md-row justify-content-between align-items-center align-items-lg-start">
                <div class="col-12 col-md-7 col-lg-5 fadeIn wow slow">
                    <h1><?php echo get_the_title(); ?></h1>
                    <div class="pl-4 ml-n4 h-border-left">
                        <?php the_field('careers_text'); ?>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6 fadeInRight slow wow">
                    <?php 
                        $image = get_field('image'); 
                        echo '<img class="c-careers__image" src="'.$image['url'].'" alt="'.$image['alt'].'" />';
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="h1 h-width-685px h-font-futura c-careers__contact-text"><?php echo get_field('contact_text'); ?></p>

                    <?php
                        while ( have_rows('contact') ) : the_row();

                            echo '<div class="c-careers__contact">';

                                echo '<h2 class="h3 pb-2 mb-0 h-underline h-line-height-small">'.get_sub_field('name').'</h2>';
                                echo '<p class="h3 mb-0 h-line-height-small">'.get_sub_field('job_title').'</p>';
                                echo '<p class="mb-0 h-line-height-small"><a href="mailto:'.get_sub_field('email').'">'.get_sub_field('email').'</a></p>';

                            echo '</div>';

                        endwhile;
                    ?>
                </div>
            </div>

        </div>
    </div>

</div>

<?php get_footer(); ?>