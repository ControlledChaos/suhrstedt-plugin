<?php
/**
 * Settings fields for site development.
 *
 * @package    Tim_Suhrstedt
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Add a "Dev Mode", functionality to be determined.
 * @todo       Finish converting the debug plugin to work with a setting.
 */

namespace TimS_Plugin\Plugin_Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for site development.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Dev_Tools {

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

		// Start settings for page.
		add_action( 'admin_init', [ $this, 'dev_settings' ] );

	}

	/**
	 * Settings for the development page.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function dev_settings() {

		/**
		 * Site development.
		 */

		// Site development settings section.
		add_settings_section(
			'tims-site-development-general',
			__( 'General Website Development', 'tims' ),
			[ $this, 'site_development_section_callback' ],
			'tims-site-development-general'
		);

		// Site development settings field.
		add_settings_field(
			'tims_site_development',
			__( 'Debug Mode', 'tims' ),
			[ $this, 'tims_site_development_callback' ],
			'tims-site-development-general',
			'tims-site-development-general',
			[ esc_html__( 'Put the site in Debug Mode via wp-config.', 'tims' ) ]
		);

		// Register the Site development field.
		register_setting(
			'tims-site-development-general',
			'tims_site_development'
		);

		// Live theme test settings field.
		add_settings_field(
			'tims_theme_test',
			__( 'Live Theme Test', 'tims' ),
			[ $this, 'tims_theme_test_callback' ],
			'tims-site-development-general',
			'tims-site-development-general',
			[ esc_html__( 'Find the theme test page under Appearances.', 'tims' ) ]
		);

		// Register the live theme test field.
		register_setting(
			'tims-site-development-general',
			'tims_theme_test'
		);

		// RTL (right to left) test settings field.
		add_settings_field(
			'tims_rtl_test',
			__( 'RTL (Right to Left) Test', 'tims' ),
			[ $this, 'tims_rtl_test_callback' ],
			'tims-site-development-general',
			'tims-site-development-general',
			[ esc_html__( 'Add RTL button to the toolbar to test layout in languages that read right to left.', 'tims' ) ]
		);

		// Register the RTL test field.
		register_setting(
			'tims-site-development-general',
			'tims_rtl_test'
		);

	}

	/**
	 * Site development section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings section array.
	 * @return string Returns the section HTML.
	 */
	public function site_development_section_callback( $args ) {

		$html = sprintf(
			'<p>%1s</p>',
			esc_html__( '', 'tims' )
		);

		echo $html;

	}

	/**
	 * Site development field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function tims_site_development_callback( $args ) {

		$option = get_option( 'tims_site_development' );

		$html   = '<p><input type="checkbox" id="tims_site_development" name="tims_site_development" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= '<label for="tims_site_development"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Live theme test field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function tims_theme_test_callback( $args ) {

		$option = get_option( 'tims_theme_test' );

		$html   = '<p><input type="checkbox" id="tims_theme_test" name="tims_theme_test" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= sprintf(
			'<label for="tims_theme_test">%1s</label></p>',
			$args[0]
		 );

		echo $html;

	}

	/**
	 * RTL test field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function tims_rtl_test_callback( $args ) {

		$option = get_option( 'tims_rtl_test' );

		$html   = '<p><input type="checkbox" id="tims_rtl_test" name="tims_rtl_test" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= sprintf(
			'<label for="tims_rtl_test">%1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a></p>',
			$args[0],
			esc_url( 'https://codex.wordpress.org/Right_to_Left_Language_Support' ),
			__( 'Read more in the WordPress Codex', 'tims' )
		 );

		echo $html;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function tims_settings_fields_dev_tools() {

	return Settings_Fields_Dev_Tools::instance();

}

// Run an instance of the class.
tims_settings_fields_dev_tools();