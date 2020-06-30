<?php

    // creation of two taxonomies, Project Categories and writers, for the post type "post"
    function create_project_category_taxonomies() {

        // Add new taxonomy, make it hierarchical (like categories)
        $labels = array(
            'name'              => _x( 'Project Categories', 'taxonomy general name', 'textdomain' ),
            'singular_name'     => _x( 'Project Category', 'taxonomy singular name', 'textdomain' ),
            'search_items'      => __( 'Search Project Categories', 'textdomain' ),
            'all_items'         => __( 'All Project Categories', 'textdomain' ),
            'parent_item'       => __( 'Parent Project Category', 'textdomain' ),
            'parent_item_colon' => __( 'Parent Project Category:', 'textdomain' ),
            'edit_item'         => __( 'Edit Project Category', 'textdomain' ),
            'update_item'       => __( 'Update Project Category', 'textdomain' ),
            'add_new_item'      => __( 'Add New Project Category', 'textdomain' ),
            'new_item_name'     => __( 'New Project Category Name', 'textdomain' ),
            'menu_name'         => __( 'Project Category', 'textdomain' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite' => array('slug' => 'project-category', 'with_front' => false)
        );
        register_taxonomy( 'project-category', array( 'projects' ), $args );
    }
    add_action( 'init', 'create_project_category_taxonomies', 0 );
?>