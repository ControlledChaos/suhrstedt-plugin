<?php
/**
 * Content for the Welcome Panel help tab.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    Tim_Suhrstedt
 * @subpackage Admin\Partials\Help
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Change this content when the custom welcome
 *             panel is ready to use.
 */

namespace TimS_Plugin\Admin\Dashboard\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Welcome Panel', 'tims' ); ?></h3>
<p><?php _e( 'A custom, widgetized welcome panel is coming soon.', 'tims' ); ?></p>
<?php
echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'View options on the', 'tims' ),
	esc_url( 'http://localhost/controlledchaos/wp-admin/index.php?page=' . TIMS_ADMIN_SLUG . '-settings' ),
	__( 'Dashboard Settings', 'tims' ),
	__( 'page.', 'tims' )
); ?>