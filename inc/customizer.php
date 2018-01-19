<?php
/**
 * Atlantic Cruising Yachts Theme Customizer
 *
 * @package Atlantic Cruising Yachts
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function atlantic_cruising_yachts_customize_register( $wp_customize ) {
	/*$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';*/
	
	// GENERAL CONTACT INFORMATION
	$wp_customize->add_section(
        'global_information',
        array(
            'title' => 'Global Site Information'
            //'description' => 'This is a settings section.',
            //'priority' => 35,
        )
    );
	$wp_customize->add_setting(
		'setting_main_phone',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_main_phone',
		array(
			'label' => 'Main Phone',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_name',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_name',
		array(
			'label' => 'Location 1 Name',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_address1',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_address1',
		array(
			'label' => 'Location 1 Address 1',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_address2',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_address2',
		array(
			'label' => 'Location 1 Address 2',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_city',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_city',
		array(
			'label' => 'Location 1 City',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_state',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_state',
		array(
			'label' => 'Location 1 State',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_zip',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_zip',
		array(
			'label' => 'Location 1 Zip',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_country',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_country',
		array(
			'label' => 'Location 1 Country',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_phone',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_phone',
		array(
			'label' => 'Location 1 Phone',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	
	
	$wp_customize->add_setting(
		'setting_name_b',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_name_b',
		array(
			'label' => 'Location 2 Name',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_address1_b',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_address1_b',
		array(
			'label' => 'Location 2 Address 1',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_address2_b',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_address2_b',
		array(
			'label' => 'Location 2 Address 2',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_city_b',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_city_b',
		array(
			'label' => 'Location 2 City',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_state_b',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_state_b',
		array(
			'label' => 'Location 2 State',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_zip_b',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_zip_b',
		array(
			'label' => 'Location 2 Zip',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_country_b',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_country_b',
		array(
			'label' => 'Location 2 Country',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_phone_b',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_phone_b',
		array(
			'label' => 'Location 2 Phone',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	
	
	$wp_customize->add_setting(
		'setting_name_c',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_name_c',
		array(
			'label' => 'Location 3 Name',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_address1_c',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_address1_c',
		array(
			'label' => 'Location 3 Address 1',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_address2_c',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_address2_c',
		array(
			'label' => 'Location 3 Address 2',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_city_c',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_city_c',
		array(
			'label' => 'Location 3 City',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_state_c',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_state_c',
		array(
			'label' => 'Location 3 State',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_zip_c',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_zip_c',
		array(
			'label' => 'Location 3 Zip',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_country_c',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_country_c',
		array(
			'label' => 'Location 3 Country',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_phone_c',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_phone_c',
		array(
			'label' => 'Location 3 Phone',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	
	
	// SITE DISCLAIMERS
	$wp_customize->add_section(
        'site_disclaimers',
        array(
            'title' => 'Site Disclaimers'
            //'description' => 'This is a settings section.',
            //'priority' => 35,
        )
    );
	$wp_customize->add_setting(
		'setting_footer_disclaimer',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_footer_disclaimer',
		array(
			'label' => 'Footer Disclaimer',
			'section' => 'site_disclaimers',
			'type' => 'textarea',
		)
	);
	$wp_customize->add_setting(
		'setting_jeanneau_disclaimer_title',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_jeanneau_disclaimer_title',
		array(
			'label' => 'Jeanneau Dealer/BYO and Commissioning Disclaimer Title',
			'section' => 'site_disclaimers',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_jeanneau_disclaimer',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_jeanneau_disclaimer',
		array(
			'label' => 'Jeanneau Dealer/BYO and Commissioning Disclaimer',
			'section' => 'site_disclaimers',
			'type' => 'textarea',
		)
	);
	$wp_customize->add_setting(
		'setting_fountaine_disclaimer_title',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_fountaine_disclaimer_title',
		array(
			'label' => 'Fountaine Pajot Dealer/BYO and Commissioning Disclaimer Title',
			'section' => 'site_disclaimers',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_fountaine_disclaimer',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_fountaine_disclaimer',
		array(
			'label' => 'Fountaine Pajot Dealer/BYO and Commissioning Disclaimer',
			'section' => 'site_disclaimers',
			'type' => 'textarea',
		)
	);
	
	// SITE DISCLAIMERS
	$wp_customize->add_section(
        'social_media',
        array(
            'title' => 'Social Media'
        )
    );
	$wp_customize->add_setting(
		'setting_facebook_url',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_facebook_url',
		array(
			'label' => 'Facebook URL',
			'section' => 'social_media',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_linkedin_url',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_linkedin_url',
		array(
			'label' => 'LinkedIn URL',
			'section' => 'social_media',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_youtube_url',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_youtube_url',
		array(
			'label' => 'YouTube URL',
			'section' => 'social_media',
			'type' => 'text',
		)
	);
}
add_action( 'customize_register', 'atlantic_cruising_yachts_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function atlantic_cruising_yachts_customize_preview_js() {
	wp_enqueue_script( 'atlantic_cruising_yachts_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'atlantic_cruising_yachts_customize_preview_js' );

/**
 * SANITIZE WHAT IS ENTERED
*/

function sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}