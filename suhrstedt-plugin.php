<?php
/**
 * Tim Suhrstedt Website plugin
 *
 * @package     Tim_Suhrstedt
 * @version     1.0.0
 * @author      Greg Sweet <greg@ccdzine.com>
 * @copyright   Copyright © 2018, Greg Sweet
 * @link        https://github.com/ControlledChaos/suhrstedt-plugin
 * @license     GPL-3.0+ http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Plugin Name:  Tim Suhrstedt Website
 * Plugin URI:   https://github.com/ControlledChaos/suhrstedt-plugin
 * Description:  Functionality required for the Tim Suhrstedt portfolio site.
 * Version:      1.0.0
 * Author:       Controlled Chaos Design
 * Author URI:   http://ccdzine.com/
 * License:      GPL-3.0+
 * License URI:  https://www.gnu.org/licenses/gpl.txt
 * Text Domain:  tims
 * Domain Path:  /languages
 * Tested up to: 4.9.8
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class.
 *
 * Defines constants, gets the initialization class file
 * plus the activation and deactivation classes.
 *
 * @since  1.0.0
 * @access public
 */
final class Tim_Suhrstedt {

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

			// Define plugin constants.
			$instance->constants();

			// Require the core plugin class files.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void Constructor method is empty.
	 */
	private function __construct() {}

	/**
	 * Throw error on object clone.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function __clone() {

		// Cloning instances of the class is forbidden.
		_doing_it_wrong( __FUNCTION__, __( 'This is not allowed.', 'tims' ), '1.0.0' );

	}

	/**
	 * Disable unserializing of the class.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function __wakeup() {

		// Unserializing instances of the class is forbidden.
		_doing_it_wrong( __FUNCTION__, __( 'This is not allowed.', 'tims' ), '1.0.0' );

	}

	/**
	 * Define plugin constants.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function constants() {

		/**
		 * Keeping the version at 1.0.0 as this is a starter plugin but
		 * you may want to start counting as you develop for your use case.
		 *
		 * @since  1.0.0
		 * @return string Returns the latest plugin version.
		 */
		if ( ! defined( 'TIMS_VERSION' ) ) {
			define( 'TIMS_VERSION', '1.0.0' );
		}

		/**
		 * Plugin folder path.
		 *
		 * @since  1.0.0
		 * @return string Returns the filesystem directory path (with trailing slash)
		 *                for the plugin __FILE__ passed in.
		 */
		if ( ! defined( 'TIMS_PATH' ) ) {
			define( 'TIMS_PATH', plugin_dir_path( __FILE__ ) );
		}

		/**
		 * Plugin folder URL.
		 *
		 * @since  1.0.0
		 * @return string Returns the URL directory path (with trailing slash)
		 *                for the plugin __FILE__ passed in.
		 */
		if ( ! defined( 'TIMS_URL' ) ) {
			define( 'TIMS_URL', plugin_dir_url( __FILE__ ) );
		}

		/**
		 * Universal slug partial for admin pages.
		 *
		 * This URL slug is used for various plugin admin & settings pages.
		 *
		 * The prefix will change in your search & replace in renaming the plugin.
		 * Change the second part of the define(), here as 'tims',
		 * to your preferred page slug.
		 *
		 * @since  1.0.0
		 * @return string Returns the URL slug of the admin pages.
		 */
		if ( ! defined( 'TIMS_ADMIN_SLUG' ) ) {
			define( 'TIMS_ADMIN_SLUG', 'tims' );
		}

		/**
		 * Define default meta image path.
		 *
		 * Change the path and file name to suit your needs.
		 *
		 * @since  1.0.0
		 * @return string Returns the URL of the image.
		 */
		if ( ! defined( 'TIMS_DEFAULT_META_IMAGE' ) ) {
			define(
				'TIMS_DEFAULT_META_IMAGE',
				plugins_url( 'frontend/assets/images/default-meta-image.jpg', __FILE__ )
			);
		}

	}

	/**
	 * Require the core plugin class files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void Gets the file which contains the core plugin class.
	 */
	private function dependencies() {

		// The hub of all other dependency files.
		require_once TIMS_PATH . 'includes/class-init.php';

		// Include the activation class.
		require_once TIMS_PATH . 'includes/class-activate.php';

		// Include the deactivation class.
		require_once TIMS_PATH . 'includes/class-deactivate.php';

	}

}
// End core plugin class.

/**
 * Put an instance of the plugin class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns the instance of the `Tim_Suhrstedt` class.
 */
function tims_plugin() {

	return Tim_Suhrstedt::instance();

}

// Begin plugin functionality.
tims_plugin();

/**
 * Register the activaction & deactivation hooks.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
register_activation_hook( __FILE__, '\tims_activate_plugin' );
register_deactivation_hook( __FILE__, '\tims_deactivate_plugin' );

/**
 * The code that runs during plugin activation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function tims_activate_plugin() {

	// Run the activation class.
	tims_activate();

}

/**
 * The code that runs during plugin deactivation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function tims_deactivate_plugin() {

	// Run the deactivation class.
	tims_deactivate();

}

/**
 * Add a link to the plugin's about page on the plugins page.
 *
 * The about page in its original form is intended to be read by
 * developers for getting familiar with the plugin, so it is
 * included in the admin menu under plugins.
 *
 * If you would like to link the page elsewhere as you make it your own then
 * do so in admin/class-admin-pages.php, in the about_plugin method.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @param  array $links Default plugin links on the 'Plugins' admin page.
 * @since  1.0.0
 * @access public
 * @return mixed[] Returns an HTML string for the about page link.
 *                 Returns an array of the about link with the default plugin links.
 * @link   https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
 */
function tims_about_link( $links ) {

	/**
	 * Site about page link depends on the admin menu setting.
	 *
	 * @since  1.0.0
	 * @return string returns the URL of the page with parent or not.
	 */

	if ( is_admin() ) {

		// If Advanced Custom Fields is active.
		if ( class_exists( 'acf_pro' ) || ( class_exists( 'acf' ) && class_exists( 'acf_options_page' ) ) ) {

			// Get the field.
			$acf_position = get_field( 'tims_site_plugin_link_position', 'option' );

			// Return true if the field is set to `top`.
			if ( 'top' == $acf_position ) {
				$position = true;

			// Otherwise return `false`.
			} else {
				$position = false;
			}

		// If ACF is not active, get the field from the WordPress options page.
		} else {

			// Get the field.
			$position = get_option( 'tims_site_plugin_link_position' );
		}

		if ( true == $position ) {
			$url = admin_url( 'index.php?page=' . TIMS_ADMIN_SLUG . '-settings' );
		} else {
			$url = admin_url( 'admin.php?page=' . TIMS_ADMIN_SLUG . '-settings' );
		}

		// Create new settings link array as a variable.
		$about_page = [
			sprintf(
				'<a href="%1s" class="' . TIMS_ADMIN_SLUG . '-page-link">%2s</a>',
				admin_url( 'plugins.php?page=' . TIMS_ADMIN_SLUG . '-page' ),
				esc_attr( 'Documentation', 'tims' )
			),
		];

		// Merge the new settings array with the default array.
		return array_merge( $about_page, $links );

	}

}
// Filter the default settings links with new array.
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'tims_about_link' );

/**
 * Add links to the plugin settings pages on the plugins page.
 *
 * Change the links to those which fill your needs.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @param  array  $links Default plugin links on the 'Plugins' admin page.
 * @param  object $file Reference the root plugin file with header.
 * @since  1.0.0
 * @return mixed[] Returns HTML strings for the settings pages link.
 *                 Returns an array of custom links with the default plugin links.
 * @link   https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
 */
function tims_settings_links( $links, $file ) {

	if ( is_admin() ) {

		/**
		 * Site settings page link depends on the admin menu setting.
		 *
		 * @since  1.0.0
		 * @return string returns the URL of the page with parent or not.
		 */

		// If Advanced Custom Fields is active.
		if ( class_exists( 'acf_pro' ) || ( class_exists( 'acf' ) && class_exists( 'acf_options_page' ) ) ) {

			// Get the field.
			$acf_position = get_field( 'tims_settings_link_position', 'option' );

			// Return true if the field is set to `top`.
			if ( 'top' == $acf_position ) {
				$position = true;

			// Otherwise return `false`.
			} else {
				$position = false;
			}

		// If ACF is not active, get the field from the WordPress options page.
		} else {

			// Get the field.
			$position = get_option( 'tims_site_settings_position' );
		}

		if ( $position || true == $position ) {
			$url = admin_url( 'admin.php?page=' . TIMS_ADMIN_SLUG . '-settings' );
		} else {
			$url = admin_url( 'index.php?page=' . TIMS_ADMIN_SLUG . '-settings' );
		}

		if ( $file == plugin_basename( __FILE__ ) ) {

			// Add links to settings pages.
			$links[] = sprintf(
				'<a href="%1s" class="' . TIMS_ADMIN_SLUG . '-settings-link">%2s</a>',
				$url,
				esc_attr( 'Site Settings', 'tims' )
			);
			$links[] = sprintf(
				'<a href="%1s" class="' . TIMS_ADMIN_SLUG . '-scripts-link">%2s</a>',
				admin_url( 'options-general.php?page=' . TIMS_ADMIN_SLUG . '-scripts' ),
				esc_attr( 'Script Options', 'tims' )
			);

		}

		// Return the full array of links.
		return $links;

	}

}
add_filter( 'plugin_row_meta', 'tims_settings_links', 10, 2 );