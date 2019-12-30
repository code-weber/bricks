<?php

/**
 * Custom Post Type Sample
 * 
 * https://developer.wordpress.org/reference/functions/register_post_type/
 * https://generatewp.com/post-type/
 * 
 */

if ( ! function_exists('sb_cpt_sample') ) {

    function sb_cpt_sample() {

        $slug = 'cpt-sample';
                  
        $args = array(

            // ---- Labels ---

            'label'         => __('CPT Sample', 'bricks'),
            'description'   => __('CPT Sample', 'bricks'),
            'labels'        => array(
                'name'                  => _x('CPT Samples', 'Post Type General Name', 'bricks'),
                'singular_name'         => _x('CPT Sample', 'Post Type Singular Name', 'bricks'),
                // 'menu_name'             => __('Post Types', 'bricks'),
                // 'name_admin_bar'        => __('Post Type', 'bricks'),
                // 'archives'              => __('Item Archives', 'bricks'),
                // 'attributes'            => __('Item Attributes', 'bricks'),
                // 'parent_item_colon'     => __('Parent Item:', 'bricks'),
                // 'all_items'             => __('All Items', 'bricks'),
                // 'add_new_item'          => __('Add New Item', 'bricks'),
                // 'add_new'               => __('Add New', 'bricks'),
                // 'new_item'              => __('New Item', 'bricks'),
                // 'edit_item'             => __('Edit Item', 'bricks'),
                // 'update_item'           => __('Update Item', 'bricks'),
                // 'view_item'             => __('View Item', 'bricks'),
                // 'view_items'            => __('View Items', 'bricks'),
                // 'search_items'          => __('Search Item', 'bricks'),
                // 'not_found'             => __('Not found', 'bricks'),
                // 'not_found_in_trash'    => __('Not found in Trash', 'bricks'),
                // 'featured_image'        => __('Featured Image', 'bricks'),
                // 'set_featured_image'    => __('Set featured image', 'bricks'),
                // 'remove_featured_image' => __('Remove featured image', 'bricks'),
                // 'use_featured_image'    => __('Use as featured image', 'bricks'),
                // 'insert_into_item'      => __('Insert into item', 'bricks'),
                // 'uploaded_to_this_item' => __('Uploaded to this item', 'bricks'),
                // 'items_list'            => __('Items list', 'bricks'),
                // 'items_list_navigation' => __('Items list navigation', 'bricks'),
                // 'filter_items_list'     => __('Filter items list', 'bricks'),
            ),
            
            // ---- Options ---

            'public'                => true,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'hierarchical'          => false,
            'can_export'            => true,
            'has_archive'           => true,
            'rewrite'               => array(
                'slug'          => $slug,
                // 'with_front'    => true,
                // 'feeds'         => true,
                // 'pages'         => true,
            ),

            // ---- Supports ---

            'supports'      => array(
                'title',
                'editor',
                'thumbnail',
                // 'excerpt',
                // 'author',
                // 'page-attributes',
                // 'revisions',
                // 'custom-fields',
                // 'comments',
                // 'trackbacks',
                // 'post-formats',
            ),

            // ---- Taxonomies ---

            'taxonomies'    => array(
                // 'category',
                // 'post_tag',
            ),

            // ---- Admin UI ---

            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 20,
            'menu_icon'             => 'dashicons-pressthis',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,

            // ---- Capabilities ---

            'capability_type'   => 'post',
            // 'capabilities'      => array(
            //     'edit_post'             => 'edit_post',
            //     'read_post'             => 'read_post',
            //     'delete_post'           => 'delete_post',
            //     'edit_posts'            => 'edit_posts',
            //     'edit_others_posts'     => 'edit_others_posts',
            //     'publish_posts'         => 'publish_posts',
            //     'read_private_posts'    => 'read_private_posts',
            // ),
            
            // ---- REST API ---

            'show_in_rest'          => true,
            // 'rest_base'             => $slug,
            // 'rest_controller_class' => 'WP_REST_Posts_Controller',

        );
    
        register_post_type($slug, $args);

    }

    add_action('init', 'sb_cpt_sample');

}