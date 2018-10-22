<?php

/**
 * Suhrstedt welcome panel.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    tims
 * @subpackage tims/admin
 */

namespace Suhrstedt;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
$gallery_page = get_page_by_path( 'gallery' );
$contact_page = get_page_by_path( 'contact' );
if ( 'gallery' == $gallery_page ) {
    $gallery_id = $gallery_page->ID;
} else {
    $gallery_id = '';
}
$contact_id   = $contact_page->ID; ?>

<div class="tims-dashboard-summary">
    <?php wp_dashboard_right_now(); ?>
</div>
<div class="tims-dashboard-post-managment">
    <header class="tims-dashboard-section-header">
        <h3><?php _e( 'Manage Your Projects', 'tims' ); ?></h3>
    </header>
    <ul class="tims-dashboard-post-type-actions">
        <li>
            <h4><?php _e( 'Film + TV', 'tims' ); ?></h4>
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
            <h4><?php _e( 'Music Videos', 'tims' ); ?></h4>
            <div class="tims-dashboard-post-type-actions-icon videos-icon"><span class="dashicons dashicons-format-audio"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=tims_videos' ); ?>"><?php _e( 'Add New', 'tims' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=tims_videos' ); ?>"><?php _e( 'View List', 'tims' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Presentations', 'tims' ); ?></h4>
            <div class="tims-dashboard-post-type-actions-icon presentations-icon"><span class="dashicons dashicons-desktop"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=tims_presentations' ); ?>"><?php _e( 'Add New', 'tims' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=tims_presentations' ); ?>"><?php _e( 'View List', 'tims' ); ?></a>
            </p>
        </li>
    </ul>
</div>
<div class="tims-dashboard-content-managment">
    <header class="tims-dashboard-section-header">
        <h3><?php _e( 'Manage Your Content', 'tims' ); ?></h3>
    </header>
    <ul class="tims-dashboard-content-actions">
        <li>
            <h4><?php _e( 'Front Page', 'tims' ); ?></h4>
            <div class="tims-dashboard-content-actions-icon front-icon"><span class="dashicons dashicons-admin-home"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . get_option( 'page_on_front' ) . '&action=edit' ); ?>"><?php _e( 'Manage Slides', 'tims' ); ?></a>
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
            <h4><?php _e( 'Snippets', 'tims' ); ?></h4>
            <div class="tims-dashboard-content-actions-icon snippets-icon"><span class="dashicons dashicons-art"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=tims_snippets' ); ?>"><?php _e( 'Add New', 'tims' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=tims_snippets' ); ?>"><?php _e( 'View List', 'tims' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Gallery', 'tims' ); ?></h4>
            <div class="tims-dashboard-content-actions-icon gallery-icon"><span class="dashicons dashicons-format-gallery"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . $gallery_id . '&action=edit' ); ?>"><?php _e( 'Manage Images', 'tims' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Contact', 'tims' ); ?></h4>
            <div class="tims-dashboard-content-actions-icon contact-icon"><span class="dashicons dashicons-email"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . $contact_id . '&action=edit' ); ?>"><?php _e( 'Manage Info', 'tims' ); ?></a>
            </p>
        </li>
    </ul>
</div>