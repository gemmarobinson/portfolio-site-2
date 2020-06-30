<?php
	/*--------------------------------------------------
		| Enqueue Stylesheet and JavaScript
	--------------------------------------------------*/
	
		# Deregister default javascripts & includes all of the style sheets rather than using link rel.
		function sixthstory_enqueue() {
			$time = time();

			# Deregister the defaults and implement our stylesheets.
			if ( !is_page('contact') ) { // this is so that the Contact Form 7 Scripts can still load in
				wp_deregister_script( 'jquery' );
			}
			wp_deregister_script( 'wp-embed' );

			# CSS
			wp_enqueue_style( 'main', get_template_directory_uri().'/assets/dist/app.min.css', '', $time, false);

			# JS (including jQuery)
			wp_enqueue_script('appjs', get_template_directory_uri().'/assets/dist/bundle.js', '', $time, true);

			# Font Awesome
			//wp_enqueue_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

			# Google Maps
			// if (is_page(*PAGEID*)) {
			//   wp_enqueue_script('gmap', 'https://maps.googleapis.com/maps/api/js?key=*API-KEY*', array('jquery'), '1.0', true);
			// }

		}
		add_action( 'wp_enqueue_scripts', 'sixthstory_enqueue');