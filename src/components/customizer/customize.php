<?php
/**
* Theme customizer settings
*
* @package CCWP\Components\Customizer
* @since 0.0.1
* @author cory
* @link https://corymoore.com
* @license GNU General Public License 2.0+
* Date: 5/5/18
* Time: 9:38 PM
*/

namespace CCWP\Components\Customizer;

use WP_Customize_Color_Control;

add_action( 'customize_register', __NAMESPACE__ . '\customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param \WP_Customize_Manager $wp_customize Customizer object.
 */
function customizer_register( $wp_customize ) {

	$wp_customize->add_setting(
		CHILD_TEXT_DOMAIN . '_link_color',
		array(
			'default'           => \CCWP\Functions\customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			CHILD_TEXT_DOMAIN . '_link_color',
			array(
				'description' => __( 'Change the color of post info links, hover color of linked titles, hover color of menu items, and more.', CHILD_TEXT_DOMAIN ),
				'label'       => __( 'Link Color', CHILD_TEXT_DOMAIN ),
				'section'     => 'colors',
				'settings'    => CHILD_TEXT_DOMAIN . '_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		CHILD_TEXT_DOMAIN . '_accent_color',
		array(
			'default'           => \CCWP\Functions\customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			CHILD_TEXT_DOMAIN . '_accent_color',
			array(
				'description' => __( 'Change the default hovers color for button.', CHILD_TEXT_DOMAIN  ),
				'label'       => __( 'Accent Color', CHILD_TEXT_DOMAIN  ),
				'section'     => 'colors',
				'settings'    => CHILD_TEXT_DOMAIN . '_accent_color',
			)
		)
	);

	$wp_customize->add_setting(
		CHILD_TEXT_DOMAIN . '_logo_width',
		array(
			'default'           => 350,
			'sanitize_callback' => 'absint',
		)
	);

	// Add a control for the logo size.
	$wp_customize->add_control(
		CHILD_TEXT_DOMAIN . '_logo_width',
		array(
			'label'       => __( 'Logo Width', CHILD_TEXT_DOMAIN ),
			'description' => __( 'The maximum width of the logo in pixels.', CHILD_TEXT_DOMAIN ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => CHILD_TEXT_DOMAIN . '_logo_width',
			'type'        => 'number',
			'input_attrs' => array(
				'min' => 100,
			),

		)
	);
}
