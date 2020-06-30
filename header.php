<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="<?php echo get_bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="alternate" href="<?php echo get_home_url(); ?>" hreflang="en-gb" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_home_url(); ?>/favicon.ico">
		<link rel="stylesheet" href="https://use.typekit.net/ybi4fpy.css">
		<?php wp_head(); ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148802532-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-148802532-1');
		</script>
	</head>

	<body <?php body_class(); ?> ontouchstart="">
	
		<header>
			<div class="container">
				<div class="row mx-xl-n5">
					<div class="col-6 d-flex align-items-center">
						<a href="<?php echo get_bloginfo('url'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo-grey.png" alt="Bartholomew Landscaping logo" class="c-header__logo js-logo" />
						</a>
					</div>
					<div class="col-6 d-flex align-items-center justify-content-end">
						<div class="c-menu-toggle js-menu-toggle">
							<div class="c-hamburger">
								<div class="c-hamburger__line"></div>
							</div>
							Menu
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="c-menu p-3 js-menu">
			<div class="container h-height-100 d-flex flex-column">
				<div class="row no-gutters">
					<div class="col-12 d-flex align-items-center justify-content-between h-border-bottom h-border--white pb-5 mb-4">
						<a href="<?php echo get_bloginfo('url'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo-grey.png" alt="White Bartholomew Landscaping logo" class="c-header__logo" />
						</a>
						<div class="c-menu-toggle c-menu-toggle--close js-menu-toggle">
							<div class="c-hamburger">
								<div class="c-hamburger__line"></div>
							</div>
							Close
						</div> 
					</div>
					<div class="col-6 d-none d-md-block">
						<p class="h-color-white--alt h2">Address</p>
						<address class="h-color-white--alt">
							Kingfisher House,</br>
							Juniper Drive,</br>
							Battersea Reach,</br>
							London,</br>
							SW18 1TX
						</address>
					</div>
					<div class="col-12 col-md-6 text-center text-md-right c-menu--mobile js-menu-list">
						<?php
							wp_nav_menu([
								'menu'              => 'Main Menu',
								'theme_location'    => 'Main Menu',
								'container_id' 		=> 'main-menu',
								'depth' 			=> 2,
								'walker' 			=> new SixthStory_Walker()
							]);
						?>
					</div>
				</div>
				<div class="row no-gutters d-none d-md-flex flex-grow-1 align-items-end">
                    <div class="col-12 pt-3 h-border-top h-border--white">
                        <div class="row">
                            
                        
        					<div class="col-6">
        						<ul class="c-menu__legal">
                                    <li>
                                        <a href="<?php echo get_field('terms_link', 'options'); ?>">Terms &amp; Conditions</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_field('privacy_policy_link', 'options'); ?>">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_field('cookie_policy_link', 'options'); ?>">Cookie Policy</a>
                                    </li>
        						</ul>
        					</div>
        					<div class="col-6">
        						<ul class="c-menu__social">
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
                    </div>
				</div>
			</div>
		</div>