<?php
/**
 * Settings for the Admin Menu tab on the Site Settings page.
 *
 * @package    Tim_Suhrstedt
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TimS_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings for the Admin Menu tab.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Site_Admin_Menu {

	/**
	 * Holds the values to be used in the fields callbacks.
	 *
	 * @var array
	 */
	private $options;

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

			// Require the class files.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
    public function __construct() {

		// Register settings sections and fields.
		add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Callbacks for the Admin Menu tab.
		require TIMS_PATH . 'admin/partials/field-callbacks/class-admin-menu-callbacks.php';

	}

	/**
	 * Plugin site settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 *
	 * @link  https://codex.wordpress.org/Settings_API
	 */
	public function settings() {

		// Admin menu settings section.
		add_settings_section(
			'tims-site-admin-menu',
			__( 'Admin Menu Settings', 'tims' ),
			[],
			'tims-site-admin-menu'
		);

		// Site Settings page position.
		add_settings_field(
			'tims_site_settings_position',
			__( 'Site Settings Position', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_position' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Make this settings page a top-level link and hide other settings links.', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_site_settings_position'
		);

		// Site Settings page link label.
		add_settings_field(
			'tims_site_settings_link_label',
			__( 'Site Settings Label', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_link_label' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Change the label of the link to this page', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_site_settings_link_label'
		);

		// Site Settings page link icon if set to top level.
		add_settings_field(
			'tims_site_settings_link_icon',
			__( 'Site Settings Icon', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_link_icon' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Enter a Dashicons CSS class for the icon of the link to this page', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_site_settings_link_icon'
		);

		// Site Plugin page position.
		add_settings_field(
			'tims_site_plugin_link_position',
			__( 'Site Plugin Position', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_position' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Make the site-specific plugin admin page a top-level link.', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_site_plugin_link_position'
		);

		// Site Plugin page link label.
		add_settings_field(
			'tims_site_plugin_link_label',
			__( 'Site Plugin Label', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_link_label' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Change the label of the link to the site-specific plugin page', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_site_plugin_link_label'
		);

		// Site Plugin page link icon if set to top level.
		add_settings_field(
			'tims_site_plugin_link_icon',
			__( 'Site Plugin Icon', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_link_icon' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Enter a Dashicons CSS class for the icon of the link to the site-specific plugin page', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_site_plugin_link_icon'
		);

		// Menus link position.
		add_settings_field(
			'tims_menus_position',
			__( 'Menus Position', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'menus_position' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Make Menus a top-level link', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_menus_position'
		);

		// Widgets link position.
		add_settings_field(
			'tims_widgets_position',
			__( 'Widgets Position', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'widgets_position' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Make Widgets a top-level link', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_widgets_position'
		);

		// Hide Appearance link.
		add_settings_field(
			'tims_hide_appearance',
			__( 'Hide Appearance', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_appearance' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Hide the Appearance link in the admin menu', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_hide_appearance'
		);

		// Hide Plugins link.
		add_settings_field(
			'tims_hide_plugins',
			__( 'Hide Plugins', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_plugins' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Hide the Plugins link in the admin menu', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_hide_plugins'
		);

		// Hide Users link.
		add_settings_field(
			'tims_hide_users',
			__( 'Hide Users', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_users' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Hide the Users link in the admin menu', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_hide_users'
		);

		// Hide Tools link.
		add_settings_field(
			'tims_hide_tools',
			__( 'Hide Tools', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_tools' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'Hide the Tools link in the admin menu', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_hide_tools'
		);

		// Show/Hide Links Manager link.
		add_settings_field(
			'tims_hide_links',
			__( 'Restore Links Manager', 'tims' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_links' ],
			'tims-site-admin-menu',
			'tims-site-admin-menu',
			[ esc_html__( 'The old Links Manager is hidden by default in newer WordPress installations', 'tims' ) ]
		);

		register_setting(
			'tims-site-admin-menu',
			'tims_hide_links'
		);

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function tims_settings_fields_site_admin_menu() {

	return Settings_Fields_Site_Admin_Menu::instance();

}

// Run an instance of the class.
tims_settings_fields_site_admin_menu();