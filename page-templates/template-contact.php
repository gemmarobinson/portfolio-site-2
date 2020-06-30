<?php
    /* Template Name: Contact */
    get_header();
?>

<div class="h-page-wrap">

    <div class="c-contact__title">
        <div class="h-width-710px mx-auto text-center fadeIn slow wow">
            <h1 class="h-color-white">
                <?php echo get_field('title'); ?>
            </h1>
            <a href="tel:<?php echo get_field('telephone_link'); ?>" class="h-color-green h2 h-font-futura">
                <?php echo get_field('telephone_text'); ?>
            </a>
            <a href="mailto:<?php echo get_field('email'); ?>>" class="h-color-green h2 h-font-futura">
                <?php echo get_field('email'); ?>
            </a>
        </div>
    </div>

    <div class="c-contact__socials">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="h-overflow-hidden">
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


            <a class="c-contact__anchor-link h-overflow-hidden" href="#anchor-main">
                <img class="slideInUp wow slow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-white.svg" alt="white downwards arrow" />
                <p class="h3 h-color-white slideInUp wow slow"><?php echo get_field('anchor_link_text'); ?></p>
            </a>
        </div>
    </div>

    <div id="anchor-main">
        <div class="container">
            <div class="row">
                <div class="col-12 h-border-left c-contact__address">
                    <h2 class="h3 mb-5">Address</h2>
                    <address>
                        <?php echo get_field('address'); ?>
                    </address>
                </div>
                <div class="col-12 c-contact__form">
                    <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
                    <div class="c-wpcf7-popup" id="js-popup">
                        <div class="container">
                            <p class="h1">Thank you for getting in touch!</p>
                            <p>We will get back to you as soon as possible. In the mean time, why not follow us on social media.</p>
                            <ul class="c-wpcf7-popup__socials">
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
                        <div class="popup-close">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php get_footer(); ?>

