<?php
/**
 * AWAL CMB2 metaboxes
 *
 * @package AWAL
 */

class awal_cmb2_metaboxes {
	// Prefix for metabox field ids uses underscore so it won't show
	// up on the WP custom fields dropdown
	private static $prefix = '_awal_';


	/**
	 * Initalize cmb2 fields
	 */
	public function __construct() {
		// Home custom page template
		add_action( 'cmb2_init', array( $this, 'awal_cmb2_home_meta' ) );
		add_action( 'cmb2_init', array( $this, 'awal_cmb2_services_meta' ) );
		add_action( 'cmb2_init', array( $this, 'awal_cmb2_company_meta' ) );
		add_action( 'cmb2_init', array( $this, 'awal_cmb2_faq_meta' ) );
		add_action( 'cmb2_init', array( $this, 'awal_cmb2_faq_topic_meta' ) );
	}

	///////////////////////
	// Home Page Meta Fields
	///////////////////////


	public static function awal_cmb2_home_meta() {
		
		/////////////////////// Set up meta box
		$awal_home_box = new_cmb2_box( array(
			'id'            => 'awal_home_metabox',
			'title'         => __( 'Home', 'awal' ),
			'object_types'  => array( 'page' ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'show_on'       => array(
				'key' => 'page-template', 
				'value' => 'templates/page-homepage.php',
			),
		) );

		/////////////////////// Meta boxes

		$awal_home_box->add_field( array(
			'name'       => __( 'Purple Section', 'awal' ),
			'id'         => self::$prefix . 'home_purple_section',
			'type'       => 'title',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Heading', 'awal' ),
			'id'         => self::$prefix . 'home_purple_heading',
			'type'       => 'text',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Sub-Heading', 'awal' ),
			'id'         => self::$prefix . 'home_purple_subheading',
			'type'       => 'wysiwyg',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Green Section', 'awal' ),
			'id'         => self::$prefix . 'home_green_section',
			'type'       => 'title',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Grid Title - Yellow Text', 'awal' ),
			'id'         => self::$prefix . 'home_green_grid_title_one',
			'type'       => 'text',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Grid Title - White Text', 'awal' ),
			'id'         => self::$prefix . 'home_green_grid_title_two',
			'type'       => 'text',
		) );

		// Grid Repeater
		$grid_repeater = $awal_home_box->add_field( 
			array(
				'id'          => self::$prefix . 'home_green_grid_repeater',
				'type'        => 'group',
				'options'     => array(
					'group_title'   => __( 'Grid Item {#}', 'awal' ), // since version 1.1.4, {#} gets replaced by row number
					'add_button'    => __( 'Add Another Grid Item', 'awal' ),
					'remove_button' => __( 'Remove Grid Item', 'awal' ),
				),
			)
		);

			// Slide - Image
			$awal_home_box->add_group_field( $grid_repeater, array(
				'name' => 'Grid Item Icon',
				'desc' => 'Upload an icon here',
				'id'   => self::$prefix . 'grid_green_repeater_icon',
				'type' => 'file',
			) );

			// Slide - Heading
			$awal_home_box->add_group_field( $grid_repeater, array(
				'name' => 'Grid Item Heading',
				'desc' => 'Add text for grid heading here.',
				'id'   => self::$prefix . 'grid_green_repeater_heading',
				'type' => 'text',
			) );

			// Slide - Copy
			$awal_home_box->add_group_field( $grid_repeater, array(
				'name' => 'Grid Item Copy',
				'desc' => 'Add copy text for grid heading here.',
				'id'   => self::$prefix . 'grid_green_repeater_copy',
				'type' => 'textarea',
			) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Sub Section Heading', 'awal' ),
			'id'         => self::$prefix . 'home_green_subsection_heading',
			'type'       => 'wysiwyg',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Sub Section Sub Heading', 'awal' ),
			'id'         => self::$prefix . 'home_green_subsection_subheading',
			'type'       => 'textarea',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Sub Section Copy', 'awal' ),
			'id'         => self::$prefix . 'home_green_subsection_copy',
			'type'       => 'textarea',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Call to Action - Heading', 'awal' ),
			'id'         => self::$prefix . 'home_green_cta_heading',
			'type'       => 'text',
		) );	
		
		$awal_home_box->add_field( array(
			'name'       => __( 'Call to Action - Button Text', 'awal' ),
			'id'         => self::$prefix . 'home_green_cta_button_text',
			'type'       => 'text',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Call to Action - Button Link', 'awal' ),
			'id'         => self::$prefix . 'home_green_cta_button_link',
			'type'       => 'text',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Blue Section', 'awal' ),
			'id'         => self::$prefix . 'home_blue_section',
			'type'       => 'title',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Heading', 'awal' ),
			'id'         => self::$prefix . 'home_blue_heading',
			'type'       => 'text',
		) );

		$awal_home_box->add_field( array(
			'name'       => __( 'Spotify Embed URL', 'awal' ),
			'id'         => self::$prefix . 'home_blue_spotify_url',
			'desc' 		 => 'For example: https://embed.spotify.com?uri=spotify:user:1239124045:playlist:26Zk7UOiy19JuNx8UIrzxz Something to note, when coping the embed code straight from Spotify make sure to delete any iframe tags and include only the embed url. Also, the clipboard will often change the colons in the url to "%3A" make sure to replace those with colons per the example.',
			'type'       => 'text',
		) );

		// $awal_home_box->add_field( array(
		// 	'name'       => __( 'Apple Music Embed URL', 'awal' ),
		// 	'id'         => self::$prefix . 'home_blue_apple_url',
		// 	'type'       => 'text',
		// ) );

		$awal_home_box->add_field( array(
			'name'       => __( 'YouTube Embed URL', 'awal' ),
			'id'         => self::$prefix . 'home_blue_youtube_url',
			'desc' 		 => 'For example: https://www.youtube.com/embed/videoseries?list=PLprZ2JkDPWCMFffM9cTi0ZbxciE-a3tyY',
			'type'       => 'text',
		) );
	}


	///////////////////////
	// Services Page Meta Fields
	///////////////////////

	public static function awal_cmb2_services_meta() {

	/////////////////////// Set up meta box
		$awal_services_box = new_cmb2_box( array(
			'id'            => 'awal_services_metabox',
			'title'         => __( 'Services', 'awal' ),
			'object_types'  => array( 'page' ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'show_on'       => array(
				'key' => 'page-template', 
				'value' => 'templates/page-services.php',
			),
		) );

		/////////////////////// Meta boxes

		$awal_services_box->add_field( array(
			'name'       => __( 'Hero Section', 'awal' ),
			'id'         => self::$prefix . 'services_hero_section',
			'type'       => 'title',
		) );

		$awal_services_box->add_field( array(
			'name'       => __( 'Line One - Yellow Text', 'awal' ),
			'id'         => self::$prefix . 'services_hero_line_one',
			'type'       => 'text',
		) );  

		$awal_services_box->add_field( array(
			'name'       => __( 'Line Two - White Text', 'awal' ),
			'id'         => self::$prefix . 'services_hero_line_two',
			'type'       => 'text',
		) );

		$awal_services_box->add_field( array(
			'name'       => __( 'First Section (two column layout with images - used once)', 'awal' ),
			'id'         => self::$prefix . 'services_first_section',
			'type'       => 'title',
		) );

		$awal_services_box->add_field( array(
			'name'       => __( 'First Section Icon', 'awal' ),
			'id'         => self::$prefix . 'services_first_icon',
			'type'       => 'file',
		) );

		$awal_services_box->add_field( array(
			'name'       => __( 'First Section Title', 'awal' ),
			'id'         => self::$prefix . 'services_first_title',
			'type'       => 'text',
		) );

		$awal_services_box->add_field( array(
			'name'       => __( 'First Section Subheading', 'awal' ),
			'id'         => self::$prefix . 'services_first_subheading',
			'type'       => 'textarea',
		) );

		$awal_services_box->add_field( array(
			'name'       => __( 'First Section Copy', 'awal' ),
			'id'         => self::$prefix . 'services_first_copy',
			'type'       => 'textarea',
		) );

		$awal_services_box->add_field( array(
			'name' => 'First Section - Grid of Icons',
			'desc' => 'Upload icons here',
			'id'   => self::$prefix . 'services_first_icons',
			'type' => 'file_list',
		) );

		$awal_services_box->add_field( array(
			'name' => 'First Section - Popover Company - Column One',
			'desc' => 'Add Companies for Column One Here',
			'id'   => self::$prefix . 'services_first_popover_company_one',
			'type' => 'wysiwyg',
		) );

		$awal_services_box->add_field( array(
			'name' => 'First Section - Popover Company - Column Two',
			'desc' => 'Add Companies for Column Two Here',
			'id'   => self::$prefix . 'services_first_popover_company_two',
			'type' => 'wysiwyg',
		) );	

		$awal_services_box->add_field( array(
			'name' => 'First Section - Popover Company - Column Three',
			'desc' => 'Add Companies for Column Three Here',
			'id'   => self::$prefix . 'services_first_popover_company_three',
			'type' => 'wysiwyg',
		) );	

		$awal_services_box->add_field( array(
			'name' => 'First Section - Popover Company - Column Four',
			'desc' => 'Add Companies for Column Four Here',
			'id'   => self::$prefix . 'services_first_popover_company_four',
			'type' => 'wysiwyg',
		) );

		$awal_services_box->add_field( array(
			'name' => 'First Section - Popover Company - Column Five',
			'desc' => 'Add Companies for Column Five Here',
			'id'   => self::$prefix . 'services_first_popover_company_five',
			'type' => 'wysiwyg',
		) );	




		$awal_services_box->add_field( array(
			'name'       => __( 'Internal Section Repeater (commonly used two column layout - used repeatedly)', 'awal' ),
			'id'         => self::$prefix . 'services_internal_section_repeater',
			'type'       => 'title',
		) ); 


		// Internal Section Repeater
		$internal_section_repeater = $awal_services_box->add_field( 
			array(
				'id'          => self::$prefix . 'services_internal_section_repeater',
				'type'        => 'group',
				'options'     => array(
					'group_title'   => __( 'Internal Section {#}', 'awal' ), // since version 1.1.4, {#} gets replaced by row number
					'add_button'    => __( 'Add Another Internal Section', 'awal' ),
					'remove_button' => __( 'Remove Internal Section', 'awal' ),
				),
			)
		);

			$awal_services_box->add_group_field( $internal_section_repeater, array(
				'name' => 'Internal Section - Icon',
				'desc' => 'Upload an icon here',
				'id'   => self::$prefix . 'services_internal_icon',
				'type' => 'file',
			) );

			$awal_services_box->add_group_field( $internal_section_repeater, array(
				'name' => 'Internal Section - Title',
				'desc' => 'Add Internal Section Title Here',
				'id'   => self::$prefix . 'services_internal_title',
				'type' => 'text',
			) );

			$awal_services_box->add_group_field( $internal_section_repeater, array(
				'name' => 'Internal Section - Sub Heading',
				'id'   => self::$prefix . 'services_internal_subheading',
				'type' => 'textarea_small',
			) );

			$awal_services_box->add_group_field( $internal_section_repeater, array(
				'name' => 'Internal Section - Copy',
				'id'   => self::$prefix . 'services_internal_copy',
				'type' => 'textarea',
			) );


		$awal_services_box->add_field( array(
			'name'       => __( 'Last Section (one column layout - used once)', 'awal' ),
			'id'         => self::$prefix . 'services_last_section',
			'type'       => 'title',
		) ); 

		$awal_services_box->add_field( array(
			'name'       => __( 'Last Section Icon', 'awal' ),
			'id'         => self::$prefix . 'services_last_icon',
			'type'       => 'file',
		) );

		$awal_services_box->add_field( array(
			'name'       => __( 'Last Section Title', 'awal' ),
			'id'         => self::$prefix . 'services_last_title',
			'type'       => 'text',
		) );

		$awal_services_box->add_field( array(
			'name'       => __( 'Last Section Subheading', 'awal' ),
			'id'         => self::$prefix . 'services_last_subheading',
			'type'       => 'textarea',
		) );
	}

	///////////////////////
	// Company Page Meta Fields
	///////////////////////


	public static function awal_cmb2_company_meta() {
		
		/////////////////////// Set up meta box
		$awal_company_box = new_cmb2_box( array(
			'id'            => 'awal_company_metabox',
			'title'         => __( 'Company', 'awal' ),
			'object_types'  => array( 'page' ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'show_on'       => array(
				'key' => 'page-template', 
				'value' => 'templates/page-company.php',
			),
		) );

		/////////////////////// Meta boxes

		$awal_company_box->add_field( array(
			'name'       => __( 'Company Hero Section', 'awal' ),
			'id'         => self::$prefix . 'company_hero_section',
			'type'       => 'title',
		) );

		$awal_company_box->add_field( array(
			'name'       => __( 'Hero Section Text', 'awal' ),
			'id'         => self::$prefix . 'company_hero_text',
			'type'       => 'text',
		) );

		$awal_company_box->add_field( array(
			'name'       => __( 'Company Sub Hero Section - Two Columns', 'awal' ),
			'id'         => self::$prefix . 'company_sub_hero_section',
			'type'       => 'title',
		) );

		$awal_company_box->add_field( array(
			'name'       => __( 'Company Sub Hero Bold Copy', 'awal' ),
			'id'         => self::$prefix . 'company_sub_hero_bold',
			'type'       => 'textarea_small',
		) );

		$awal_company_box->add_field( array(
			'name'       => __( 'Company Sub Hero Copy', 'awal' ),
			'id'         => self::$prefix . 'company_sub_hero_copy',
			'type'       => 'textarea',
		) );

		$awal_company_box->add_field( array(
			'name'       => __( 'Company Contact Section', 'awal' ),
			'id'         => self::$prefix . 'company_contact_section',
			'type'       => 'title',
		) );

		$awal_company_box->add_field( array(
			'name'       => __( 'Company Contact Section Title', 'awal' ),
			'id'         => self::$prefix . 'company_contact_title',
			'type'       => 'text',
		) );

		// Company Contact Repeater
		$company_contact_repeater = $awal_company_box->add_field( 
			array(
				'id'          => self::$prefix . 'company_contact_repeater',
				'type'        => 'group',
				'options'     => array(
					'group_title'   => __( 'Contact Email {#}', 'awal' ), // since version 1.1.4, {#} gets replaced by row number
					'add_button'    => __( 'Add Another Contact Email', 'awal' ),
					'remove_button' => __( 'Remove Contact Email', 'awal' ),
				),
			)
		);

			$awal_company_box->add_group_field( $company_contact_repeater, array(
				'name' => 'Company Contact Email Title',
				'id'   => self::$prefix . 'company_contact_email_title',
				'type' => 'text',
			) );

			$awal_company_box->add_group_field( $company_contact_repeater, array(
				'name' => 'Company Contact Email Address',
				'id'   => self::$prefix . 'company_contact_email_address',
				'type' => 'text',
			) );


		$awal_company_box->add_field( array(
			'name'       => __( 'Company Offices Section', 'awal' ),
			'id'         => self::$prefix . 'company_offices_section',
			'type'       => 'title',
		) );

		$awal_company_box->add_field( array(
			'name'       => __( 'Company Offices Section Title', 'awal' ),
			'id'         => self::$prefix . 'company_offices_title',
			'type'       => 'text',
		) );

		// Company Offices Repeater
		$company_offices_repeater = $awal_company_box->add_field( 
			array(
				'id'          => self::$prefix . 'company_offices_repeater',
				'type'        => 'group',
				'options'     => array(
					'group_title'   => __( 'Office {#}', 'awal' ), // since version 1.1.4, {#} gets replaced by row number
					'add_button'    => __( 'Add Another Office', 'awal' ),
					'remove_button' => __( 'Remove Office', 'awal' ),
				),
			)
		);

			$awal_company_box->add_group_field( $company_offices_repeater, array(
				'name' => 'Company Offices City',
				'id'   => self::$prefix . 'company_offices_city',
				'type' => 'text',
			) );

			$awal_company_box->add_group_field( $company_offices_repeater, array(
				'name' => 'Company Offices Street Address Line 1',
				'id'   => self::$prefix . 'company_offices_address_one',
				'type' => 'text',
			) );

			$awal_company_box->add_group_field( $company_offices_repeater, array(
				'name' => 'Company Offices Street Address Line 2',
				'id'   => self::$prefix . 'company_offices_address_two',
				'type' => 'text',
			) );

			$awal_company_box->add_group_field( $company_offices_repeater, array(
				'name' => 'Company Offices City, State, and Zip Code',
				'id'   => self::$prefix . 'company_offices_city_state_zip',
				'type' => 'text',
			) );

			$awal_company_box->add_group_field( $company_offices_repeater, array(
				'name' => 'Company Offices Country',
				'id'   => self::$prefix . 'company_offices_country',
				'type' => 'text',
			) );

			$awal_company_box->add_group_field( $company_offices_repeater, array(
				'name' => 'Company Offices Phone Number',
				'desc' => 'ex. +1 (404) 954 6600',
				'id'   => self::$prefix . 'company_offices_phone',
				'type' => 'text',
			) );

			$awal_company_box->add_group_field( $company_offices_repeater, array(
				'name' => 'Company Offices Fax Number',
				'desc' => 'ex. +1 (404) 954 6619',
				'id'   => self::$prefix . 'company_offices_fax',
				'type' => 'text',
			) );

		$awal_company_box->add_field( array(
			'name'       => __( 'Company Careers Section', 'awal' ),
			'id'         => self::$prefix . 'company_careers_section',
			'type'       => 'title',
		) );

		$awal_company_box->add_field( array(
			'name'       => __( 'Company Careers Section Title', 'awal' ),
			'id'         => self::$prefix . 'company_careers_title',
			'type'       => 'text',
		) );

		// Company Careers Repeater
		$company_careers_repeater = $awal_company_box->add_field( 
			array(
				'id'          => self::$prefix . 'company_careers_repeater',
				'type'        => 'group',
				'options'     => array(
					'group_title'   => __( 'Career {#}', 'awal' ), // since version 1.1.4, {#} gets replaced by row number
					'add_button'    => __( 'Add Another Career', 'awal' ),
					'remove_button' => __( 'Remove Career', 'awal' ),
				),
			)
		);

			$awal_company_box->add_group_field( $company_careers_repeater, array(
				'name' => 'Company Careers Position',
				'id'   => self::$prefix . 'company_careers_position',
				'type' => 'text',
			) );

			$awal_company_box->add_group_field( $company_careers_repeater, array(
				'name' => 'Company Careers Location',
				'id'   => self::$prefix . 'company_careers_location',
				'type' => 'text',
			) );	
	}


	///////////////////////
	// FAQ Page Meta Fields
	///////////////////////


	public static function awal_cmb2_faq_meta() {
		
		/////////////////////// Set up meta box
		$awal_faq_box = new_cmb2_box( array(
			'id'            => 'awal_faq_metabox',
			'title'         => __( 'FAQ', 'awal' ),
			'object_types'  => array( 'page' ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'show_on'       => array(
				'key' => 'page-template', 
				'value' => 'templates/page-faq.php',
			),
		) );

		/////////////////////// Meta boxes

		$awal_faq_box->add_field( array(
			'name'       => __( 'Additional FAQ Information', 'awal' ),
			'id'         => self::$prefix . 'faq_add_info',
			'type'       => 'textarea',
		) );
	}	


	///////////////////////
	// FAQ Topic Meta Fields
	///////////////////////


	public static function awal_cmb2_faq_topic_meta() {

		$awal_faq_topic_box = new_cmb2_box( array(
			'id'            => 'faq_topic_metabox',
			'title'         => __( 'FAQ Topic Questions and Answers', 'dcap' ),
			'object_types'  => array( 'post', 'faqs' ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
		) );

		// FAQ Repeater
		$faq_qanda_repeater = $awal_faq_topic_box->add_field( 
			array(
				'id'          => self::$prefix . 'faq_qanda_repeater',
				'type'        => 'group',
				'options'     => array(
					'group_title'   => __( 'Question and Answer {#}', 'awal' ), // since version 1.1.4, {#} gets replaced by row number
					'add_button'    => __( 'Add Another Question and Answer', 'awal' ),
					'remove_button' => __( 'Remove Question and Answer', 'awal' ),
				),
			)
		);

			$awal_faq_topic_box->add_group_field( $faq_qanda_repeater, array(
				'name' => 'Question',
				'id'   => self::$prefix . 'faq_repeater_question',
				'type' => 'textarea',
			) );

			$awal_faq_topic_box->add_group_field( $faq_qanda_repeater, array(
				'name' => 'Answer',
				'id'   => self::$prefix . 'faq_repeater_answer',
				'type' => 'textarea',
			) );			
	}
}

new AWAL_cmb2_metaboxes;

