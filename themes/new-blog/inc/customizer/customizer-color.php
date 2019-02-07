<?php
/**
 * new blog Theme Customizer Color
 *
 * @package new_blog
 *
 */


/**
 *  Customizer for color display
 */
function new_blog_customize_color( $wp_customize ) {

	$wp_customize->add_setting( 'new_blog_linkvisit_color', array(
		'default'   => __('#800080', 'new-blog'),
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'new_blog_linkvisit_color', array(
		'label'     => __( 'Link visited color', 'new-blog' ),
		'section'   => 'colors',
		'settings'  => 'new_blog_linkvisit_color',
		'type'		=> 'color',
		) 
	) );
	
}
add_action( 'customize_register', 'new_blog_customize_color' );
