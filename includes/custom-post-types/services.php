<?php
    function serrvices_CPT() {
        register_post_type( 'services',
            array (
                'labels' => array(
                    'name' => 'Services',
                    'singular_name' => 'Service',                   
                    'add_new_item' => 'Add New Service',
                    'edit' => 'Edit Service',
                    'new_item' => 'New Service',
                    'view_item' => 'View Service',
                    'search_items' => 'Search Services',
                    'not_found' => 'No Services Found',
                    'not_found_in_trash' => 'No Services found in trash',
                ),

                'public' => true,           
                'has_archive'   => true,
                'supports' => array( 'title', 'editor', 'thumbnail'),
                'show_ui'  =>   true,
                'menu_icon' => 'dashicons-hammer',
                'rewrite' => array( 'with_front' => false )
            )
        );
    }
    add_action( 'init', 'serrvices_CPT' );
?>