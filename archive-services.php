<?php
    get_header();
?>

<div class="h-page-wrap">

    <div class="c-services-hero h-overflow-hidden">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-6 col-lg-4 fadeInLeft wow slow">
                    <h1 class="c-services-hero__title h-width-290px mb-4"><?php echo get_field('heading', '55'); ?></h1>
                    <h2 class="h3 h-underline"><?php echo get_field('small_title', '55'); ?></h2>
                    <p><?php echo get_field('intro_text', '55'); ?></p>
                    <a href="#anchor-services">    
                        <img class="mt-5 fadeInUp wow delay-2s" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="down arrow" />
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-8 d-none d-md-block slideInDown wow slow">
                    <div class="h-full-width--right h-full-width--60vw h-background-block c-services-hero__image" style="background-image:url('<?php echo get_field('header_image', '55'); ?>')"></div>
                </div>
            </div>
        </div>
    </div>

  
    <?php
        $args = array(
            'post_type'      => array('services'),
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            // 'orderby'        => 'date',
            // 'order'          => 'ASC'
        );
        $the_query = new WP_Query( $args );

        if ($the_query->have_posts()) { ?>

            <div class="h-border-top" id="anchor-services">
                <div class="container px-2 px-md-5">
                    <div class="row mx-0">

                        <div class="col-12 position-relative c-services-overview">
                            <div class="row position-relative c-services-overview__corners">

                                <?php                                
                                    while ( $the_query->have_posts() ) {
                                        $the_query->the_post();

                                        ?>
                                        <div class="col-12 col-sm-6 col-lg-4 h-p-5px fadeIn slow wow">
                                            <a href="<?php echo get_the_permalink(); ?>" class="c-services-card h-background-block" style="background-image:url('<?php echo get_field('featured_image'); ?>')">
                                                <div class="c-services-card__overlay"></div>
                                                <h2 class="c-services-card__title"><?php echo get_the_title(); ?></h2>
                                            </a>
                                        </div>
                                        <?php
                                        
                                    } wp_reset_postdata();
                                ?>
                                
                                <h3 class="c-services-overview__vertical-text h-overflow-hidden">
                                    <div class="slideInLeft wow slow">
                                        Services
                                    </div>
                                </h3>
                            
                            </div>

                            <div class="h-line-horizontal h-line-horizontal--bottom-left h-line-horizontal--right-n30px d-none d-lg-block"></div>
                            <div class="c-services-overview__border"></div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
        }
    ?>


    <div class="container fadeIn slow wow">
        <div class="row h-m-textblock--small px-md-4">
            <div class="col-12 col-lg-4 px-0 px-md-3">
                <h2 class="h-width-290px mb-5"><?php echo get_field('cta_title', '55'); ?></h2>
                <?php 
                    $link = get_field('cta_link', '55'); 
                    echo '<a href="'.$link['url'].'" target="'.$link['target'].'" class="c-btn c-btn--border mb-5 mb-lg-0">'.$link['title'].'</a>';
                ?>
            </div>
            <div class="col-12 col-lg-8 px-0 px-md-3">
                <h3 class="h-underline pb-3 mb-3"><?php echo get_field('cta_small_title', '55'); ?></h3>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-5">
                        <p class="h-color-gray"><?php echo get_field('cta_paragraph_one', '55'); ?></p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5">
                        <p class="h-color-gray"><?php echo get_field('cta_paragraph_two', '55'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>