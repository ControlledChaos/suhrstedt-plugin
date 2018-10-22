<?php
/**
 * Basic contact page fields.
 *
 * @package WordPress
 * @subpackage tims
 * @since tims 1.0.0
 */

namespace TimS_Plugin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Basic contact page fields.
 */
class Suhrstedt_Contact_Page_Fields {

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

		$page = get_page_by_path( 'contact' );
		$id   = $page->ID;

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( [
				'key'    => 'group_5a537eb8136a1',
				'title'  => __( 'Contact Page Template', 'tims' ),
				'fields' => [
					[
						'key'               => 'field_5a537eb82c58f',
						'label'             => __( 'Info', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5a537eb82f49f',
						'label'             => __( 'General Contact Info', 'tims' ),
						'name'              => 'tims_contact_info',
						'type'              => 'wysiwyg',
						'instructions'      => __( 'Optional.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 1,
					],
					[
						'key'               => 'field_5a537eb8330c1',
						'label'             => __( 'Agencies', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5a74a431f4431',
						'label'             => __( 'Agency', 'tims' ),
						'name'              => 'tims_agency',
						'type'              => 'repeater',
						'instructions'      => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'collapsed'         => 'field_5a74aaebf1331',
						'min'               => 0,
						'max'               => 0,
						'layout'            => 'row',
						'button_label'      => __( 'Add Agency', 'tims' ),
						'sub_fields'        => [
							[
								'key'               => 'field_5a74aaebf1331',
								'label'             => __( 'Agency Name', 'tims' ),
								'name'              => 'tims_agency_name',
								'type'              => 'text',
								'instructions'      => '',
								'required' => 1,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'default_value'     => '',
								'placeholder'       => '',
								'prepend'           => '',
								'append'            => '',
								'maxlength'         => '',
							],
							[
								'key'               => 'field_5a74ab00f1332',
								'label'             => __( 'Agency Logo', 'tims' ),
								'name'              => 'tims_agency_logo',
								'type'              => 'image',
								'instructions'      => __( 'Optional.', 'tims' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'return_format'     => 'url',
								'preview_size'      => 'thumbnail',
								'library'           => 'all',
								'min_width'         => '',
								'min_height'        => '',
								'min_size'          => '',
								'max_width'         => '',
								'max_height'        => '',
								'max_size'          => '',
								'mime_types'        => '',
							],
							[
								'key'               => 'field_5a7bb0685d915',
								'label'             => __( 'Agency Info', 'tims' ),
								'name'              => 'tims_agency_info',
								'type'              => 'wysiwyg',
								'instructions'      => __( 'Optional.', 'tims' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'default_value'     => '',
								'tabs'              => 'all',
								'toolbar'           => 'basic',
								'media_upload'      => 0,
								'delay'             => 1,
							],
							[
								'key'               => 'field_5a537eb8bece6',
								'label'             => __( 'Agents', 'tims' ),
								'name'              => 'tims_agents',
								'type'              => 'repeater',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'collapsed'         => 'field_5a537eb8ec34e',
								'min'               => 0,
								'max'               => 0,
								'layout'            => 'block',
								'button_label'      => __( 'Add Agent', 'tims' ),
								'sub_fields'        => [
									[
										'key'               => 'field_5a537eb8ec34e',
										'label'             => __( 'Name', 'tims' ),
										'name'              => 'tims_agent_name',
										'type'              => 'text',
										'instructions'      => '',
										'required' => 1,
										'conditional_logic' => 0,
										'wrapper'           => [
											'width' => '',
											'class' => '',
											'id'    => '',
										],
										'default_value'     => '',
										'placeholder'       => '',
										'prepend'           => '',
										'append'            => '',
										'maxlength'         => '',
									],
									[
										'key'               => 'field_5a537eb8bb04a',
										'label'             => __( 'Department', 'tims' ),
										'name'              => 'tims_agent_department',
										'type'              => 'text',
										'instructions'      => __( 'Film, TV, Commercial etc.', 'tims' ),
										'required' => 1,
										'conditional_logic' => 0,
										'wrapper'           => [
											'width' => '',
											'class' => '',
											'id'    => '',
										],
										'default_value'     => '',
										'placeholder'       => '',
										'prepend'           => '',
										'append'            => '',
										'maxlength'         => '',
									],
									[
										'key'               => 'field_5a537eb8f3c5e',
										'label'             => __( 'Phone', 'tims' ),
										'name'              => 'tims_agent_phone',
										'type'              => 'text',
										'instructions'      => __( 'Use dashes only to make the number a link on mobile devices.', 'tims' ),
										'required' => 1,
										'conditional_logic' => 0,
										'wrapper'           => [
											'width' => '',
											'class' => '',
											'id'    => '',
										],
										'default_value'     => '',
										'placeholder'       => __( 'Format: 800-555-1212', 'tims' ),
										'prepend'           => '',
										'append'            => '',
										'maxlength'         => '',
									],
									[
										'key'               => 'field_5a537eb9036b8',
										'label'             => __( 'Email', 'tims' ),
										'name'              => 'tims_agent_email',
										'type'              => 'email',
										'instructions'      => '',
										'required' => 1,
										'conditional_logic' => 0,
										'wrapper'           => [
											'width' => '',
											'class' => '',
											'id'    => '',
										],
										'default_value'     => '',
										'placeholder'       => '',
										'prepend'           => '',
										'append'            => '',
									],
								],
							],
						],
					],
					[
						'key'               => 'field_5a537eb83aa4b',
						'label'             => __( 'Resume', 'tims' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5a537eb83e6c4',
						'label'             => __( 'Resume Notice', 'tims' ),
						'name'              => 'tims_resume_notice',
						'type'              => 'textarea',
						'instructions'      => __( 'Optional.', 'tims' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'maxlength'         => '',
						'rows'              => 4,
						'new_lines'         => '',
					],
					[
						'key'               => 'field_5a537eb84236e',
						'label'             => __( 'Resume', 'tims' ),
						'name'              => 'tims_resume_type',
						'type'              => 'button_group',
						'instructions'      => __( 'Select a method to provide a resume.', 'tims' ),
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'file' => __( 'Upload File', 'tims' ),
							'url'  => __( 'Agency Link', 'tims' ),
						],
						'allow_null'        => 0,
						'default_value'     => '',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a537eb845ffe',
						'label'             => __( 'Resume Link', 'tims' ),
						'name'              => 'tims_resume_link',
						'type'              => 'url',
						'instructions'      => __( 'Paste the link to your resume.', 'tims' ),
						'required'          => 1,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a537eb84236e',
									'operator' => '==',
									'value'    => 'url',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
					],
					[
						'key'               => 'field_5a537eb849c4e',
						'label'             => __( 'Resume File', 'tims' ),
						'name'              => 'tims_resume_file',
						'type'              => 'file',
						'instructions'      => __( 'File will be uploaded to the Media Library', 'tims' ),
						'required'          => 1,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a537eb84236e',
									'operator' => '==',
									'value'    => 'file',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'library'           => 'all',
						'min_size'          => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
				],
				'location' => [
				[
					[
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-templates/page-contact.php',
					],
				],
				[
					[
						'param'    => 'page',
						'operator' => '==',
						'value'    => $id,
					],
				],
			],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0  => 'the_content',
					1  => 'custom_fields',
					2  => 'discussion',
					3  => 'comments',
					4  => 'revisions',
					5  => 'slug',
					6  => 'author',
					7  => 'format',
					8  => 'categories',
					9  => 'tags',
					10 => 'send-trackbacks',
				],
				'active'                => 1,
				'description'           => __( 'For the Resume & Contact page, page-info page template.', 'tims' ),
			] );

		endif;

	}

}

$tims_plugin_contact_page_fields = new Suhrstedt_Contact_Page_Fields;