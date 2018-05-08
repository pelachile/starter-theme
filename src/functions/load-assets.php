<?php
/**
 * Load file assets for theme
 *
 * @package CCWP\Functions
 * @since 0.0.1
 * @author cory
 * @link https://corymoore.com
 * @license GNU General Public License 2.0+
 * Date: 5/6/18
 * Time: 12:56 AM
 */

namespace CCWP\Functions;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function enqueue_scripts_styles() {

	wp_enqueue_style(
		CHILD_TEXT_DOMAIN . '-fonts',
		'//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700',
		array(),
		CHILD_THEME_VERSION
	);
	wp_enqueue_style( 'dashicons' );

	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script(
		CHILD_TEXT_DOMAIN . '-responsive-menu',
		CHILD_DIR . "/assets/scripts/responsive-menus{$suffix}.js",
		array( 'jquery' ),
		'',
		true
	);
	wp_localize_script(
		CHILD_TEXT_DOMAIN . '-responsive-menu',
		'genesis_responsive_menu',
		\CCWP\responsive_menu_settings()
	);

	wp_enqueue_script(
		CHILD_TEXT_DOMAIN,
		CHILD_DIR . '/assets/scripts/genesis-sample.js',
		array( 'jquery' ),
		'',
		true
	);

}
