<?php
    get_header(); 
?>

<div class="h-page-wrap">
    
    <div class="container">

        <div class="row no-gutters px-md-5">
            <div class="col-12 h-border-bottom--permanent">
                <h1 class="h-width-155px c-title--news fadeIn slow wow">Our Blog.</h1>
                <ul class="c-news-socials h-overflow-hidden">
                <?php 
                    if ( get_field('facebook_link', 'options') ) { ?>
                        <li>
                            <a target="_blank" href="<?php echo get_field('facebook_link', 'options'); ?>" tartget="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <?php
                    }
                    
                    if ( get_field('twitter_link', 'options') ) { ?>
                        <li>
                            <a target="_blank" href="<?php echo get_field('twitter_link', 'options'); ?>" tartget="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <?php
                    }
                    
                    if ( get_field('instagram_link', 'options') ) { ?>
                        <li>
                            <a target="_blank" href="<?php echo get_field('instagram_link', 'options'); ?>" tartget="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <?php
                    }
                    
                    if ( get_field('linkedin_link', 'options') ) { ?>
                        <li>
                            <a target="_blank" href="<?php echo get_field('linkedin_link', 'options'); ?>" tartget="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <?php
                    }
                    
                    if ( get_field('youtube_link', 'options') ) { ?>
                        <li>
                            <a target="_blank" href="<?php echo get_field('youtube_link', 'options'); ?>" tartget="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <?php
                    }
                ?>
                </ul>
            </div>
        </div>

        <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 9,
                'paged'          => $paged,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC'
            );
            $the_query = new WP_Query( $args );

            if ($the_query->have_posts()) { ?>

                <div class="row"> 
                    <?php

                        $i = 1;

                        $total = wp_count_posts( 'post')->publish;


                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();

                            ?>

                            <div class="col-12 col-md-6 col-lg-4 px-xl-4 fadeIn slow wow">

                                <a class="c-news-card" href="<?php echo get_the_permalink(); ?>">

                                    <?php
                                        $image = get_field('card_image') ? get_field('card_image') : get_template_directory_uri().'/assets/images/default-card-image.jpg';
                                    ?>

                                    <div class="c-news-card__image h-background-block" style="background-image: url(<?php echo $image; ?>);">
                                    </div>

                                    <div class="c-news-card__info">
                                        <h2 class="c-news-card__title"><?php echo get_the_title(); ?></h2>
                                        <div class="h-width-100 d-flex justify-content-between align-items-center">
                                            <div class="h3 mb-0 c-news-card__read-more">Read More</div>
                                            <div class="h3 mb-0 h-underline h-underline--top h-underline--gold c-news-card__date">
                                                <?php echo get_the_date('d.m.y'); ?>
                                            </div>
                                        </div>
                                    </div>

                                </a>

                            </div> 

                            <?php

                            // if it's not the last post 
                            if ($the_query->current_post +1 != $the_query->post_count) {

                                // after every third post, but not after every ninth post
                                if ($i % 3 == 0 && $i % 9 != 0) {
                                    echo '<div class="c-news__border d-none d-lg-block"></div>';
                                }
                            }

                            $i++;
                            
                        } wp_reset_postdata();

                    ?>

                    <div class="c-pagination px-4">
                        <?php
                            global $wp_query;
                            $big = 999999999;

                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $wp_query->max_num_pages,
                                'prev_text'    => __('Previous Page'),
                                'next_text'    => __('Next Page'),
                            ) );
                        ?>
                    </div>

                    <div class="c-news__border my-5"></div>

                </div> <?php
            }
        ?>

    </div>
    
    <div class="c-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="mb-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-circle.svg" alt="Instagram logo icon in circle" />
                    <div class="c-instagram__feed">
                       <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/58f602dbc9b157b6a1f517761995e4fe.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>