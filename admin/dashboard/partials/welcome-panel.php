<?php
/**
 * Custom welcome panel output.
 *
 * Provided are several widget areas and hooks for adding content.
 * The `do_action` hooks are named and placed to be similar to the
 * before and after pseudoelements in CSS.
 *
 * @package    Tim_Suhrstedt
 * @subpackage Admin\Dashboard
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TIMS_Plugin\Admin\Dashboard;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get the current user name for the greeting.
$current_user = wp_get_current_user();
$user_name    = $current_user->display_name;

// Add a filterable description.
$about_desc = apply_filters( 'tims_welcome_about', __( 'Following are some handy links to help you keep your portfolio fresh.', 'tims' ) );

$resume_page  = get_page_by_path( 'resume' );
$contact_page = get_page_by_path( 'contact' );

if ( $resume_page ) {
    $resume_link   = admin_url( 'post.php?post=' . $resume_page->ID . '&action=edit' );
} else {
    $resume_link = '';
}

if ( $contact_page ) {
    $contact_link   = admin_url( 'post.php?post=' . $contact_page->ID . '&action=edit' );
} else {
    $contact_link = '';
} ?>
<?php echo sprintf(
	'<h2>%1s %2s.</h2>',
	esc_html__( 'Welcome,', 'tims' ),
	$user_name
); ?>
<p class="about-description"><?php echo $about_desc; ?></p>
<div class="tims-dashboard-summary">
    <?php wp_dashboard_right_now(); ?>
</div>
<div class="tims-dashboard-post-managment">
    <header class="tims-dashboard-section-header">
        <h3><?php _e( 'Manage Your Portfolio', 'tims' ); ?></h3>
    </header>
    <ul class="tims-dashboard-post-type-actions">
        <li>
            <h4><?php _e( 'Features', 'tims' ); ?></h4>
            <div class="tims-dashboard-post-type-actions-icon features-icon"><span class="dashicons dashicons-format-video"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=tims_features' ); ?>"><?php _e( 'Add New', 'tims' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=tims_features' ); ?>"><?php _e( 'View List', 'tims' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Commercials', 'tims' ); ?></h4>
            <div class="tims-dashboard-post-type-actions-icon commercials-icon"><span class="dashicons dashicons-megaphone"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=tims_commercials' ); ?>"><?php _e( 'Add New', 'tims' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=tims_commercials' ); ?>"><?php _e( 'View List', 'tims' ); ?></a>
            </p>
		</li>
		<li>
            <h4><?php _e( 'Media', 'tims' ); ?></h4>
            <div class="tims-dashboard-content-actions-icon front-icon"><span class="dashicons dashicons-format-image"></span></div>
            <p>
                <a href="<?php echo admin_url( 'media-new.php' ); ?>"><?php _e( 'Add New', 'tims' ); ?></a>
                <a href="<?php echo admin_url( 'upload.php' ); ?>"><?php _e( 'Manage', 'tims' ); ?></a>
            </p>
		</li>
		<li>
            <h4><?php _e( 'Contact', 'tims' ); ?></h4>
            <div class="tims-dashboard-content-actions-icon contact-icon"><span class="dashicons dashicons-email"></span></div>
            <p>
                <a href="<?php echo $contact_link; ?>"><?php _e( 'Manage Info', 'tims' ); ?></a>
            </p>
        </li>
    </ul>
</div>