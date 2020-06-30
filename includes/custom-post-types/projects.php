<?php
	function projects_CPT() {
		register_post_type( 'projects',
			array (
				'labels' => array(
					'name' => 'Projects',
					'singular_name' => 'Project',					
					'add_new_item' => 'Add New Project',
					'edit' => 'Edit Project',
					'new_item' => 'New Project',
					'view_item' => 'View Project',
					'search_items' => 'Search Projects',
					'not_found' => 'No Projects Found',
					'not_found_in_trash' => 'No Projects found in trash',
				),

				'public' => true,			
				'has_archive'	=> true,
				'supports' => array( 'title', 'editor', 'thumbnail'),
				'show_ui'  =>   true,
				'menu_icon' => 'dashicons-portfolio',
				'rewrite' => array( 'with_front' => false )
			)
		);
	}
	add_action( 'init', 'projects_CPT' );
?>