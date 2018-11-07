<?php
/**
 * Instructions page Vimeo output.
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
<h2><?php _e( 'Vimeo Overview', 'tims' ); ?></h2>

<p><?php _e( 'The WordPress media library is precisely as it sounds: a repository for various types of media that are used on the website. It accepts most images types, except SVG, for security reasons, plus all common audio and video formats. Additionally it can be used to upload documents, such as traditional office formats and PDFs.', 'tims' ); ?></p>
<p><?php _e( 'That being said, the primary functionality of your site is relatively simple and the library is only used for a few cases. Vimeo is used to host and deliver the videos on the site, so there is no need to upload video files to the library, and the placeholder screenshots are also provided by Vimeo. Sometimes the placeholders delivered by Vimeo don\'t play nice with the aspect ratio of their corresponding videos. This is particularly an issue with older videos or those not in an HD (16:9) format. So there is a backup system in place whereby you can upload a high-quality image to the media library and it will be cropped to the correct aspect ratio, and override the Vimeo image.', 'tims' ); ?></p>

<h3><?php _e( 'Image Sizes & Quality', 'tims' ); ?></h3>

<p><?php _e( 'When you upload an image, whether directly to the media library or through the Features and Commercials interface, WordPress will automatically crop them to default dimensions. Your website also has custom image sizes for the 16:9 HD video aspect ratio, for the screenshot images used as placeholders for the videos.', 'tims' ); ?></p>
<p><?php _e( 'There no restrictions on the size of image that you can upload to the media library but there are minimum size requirements for the video placeholder images. Naturally, this does not apply to placeholder images uploaded through Vimeo, but please read the tutorial under the Vimeo tab.', 'tims' ); ?></p>
<p><?php _e( 'The minimum image size requirements for video placeholder images 960 pixels wide by 540 pixels high. This size is smaller than what is ideal to allow flexibility in finding images that you don\'t have to resize before uploading. In practice, try to use a minimum of 1280px X 720px for images that look good on retina screens.', 'tims' ); ?></p>
<p><?php _e( 'Here is an example for clarity: Let\'s say you have an image that happens to be the ideal 1280px wide but it is 800px high, taller than the HD video aspect ratio. WordPress will crop that image to 720px high, as requiered for the video placeholders.', 'tims' ); ?></p>
<h3><?php _e( 'Media Management', 'tims' ); ?></h3>