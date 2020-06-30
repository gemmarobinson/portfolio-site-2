<?php
    get_header();

    $currentTax = get_queried_object();
    $currentTaxSlug = $currentTax->slug;
    $currentTaxName = $currentTax->name;

?>

<div class="h-page-wrap">

<div class="c-projects-intro">
    <div class="c-projects-intro__grey-background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="h-width-350px c-projects-intro__title fadeIn slow wow"><?php echo get_field('heading', '57'); ?></h1>

                <div class="c-category-filters">
                    <a href="<?php echo get_bloginfo('url'); ?>/projects" class="c-category-filters__single"  data-wow-delay="0.2s">View all projects</a>
                    <?php
                        $taxonomies = get_terms('project-category');
                        foreach ($taxonomies as $taxonomy) {

                            if ($taxonomy->slug === $currentTaxSlug) {
                                echo '<a 
                                        href="'.get_bloginfo('url').'/project-category/'.$taxonomy->slug.'"
                                        class="c-category-filters__single '.$taxonomy->slug.' active" 
                                      >';
                                    echo $taxonomy->name;
                                echo '</a>';
                            } else {
                                echo '<a 
                                        href="'.get_bloginfo('url').'/project-category/'.$taxonomy->slug.'"
                                        class="c-category-filters__single '.$taxonomy->slug.'"
                                      >';
                                    echo $taxonomy->name;
                                echo '</a>';
                            }
                        }
                    ?>
                </div>
                
                <div>
                    <?php

                        $args = array(
                            'post_type'      => 'projects',
                            'posts_per_page' => 4,
                            'paged'          => $paged,
                            'post_status'    => 'publish',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'project-category',
                                    'field' => 'slug',
                                    'terms' => $currentTaxSlug,
                                    'include_children' => true,
                                    'operator' => 'IN'
                                )
                            ),
                        );
                        $the_query = new WP_Query( $args );

                        if ($the_query->have_posts()) { 
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();

                                $image = get_field('project_overview_image') ? get_field('project_overview_image') : get_field('homepage_image');
                                ?>

                                <div class="c-project-card js-single-project">

                                    <div class="row align-items-center">

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <div class="c-project-card__image h-background-block" style="background-image: url('<?php echo $image; ?>')"></div>
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-8 d-lg-flex align-items-center justify-content-between">
                                            <div>
                                                <h2 class="c-project-card__title h-underline h-underline--gold pb-4 mb-2">
                                                    <?php echo get_the_title(); ?>
                                                </h2>
                                                <p class="h3 mb-0"><?php echo $currentTaxName; ?></p>
                                            </div>
                                            <a href="<?php echo get_the_permalink(); ?>" class="c-btn c-btn--border c-btn--transparent mt-3 mt-lg-0">
                                                View Project
                                            </a>
                                        </div>

                                    </div>

                                </div>

                                <?php

                            } wp_reset_postdata();
                                              
                        }
                    ?>
                </div>

                <div class="text-center h-my-130px">
                    <div class="c-pagination px-4">
                        <?php
                            $big = 999999999; // need an unlikely integer

                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $the_query->max_num_pages,
                                'prev_text'    => __('Previous Page'),
                                'next_text'    => __('Next Page'),
                                'end_size' => 2
                            ) );
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>

<?php get_footer(); ?>