<?php
/**
 * Register taxonomies.
 *
 * @package    Tim_Suhrstedt
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace TIMS_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register taxonomies.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxonomies_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom taxonomies.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom taxonomies.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        $labels = [
            'name'                       => __( 'Media Types', 'tims' ),
            'singular_name'              => __( 'Media Type', 'tims' ),
            'menu_name'                  => __( 'Media Type', 'tims' ),
            'all_items'                  => __( 'All Media Types', 'tims' ),
            'edit_item'                  => __( 'Edit Media Type', 'tims' ),
            'view_item'                  => __( 'View Media Type', 'tims' ),
            'update_item'                => __( 'Update Media Type', 'tims' ),
            'add_new_item'               => __( 'Add New Media Type', 'tims' ),
            'new_item_name'              => __( 'New Media Type', 'tims' ),
            'parent_item'                => __( 'Parent Media Type', 'tims' ),
            'parent_item_colon'          => __( 'Parent Media Type', 'tims' ),
            'popular_items'              => __( 'Popular Media Types', 'tims' ),
            'separate_items_with_commas' => __( 'Separate Media Types with commas', 'tims' ),
            'add_or_remove_items'        => __( 'Add or Remove Media Types', 'tims' ),
            'choose_from_most_used'      => __( 'Choose from the most used Media Types', 'tims' ),
            'not_found'                  => __( 'No Media Types Found', 'tims' ),
            'no_terms'                   => __( 'No Media Types', 'tims' ),
            'items_list_navigation'      => __( 'Media Types List Navigation', 'tims' ),
            'items_list'                 => __( 'Media Types List', 'tims' )
        ];

        $args = [
            'label'              => __( 'Media Types', 'tims' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Media Types',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'taxonomies',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'taxonomies',
            'show_in_quick_edit' => true
        ];

        register_taxonomy(
            'tims_taxonomy',
            [
                'attachment'
            ],
            $args
        );

    }

}

// Run the class.
new Taxonomies_Register;