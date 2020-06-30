<?php
	/*--------------------------------------------------
	    | Theme & WordPress core functions files
	--------------------------------------------------*/
		require get_template_directory() . '/includes/core/wp-admin.php';
		require get_template_directory() . '/includes/core/enqueue.php';
		require get_template_directory() . '/includes/core/theme-setup.php';
		require get_template_directory() . '/includes/core/theme-support.php';
		require get_template_directory() . '/includes/core/excerpt.php';
		require get_template_directory() . '/includes/core/nav-walker.php';
		require get_template_directory() . '/includes/core/google-analytics.php';



	/*-----------------------------------------------------------------------------
		| Custom Post Types
	-----------------------------------------------------------------------------*/

		@include ('includes/custom-post-types/projects.php');
		@include ('includes/custom-post-types/services.php');




	/*-----------------------------------------------------------------------------
		| Taxonomies
	-----------------------------------------------------------------------------*/

		@include ('includes/taxonomies/project-category.php');
		
		if (defined('PHP_MAJOR_VERSION') && PHP_MAJOR_VERSION < 7) {
			function intdiv($a, $b){
			    return ($a - $a % $b) / $b;
			}
		}