<?php
/**
 * Front page fields.
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
 * Front page fields.
 */
class Suhrstedt_Front_Page_Fields {

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

		// Set up for future development possibilities.

	}

}

$tims_plugin_front_page_fields = new Suhrstedt_Front_Page_Fields;
