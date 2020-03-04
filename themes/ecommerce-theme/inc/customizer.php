<?php
/**
 * E-commerce Theme Theme Customizer
 *
 * @package E-commerce_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ecommerce_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'ecommerce_theme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'ecommerce_theme_customize_partial_blogdescription',
		) );
	}

	/**
	 * PANELS
	 */
	$wp_customize->add_panel('ecommerce_theme_social_media_panel', array(
		'title' => esc_html__('Social Media', 'ecommerce_theme'),
		'capability' => 'edit_theme_options',
	));
	/**
	 * SECTIONS
	 */
	$wp_customize->add_section('ecommerce_theme_facebook_section', array(
		'title' => esc_html__('Facebook', 'ecommerce_theme'),
		'capability' => 'edit_theme_options',
		'panel' => 'ecommerce_theme_social_media_panel',
	));

	/**
	 * SETTINGS
	 */
	$wp_customize->add_setting('ecommerce_theme_facebook_url', array(
		'transport' => 'refresh', 
		'default' => '',
		'sanitize_callback' =>  'esc_url_raw',
	));

	/**
	 * CONTROLS (has the same name as setting)
	 */
	$wp_customize->add_control('ecommerce_theme_facebook_url', array(
		'label' => esc_html__('URL', 'ecommerce_theme'),
		'description' => esc_html__('Add URL to display Facebook icon/link','ecommerce_theme' ),
		'section' => 'ecommerce_theme_facebook_section',
		'type' => 'input',
		'input_attrs' => array(
			'placeholder' => esc_html__('http://facebook.com','ecommerce_theme' ),
		),
	));
}
add_action( 'customize_register', 'ecommerce_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ecommerce_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ecommerce_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ecommerce_theme_customize_preview_js() {
	wp_enqueue_script( 'ecommerce-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ecommerce_theme_customize_preview_js' );
