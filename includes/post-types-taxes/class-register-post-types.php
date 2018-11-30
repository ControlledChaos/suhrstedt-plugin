<?php
/**
 * Register post types.
 *
 * @package    Tim_Suhrstedt
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace TimS_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom post types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom post types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
		 * Post Type: Film+TV.
		 */

		$labels = [
			'name'                  => __( 'Features/TV', 'tims' ),
			'singular_name'         => __( 'Feature/TV Project', 'tims' ),
			'menu_name'             => __( 'Features/TV', 'tims' ),
			'all_items'             => __( 'All Features/TV', 'tims' ),
			'add_new'               => __( 'Add New', 'tims' ),
			'add_new_item'          => __( 'Add New Feature Project', 'tims' ),
			'edit_item'             => __( 'Edit Project', 'tims' ),
			'new_item'              => __( 'New Feature Project', 'tims' ),
			'view_item'             => __( 'View Project', 'tims' ),
			'view_items'            => __( 'View Features/TV', 'tims' ),
			'search_items'          => __( 'Search Features/TV', 'tims' ),
			'not_found'             => __( 'No Features/TV Found', 'tims' ),
			'not_found_in_trash'    => __( 'No Features/TV Found in Trash', 'tims' ),
			'featured_image'        => __( 'Featured image for this project', 'tims' ),
			'set_featured_image'    => __( 'Set featured image for this project', 'tims' ),
			'remove_featured_image' => __( 'Remove featured image for this project', 'tims' ),
			'use_featured_image'    => __( 'Use as featured image for this project', 'tims' ),
			'archives'              => __( 'Feature archives', 'tims' ),
			'insert_into_item'      => __( 'Insert into Project', 'tims' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Project', 'tims' ),
			'filter_items_list'     => __( 'Filter Features/TV', 'tims' ),
			'items_list_navigation' => __( 'Features/TV list navigation', 'tims' ),
			'items_list'            => __( 'Features/TV list', 'tims' ),
			'attributes'            => __( 'Feature Attributes', 'tims' ),
			'parent_item_colon'     => __( 'Parent Project', 'tims' ),
		];

		$args = [
			'label'               => __( 'Features/TV', 'tims' ),
			'labels'              => $labels,
			'description'         => __( '', 'tims' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'features',
				'with_front' => true
			],
			'query_var'           => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-format-video',
			'supports'            => [
				'title',
				'page-attributes',
				'thumbnail'
			]
        ];

		register_post_type(
            'tims_features',
            $args
        );

		/**
		 * Post Type: Commercials.
		 */

		$labels = [
			'name'                  => __( 'Commercials', 'tims' ),
			'singular_name'         => __( 'Commercial', 'tims' ),
			'menu_name'             => __( 'Commercials', 'tims' ),
			'all_items'             => __( 'All Commercials', 'tims' ),
			'add_new'               => __( 'Add New', 'tims' ),
			'add_new_item'          => __( 'Add New Commercial', 'tims' ),
			'edit_item'             => __( 'Edit Commercial', 'tims' ),
			'new_item'              => __( 'New Commercial', 'tims' ),
			'view_item'             => __( 'View Commercial', 'tims' ),
			'view_items'            => __( 'View Commercials', 'tims' ),
			'search_items'          => __( 'Search Commercials', 'tims' ),
			'not_found'             => __( 'No Commercials Found', 'tims' ),
			'not_found_in_trash'    => __( 'No Commercials Found in Trash', 'tims' ),
			'featured_image'        => __( 'Featured image for this commercial', 'tims' ),
			'set_featured_image'    => __( 'Set featured image for this commercial', 'tims' ),
			'remove_featured_image' => __( 'Remove featured image for this commercial', 'tims' ),
			'use_featured_image'    => __( 'Use as featured image for this commercial', 'tims' ),
			'archives'              => __( 'Commercial archives', 'tims' ),
			'insert_into_item'      => __( 'Insert into Commercial', 'tims' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Commercial', 'tims' ),
			'filter_items_list'     => __( 'Filter Commercials', 'tims' ),
			'items_list_navigation' => __( 'Commercials list navigation', 'tims' ),
			'items_list'            => __( 'Commercials list', 'tims' ),
			'attributes'            => __( 'Commercial Attributes', 'tims' ),
			'parent_item_colon'     => __( 'Parent Commercial', 'tims' ),
		];

		$args = [
			'label'               => __( 'Commercials', 'tims' ),
			'labels'              => $labels,
			'description'         => __( '', 'tims' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'commercials',
				'with_front' => true
			],
			'query_var'           => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-megaphone',
			'supports'            => [
				'title',
				'page-attributes',
				'thumbnail'
			]
		];
		register_post_type(
            'tims_commercials',
            $args
        );

    }

}

// Run the class.
new Post_Types_Register;