<?php
/**
 * Instructions page site settings output.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    Tim_Suhrstedt
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Change language here if anything relevant changes.
 */

namespace TimS_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h2><?php _e( 'Settings Overview', 'tims' ); ?></h2>



<h3><?php _e( 'Clean Up the Admin', 'tims' ); ?></h3>
<ul>
	<li><?php _e( 'Remove dashboard widgets: WordPress news, quick press', 'tims' ); ?></li>
	<li><?php _e( 'Make Menus and Widgets top level menu items', 'tims' ); ?></li>
	<li><?php _e( 'Remove select admin menu items', 'tims' ); ?></li>
	<li><?php _e( 'Remove WordPress logo from admin bar', 'tims' ); ?></li>
	<li><?php _e( 'Remove access to theme and plugin editors', 'tims' ); ?></li>
</ul>
<h3><?php _e( 'Enchance the Admin', 'tims' ); ?></h3>
<ul>
	<li><?php _e( 'Add three admin bar menus', 'tims' ); ?></li>
	<li><?php _e( 'Add custom post types to the At a Glance widget', 'tims' ); ?></li>
	<li><?php _e( 'Custom admin footer message', 'tims' ); ?></li>
</ul>