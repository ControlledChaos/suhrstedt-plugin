<?php
/**
 * About page media options output.
 *
 * @package    Tim_Suhrstedt
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TimS_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h2><?php _e( 'Media and Upload Options', 'tims' ); ?></h2>
<h3><?php _e( 'Image Sizes', 'tims' ); ?></h3>
<ul>
	<li><?php _e( 'Add option to hard crop the medium and/or large image sizes', 'tims' ); ?></li>
	<li><?php _e( 'Add option to allow SVG uploads to the Media Library', 'tims' ); ?></li>
</ul>
<h3><?php _e( 'Fancybox Presentation', 'tims' ); ?></h3>
<h3><?php _e( 'SVG Uploads', 'tims' ); ?></h3>