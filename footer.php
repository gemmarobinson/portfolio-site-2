        <footer class="c-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="c-footer__socials">
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
                    <?php 
                        if (get_field('accreditations', 'options')) {

                            echo '<div class="col-12 text-center my-4">';

                                echo '<img class="h-width-450px" src="'.get_field('accreditations', 'options')['url'].'" alt="'.get_field('accreditations', 'options')['alt'].'" />';

                            echo '</div>';
                        }
                    ?>
                    <div class="col-12 text-center">
                        <img class="px-5 px-md-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.svg" alt="Bartholomew Landscaping plain text logo" />
                    </div>
                    <div class="col-12">
                        <ul class="c-footer__menu">
                            <li>
                                <a href="<?php echo get_field('terms_link', 'options'); ?>">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="<?php echo get_field('privacy_policy_link', 'options'); ?>">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="<?php echo get_field('cookie_policy_link', 'options'); ?>">Cookie Policy</a>
                            </li>
                            <li>
                                <a href="https://sixthstory.co.uk" target="_blanks">Designed by Sixth Story</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
