<?php
/**
 * Instructions page Vimeo output.
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
<h2><?php _e( 'Vimeo Overview', 'tims' ); ?></h2>

<p><?php _e( 'It is possible to upload videos to your media library here in WordPress but Vimeo is used instead for its speed in delivering the videos to viewers, the high-quality video player, and the web-optimization process applied to the videos that you upload to your Vimeo account.', 'tims' ); ?></p>

<h3><?php _e( 'Video Acquisition', 'tims' ); ?></h3>

<p><?php _e( 'Ideally you will be provided by a project\'s production company with a video file. I this is the case then it will likely be a very large file and you may want to optimize it prior to uploading it, so read the section below. If you have not been provided with a video file then there are ways to get a file from websites that may be hosting it.', 'tims' ); ?></p>
<p><?php _e( 'Typically you can find movie trailers and television promos on IMDb and an YouTube. To download the videos from a website you will need a browser extension which finds the video file and provides a toolbar button or other interface to select the file for download. Use your browser\'s addons/extensions feature to search for "video download".', 'tims' ); ?></p>

<h3><?php _e( 'Video Optimization', 'tims' ); ?></h3>

<p><?php _e( 'When you upload a video to Vimeo they put the file through a process to optimize it for the web. However, the file you have, especially if it has been provided directly by a studio, may be very large. Large video files can take quite a while to upload, depending on your internet connection. So you can save time by optimizing the video prior to uploading it.', 'tims' ); ?></p>
<p><?php echo sprintf(
	'%1s <a href="%2s" target="_blank">%3s</a>',
	esc_html( 'A popular, free and open-source program for optimizing videos is', 'tims' ),
	esc_url( 'https://handbrake.fr/' ),
	'Handbrake'
); ?></p>

<h3><?php _e( 'Vimeo Uploads', 'tims' ); ?></h3>

<p><?php _e( 'To upload a video simply log in to your Vimeo account and click on the "Upload" button at upper left. This will take you to a page with an upload interface. Before clicking or dragging the video, select "Hide this video from Vimeo" from the "Privacy" drop-down box; this will help protect you from copyright notices.', 'tims' ); ?></p>
<p><?php _e( 'Your account has a preset in place that will apply to new uploads automatically. This preset eliminates unwanted overlays in the player, giving it a clean and simple feel. The preset also adds an "outro" image with your name and profession when the video ends.', 'tims' ); ?></p>
<p><?php _e( 'Optional collections are in place to be used as categories, making it easier to locate videos in your account.', 'tims' ); ?></p>

<h3><?php _e( 'Adding a Video to a Project', 'tims' ); ?></h3>

<p><?php _e( 'When adding or editing a project you will see a field to enter a URL for a Vimeo video. Use the only the basic URL for the video, DO NOT use the embed code available from the video settings. The URL should be something like <code>https://vimeo.com/296133509</code>. To obtain the URL you can click on a video in your Vimeo list and copy the URL from your browser\'s address bar, or simply right-click on a video in your Vimeo list and copy the link location.', 'tims' ); ?></p>