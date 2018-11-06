<?php
/**
 * Site settings page field groups.
 *
 * @package    Tim_Suhrstedt
 * @subpackage controlled-chaos\admin
 * @since      1.0.0
 */

namespace TimS_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Site settings page field groups.
 */
final class Settings_Fields_ACF {

	/**
	 * Get an instance of the class.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

			// Register settings page fields.
    		$instance->settings_fields();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void Constructor method is empty.
	 */
	public function __construct() {}

	/**
	 * Register settings page fields.
	 *
	 * Uses the universal slug partial for admin pages. Set this
     * slug in the core plugin file.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings_fields() {

		$showcase = get_field( 'tims_showcase_number', 'option' );
		if ( $showcase ) {
			$showcase = $showcase;
		} else {
			$showcase = 6;
		}

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( [
				'key'    => 'group_5a0c7ff7764ca',
				'title'  => __( 'Settings Page', 'tims' ),
				'fields' => [

					/**
					 * Dashboard tab settings.
					 *
					 * @since 1.0.0
					 */

					[
						'key'               => 'field_5a0c8d7232b94',
						'label'             => __( 'Dashboard', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'tims' ),
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
						'key'               => 'field_5b4807983ccaf',
						'label'             => __( 'Custom Welcome', 'tims' ),
						'name'              => 'tims_custom_welcome',
						'type'              => 'true_false',
						'instructions'      => __( '', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Use the custom Welcome panel on the Dashboard', 'tims' ),
						'default_value'     => 0,
						'ui'                => 0,
						'ui_on_text'        => '',
						'ui_off_text'       => '',
					],
					[
						'key'               => 'field_5b48081b3ccb0',
						'label'             => __( 'Remove Welcome Dismiss', 'tims' ),
						'name'              => 'tims_remove_welcome_dismiss',
						'type'              => 'true_false',
						'instructions'      => __( '', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Remove the Welcome panel dismiss button.', 'tims' ),
						'default_value'     => 0,
						'ui'                => 0,
						'ui_on_text'        => '',
						'ui_off_text'       => '',
					],
					[
						'key'               => 'field_5a0c8f393edd6',
						'label'             => __( 'Hide Widgets', 'tims' ),
						'name'              => 'tims_dashboard_hide_widgets',
						'type'              => 'checkbox',
						'instructions'      => __( 'Select the Dashboard widgets to hide.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper' => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'gutenberg' => __( 'Try Gutenberg', 'tims' ),
							'welcome'   => __( 'Welcome', 'tims' ),
							'news'      => __( 'WordPress News', 'tims' ),
							'quick'     => __( 'Quick Press', 'tims' ),
							'at_glance' => __( 'At a Glance', 'tims' ),
							'activity'  => __( 'Activity', 'tims' ),
						],
						'allow_custom'      => 0,
						'save_custom'       => 0,
						'default_value'     => [],
						'layout'            => 'horizontal',
						'toggle'            => 1,
						'return_format'     => 'value',
					],

					/**
					 * Admin Menu tab settings.
					 *
					 * @since 1.0.0
					 */

					[
						'key'               => 'field_5a0c800f57d56',
						'label'             => __( 'Admin Menu', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'tims' ),
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
						'key'               => 'field_5aad41ffad3e6',
						'label'             => __( 'Site Settings Label', 'tims' ),
						'name'              => 'tims_site_settings_link_label',
						'type'              => 'text',
						'instructions'      => __( 'Change the label of the link to this page.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '50',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => __( 'Site Settings', 'tims' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5b4809a3f4f0b',
						'label'             => __( 'Site Settings Icon', 'tims' ),
						'name'              => 'tims_site_settings_link_icon',
						'type'              => 'text',
						'instructions'      => __( 'Enter a Dashicons CSS class for the icon of the link to this page.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '50',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => 'dashicons-admin-settings',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5b480aa335a20',
						'label'             => __( 'Site Plugin Position', 'tims' ),
						'name'              => 'tims_site_plugin_link_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Make the site-specific plugin admin page a top-level link.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'default' => __( 'Under Plugins', 'tims' ),
							'top'     => __( 'Top Level', 'tims' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'default',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5b480b0d35a21',
						'label'             => __( 'Site Plugin Label', 'tims' ),
						'name'              => 'tims_site_plugin_link_label',
						'type'              => 'text',
						'instructions'      => __( 'Change the label of the link to this page.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '50',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => __( 'Site Settings', 'tims' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5b480b4f35a22',
						'label'             => __( 'Site Plugin Icon', 'tims' ),
						'name'              => 'tims_site_plugin_link_icon',
						'type'              => 'text',
						'instructions'      => __( 'Enter a Dashicons CSS class for the icon of the link to this page.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '50',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => 'dashicons-welcome-learn-more',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5a0c802257d57',
						'label'             => __( 'Menus Link', 'tims' ),
						'name'              => 'tims_menus_position',
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
						'name'              => 'tims_widgets_position',
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
						'key'               => 'field_5a0c8d8a32b95',
						'label'             => __( 'Hide Links', 'tims' ),
						'name'              => 'tims_admin_hide_links',
						'type'              => 'checkbox',
						'instructions'      => __( 'Select which menu items to hide.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper' => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'themes'  => __( 'Appearance', 'tims' ),
							'plugins' => __( 'Plugins', 'tims' ),
							'users'   => __( 'Users', 'tims' ),
							'tools'   => __( 'Tools', 'tims' ),
							'fields'  => __( 'Custom Fields', 'tims' ),
						],
						'allow_custom'      => 0,
						'save_custom'       => 0,
						'default_value'     => [],
						'layout'            => 'horizontal',
						'toggle'            => 1,
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5aaa73e38deb3',
						'label'             => __( 'Restore Links Manager', 'tims' ),
						'name'              => 'tims_links_manager',
						'type'              => 'true_false',
						'instructions'      => __( 'The old Links Manager is hidden by default in newer WordPress installations.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => '',
						'default_value'     => 0,
						'ui'                => 1,
						'ui_on_text'        => __( 'Enabled', 'tims' ),
						'ui_off_text'       => __( 'Disabled', 'tims' ),
					],

					/**
					 * Admin Pages tab settings.
					 *
					 * @since 1.0.0
					 */

					[
						'key'               => 'field_5a0cbb3873e55',
						'label'             => __( 'Admin Pages', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'tims' ),
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
						'key'               => 'field_5bd8abd79a46d',
						'label'             => __( 'Admin Header', 'tims' ),
						'name'              => 'tims_use_admin_header',
						'type'              => 'true_false',
						'instructions'      => __( 'Adds the site title and tagline to the top of admin pages. Also registers a nav menu.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Use the admin header.', 'tims' ),
						'default_value'     => 0,
						'ui'                => 1,
						'ui_on_text'        => __( 'Yes', 'tims' ),
						'ui_off_text'       => __( 'No', 'tims' ),
					],
					[
						'key'               => 'field_5b834989e850c',
						'label'             => __( 'Drag & Drop Sort Order', 'tims' ),
						'name'              => 'tims_use_custom_sort_order',
						'type'              => 'true_false',
						'instructions'      => __( 'When posts and taxonomies are selected for custom sort order functionality, the table rows on their respective admin management screen can be dragged up or down.

						The order you set on the admin management screens will automatically set the order of the posts in the blog index pages and in archive pages.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Add drag & drop sort order functionality to post types and taxonomies.', 'tims' ),
						'default_value'     => 0,
						'ui' => 1,
						'ui_on_text'        => __( 'Yes', 'tims' ),
						'ui_off_text'       => __( 'No', 'tims' ),
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

					/**
					 * Meta/SEO tab settings.
					 *
					 * @since 1.0.0
					 */

					[
						'key'               => 'field_5a1989a036067',
						'label'             => __( 'Meta/SEO', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'tims' ),
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
						'name'              => 'tims_meta_disable_tags',
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
						'ui'                => 0,
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
						'instructions'      => __( 'A minimum of 1230px by 600px is recommended for retina display devices.', 'tims' ),
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
					[
						'key'               => 'field_5b2fd67604455',
						'label'             => __( 'Default Meta Image', 'tims' ),
						'name'              => 'tims_meta_default_image',
						'type'              => 'image',
						'instructions'      => __( 'Will be used as a fallback for posts without a featured image and used for archive pages. A minimum of 1230px by 600px is recommended for retina display devices.', 'tims' ),
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
					[
						'key'               => 'field_5bdb2fc18a66e',
						'label'             => __( 'Theme Options', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'tims' ),
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
						'key'               => 'field_5bdca15e2d2e3',
						'label'             => __( 'Showcase Heading', 'tims' ),
						'name'              => 'tims_showcase_heading',
						'type'              => 'text',
						'instructions'      => __( 'The heading of the showcase, used on a showcase page or on the showcase section of the front page when the showcase page template is used.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => __( 'Project Showcase', 'tims' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5bdc9db7bc35f',
						'label'             => __( 'Showcase Number', 'tims' ),
						'name'              => 'tims_showcase_number',
						'type'              => 'button_group',
						'instructions'      => __( 'Select the number of projects to be presented in the showcase.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							6  => __( 'Six', 'tims' ),
							12 => __( 'Twelve', 'tims' ),
						],
						'allow_null'        => 0,
						'default_value'     => 12,
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5be1ad28ff352',
						'label'             => __( 'Showcase Projects', 'tims' ),
						'name'              => 'tims_showcase_projects',
						'type'              => 'repeater',
						'instructions'      => __( '', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'collapsed'         => 'field_5be1adfcff353',
						'min'               => $showcase,
						'max'               => $showcase,
						'layout'            => 'row',
						'button_label'      => __( 'Add Project', 'tims' ),
						'sub_fields'        => [
							[
								'key'               => 'field_5be1adfcff353',
								'label'             => 'Project',
								'name'              => 'tims_showcase_project',
								'type'              => 'post_object',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'post_type'         => [
									0 => 'tims_features',
									1 => 'tims_commercials',
								],
								'taxonomy'          => '',
								'allow_null'        => 0,
								'multiple'          => 0,
								'return_format'     => 'id',
								'ui'                => 1,
							],
						],
					],
					[
						'key'               => 'field_5bdb2fd78a66f',
						'label'             => __( 'Dark Mode', 'tims' ),
						'name'              => 'tims_dark_mode',
						'type'              => 'true_false',
						'instructions'      => __( '', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Put the theme into dark mode.', 'tims' ),
						'default_value'     => 0,
						'ui'                => 1,
						'ui_on_text'        => __( 'On', 'tims' ),
						'ui_off_text'       => __( 'Off', 'tims' ),
					],
				],
				'location' => [
					[
						[
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => TIMS_ADMIN_SLUG . '-settings',
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
				'description'           => '',
			 ] );

		endif;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function tims_settings_fields_acf() {

	return Settings_Fields_ACF::instance();

}

// Run an instance of the class.
tims_settings_fields_acf();