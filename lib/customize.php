<?php
/**
 * Basicoh.
 *
 * This file adds the Customizer additions to the Basicoh Theme.
 *
 * @package Basicoh
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

add_action( 'customize_register', 'basicoh_customizer_register' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function basicoh_customizer_register( $wp_customize ) {

	$wp_customize->add_setting(
		'basicoh_link_color',
		array(
			'default'           => basicoh_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'basicoh_link_color',
			array(
				'description' => __( 'Change the color of post info links, hover color of linked titles, hover color of menu items, and more.', 'basicoh' ),
				'label'       => __( 'Link Color', 'basicoh' ),
				'section'     => 'colors',
				'settings'    => 'basicoh_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		'basicoh_accent_color',
		array(
			'default'           => basicoh_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'basicoh_accent_color',
			array(
				'description' => __( 'Change the default hovers color for button.', 'basicoh' ),
				'label'       => __( 'Accent Color', 'basicoh' ),
				'section'     => 'colors',
				'settings'    => 'basicoh_accent_color',
			)
		)
	);

}
