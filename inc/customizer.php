<?php
/**
 * Tao PR Theme Theme Customizer.
 *
 * @package Tao_PR_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function taopr_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'homepage' , array(
	    'title'      => __('Homepage','taopr'),
	    'priority'   => 30,
	));

	$wp_customize->add_setting(
        'tao_hero_image'
    );
 
    /*$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'tao_hero_image',
			array(
				'label'      => __( 'Select a Hero Image', 'taopr' ),
				'section'    => 'homepage',
				'settings'   => 'tao_hero_image',
				'context'    => 'your_setting_context' 
			)
		)
	); */

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'tao_hero_image', 
			array(
			  'label'      	=> __( 'Select a Hero Image', 'taopr' ),
			  'section' 	=> 'homepage',
			  'mime_type' 	=> 'image',
			)
		)
	);

	// Add a footer/copyright information section.
	$wp_customize->add_section( 'footer' , array(
		'title' => __( 'Footer', 'taopr' ),
		'priority' => 90, // Before Navigation.
	));

}
add_action( 'customize_register', 'taopr_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function taopr_customize_preview_js() {
	wp_enqueue_script( 'taopr_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'taopr_customize_preview_js' );

/**
 *
 */
function taopr_hero_image() {
    $id = get_theme_mod('tao_hero_image');

    if ($id != 0) {
        $url = wp_get_attachment_url($id);
        echo '<img src="' . $url . '" alt="" class="img-responsive" />';
    }
}