<?php get_header(); ?>

<?php
$id = get_the_id(); 
var_dump($id);
?>

<div class="h-page-wrap">
    
    <div class="container">
        <div class="row flex-column-reverse flex-md-row align-items-center">
            <div class="col-12 col-xs-11 col-sm-12 col-md-4 d-flex flex-column justify-content-center pb-5 fadeIn slow wow">
                <p class="h3 h-underline h-underline--top h-underline--gold"><?php echo get_the_date('d.m.y'); ?></p>
                <h1 class="h2 c-title--news c-title--news--top c-post__title"><?php echo get_the_title(); ?></h1>
            </div>
            <div class="col-12 col-xs-11 col-sm-12 col-md-8 text-right h-overflow-hidden">
                <img class="c-post__featured-image slideInDown wow slow" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-xs-11 col-lg-10">
                <div class="c-post__content">
                    <?php the_field('content'); ?>
                </div>
            </div>

            <div class="col-12 text-center">
                <a href="<?php echo get_bloginfo('url'); ?>/news" class="c-post__button c-btn c-btn--border">Back to blogs</a>
            </div>
            
            <div class="col-12 col-xs-11 col-md-12 c-post__latest-posts">

                <div class="mx-md-5 h-border-bottom--permanent">
                    <h2 class="h3 mb-0">Latest blogs</h2>
                </div>

                <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'post_status'    => 'publish',
                        'orderby'        => 'rand',
                        'post__not_in'  => array(get_the_id())
                    );
                    $the_query = new WP_Query( $args );

                    if ($the_query->have_posts()) { ?>

                        <div class="row"> 
                            <?php
                                $total = wp_count_posts( 'post')->publish;


                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();

                                    ?>

                                    <div class="col-12 col-md-6 col-lg-4 px-xs-5 px-md-3 px-xl-4">

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
                                                                       
                                } wp_reset_postdata();

                            ?>

                        </div> <?php
                    }
                ?>
            </div>

        </div>
    </div>

</div>

<?php get_footer(); ?>