<?php
/**
 * Site settings page fields.
 *
 * @package WordPress
 * @subpackage tims
 * @since tims 1.0.0
 */

namespace Suhrstedt;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Site settings page fields.
 */
class Suhrstedt_Settings_Fields {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since	   1.0.0
	 * @param      string    $tims
	 * @param      string    $version
	 */
    public function __construct() {

        // Register fields.
    	$this->fields();

	}
	
	/**
	 * Register fields.
	 */
	public function fields() {

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( [
				'key'    => 'group_5a0c7ff7764ca',
				'title'  => __( 'Settings Page', 'tims' ),
				'fields' => [
					[
						'key'               => 'field_5a0c800f57d56',
						'label'             => __( 'Admin Menu', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5a0c802257d57',
						'label'             => __( 'Menus Link', 'tims' ),
						'name'              => 'tims_menus_link_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Select the position of the Menus page link.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'top'     => __( 'Top Level', 'tims' ),
							'default' => __( 'Default', 'tims' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'top',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0c808757d58',
						'label'             => __( 'Widgets Link', 'tims' ),
						'name'              => 'tims_widgets_link_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Select the position of the Widgets page link.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'top'     => __( 'Top Level', 'tims' ),
							'default' => __( 'Default', 'tims' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'top',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0c80ab57d59',
						'label'             => __( 'Settings Page', 'tims' ),
						'name'              => 'tims_settings_link_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Select the position of this Settings page link, and whether to show or hide the other settings links.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'default' => __( 'Default/Show', 'tims' ),
							'top'     => __( 'Top Level/Hide', 'tims' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'default',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0c8d8a32b95',
						'label'             => __( 'Hide Links', 'tims' ),
						'name'              => 'tims_admin_hide_links',
						'type'              => 'checkbox',
						'instructions'      => __( 'Select which menu items to hide.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'themes'        => __( 'Appearance', 'tims' ),
							'plugins'       => __( 'Plugins', 'tims' ),
							'users'         => __( 'Users', 'tims' ),
							'tools'         => __( 'Tools', 'tims' ),
							'fields'        => __( 'Custom Fields', 'tims' ),
						],
						'allow_custom'      => 0,
						'save_custom'       => 0,
						'default_value'     => [],
						'layout'            => 'horizontal',
						'toggle'            => 1,
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0c8d7232b94',
						'label'             => __( 'Dashboard', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5a0c8f393edd6',
						'label'             => __( 'Hide Widgets', 'tims' ),
						'name'              => 'tims_dashboard_hide_widgets',
						'type'              => 'checkbox',
						'instructions'      => __( 'Select the Dashboard widgets to hide.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices' => [
							'welcome'       => __( 'Welcome', 'tims' ),
							'news'          => __( 'WordPress News', 'tims' ),
							'quick'         => __( 'Quick Press', 'tims' ),
							'at_glance'     => __( 'At a Glance', 'tims' ),
							'activity'      => __( 'Activity', 'tims' ),
						],
						'allow_custom'      => 0,
						'save_custom'       => 0,
						'default_value'     => [
						],
						'layout'            => 'horizontal',
						'toggle'            => 1,
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0cbb3873e55',
						'label'             => __( 'Admin Pages', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5a0cbb5e73e56',
						'label'             => __( 'Admin Footer Credit', 'tims' ),
						'name'              => 'tims_admin_footer_credit',
						'type'              => 'text',
						'instructions'      => __( 'The "developed by" credit.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5a0cbba573e57',
						'label'             => __( 'Admin Footer Link', 'tims' ),
						'name'              => 'tims_admin_footer_link',
						'type'              => 'url',
						'instructions'      => __( 'Link to the website devoloper.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
					],
					[
						'key'               => 'field_5a1989a036067',
						'label'             => __( 'Meta/SEO', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5a237090744c4',
						'label'             => __( 'Meta Tags', 'tims' ),
						'name'              => 'tims_disable_meta_tags',
						'type'              => 'true_false',
						'instructions'      => __( 'Disable if you plan on using Yoast SEO or a similarly awful plugin.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Check to disable', 'tims' ),
						'default_value'     => 0,
						'ui' => 0,
						'ui_on_text'        => __( 'Disabled', 'tims' ),
						'ui_off_text'       => __( 'Enabled', 'tims' ),
					],
					[
						'key'               => 'field_5a198d601b523',
						'label'             => __( 'Blog Pages Title', 'tims' ),
						'name'              => 'tims_meta_blog_title',
						'type'              => 'text',
						'instructions'      => __( 'Will use the site title if left empty.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a237090744c4',
									'operator' => '!=',
									'value'    => '1',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5a198bd736068',
						'label'             => __( 'Blog Pages Description', 'tims' ),
						'name'              => 'tims_meta_blog_description',
						'type'              => 'textarea',
						'instructions'      => __( 'Will use the site tagline if left empty and if a tagline is set.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a237090744c4',
									'operator' => '!=',
									'value'    => '1',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'maxlength'         => '',
						'rows'              => 4,
						'new_lines'         => '',
					],
					[
						'key'               => 'field_5a198c1836069',
						'label'             => __( 'Blog Pages Image', 'tims' ),
						'name'              => 'tims_meta_blog_image',
						'type'              => 'image',
						'instructions'      => __( 'A minimum is 1230px by 600px is recommended for retina display devices.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a237090744c4',
									'operator' => '!=',
									'value'    => '1',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
				],
				'location' => [
					[
						[
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'site-settings',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => 1,
				'description'           => __( 'For the Site Settings ACF admin page.', 'tims' ),
			] );
			
		endif;

	}

}

$tims_plugin_settings_fields = new Suhrstedt_Settings_Fields;
