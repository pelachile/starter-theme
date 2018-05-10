<?php
/**
 * Load files
 *
 * @package CCWP
 * @since 0.0.1
 * @author cory
 * @link https://corymoore.com
 * @license GNU General Public License 2.0+
 * Date: 5/5/18
 * Time: 9:07 PM
 */

namespace CCWP;

add_action( 'genesis_setup', __NAMESPACE__ . '\tester_func', 1);

function tester_func() {
	die( 'tester function' );
}

// Displays custom logo.
add_action( 'genesis_site_title', 'the_custom_logo', 0 );

$config = array(
	'genesis-footer-widgets' => 3,
	'genesis-responsive-viewport' => true,
	'html5' => array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	),
	'genesis-accessibility' => array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	),
	'custom-logo' => array(
		'height'      => 120,
		'width'       => 700,
		'flex-height' => true,
		'flex-width'  => true,
	),
	'genesis-menus' => array(
		'primary'   => __( 'Header Menu', CHILD_TEXT_DOMAIN ),
		'secondary' => __( 'Footer Menu', CHILD_TEXT_DOMAIN ),
	),
	'genesis-after-entry-widget-area' => true
);

foreach ( $config as $feature => $args ) {
	add_theme_support( $feature, $args );
}

// Sets the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 1200; // Pixels.
}

load_child_theme_textdomain( CHILD_TEXT_DOMAIN, apply_filters( 'child_theme_textdomain', CHILD_THEME_DIR . '/languages', CHILD_TEXT_DOMAIN ) );

// Removes header right widget area.
unregister_sidebar( 'header-right' );

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Removes output of primary navigation right extras.
remove_filter( 'genesis_nav_items', 'genesis_nav_right', 10, 2 );
remove_filter( 'wp_nav_menu_items', 'genesis_nav_right', 10, 2 );

add_action( 'genesis_theme_settings_metaboxes', __NAMESPACE__ . '\remove_metaboxes' );
/**
 * Removes output of unused admin settings metaboxes.
 *
 * @since 2.6.0
 *
 * @param string $_genesis_admin_settings The admin screen to remove meta boxes from.
 */
function remove_metaboxes( $_genesis_admin_settings ) {

	remove_meta_box( 'genesis-theme-settings-header', $_genesis_admin_settings, 'main' );
	remove_meta_box( 'genesis-theme-settings-nav', $_genesis_admin_settings, 'main' );

}

//add_filter( 'genesis_customizer_theme_settings_config', __NAMESPACE__ . '\remove_customizer_settings' );
/**
 * Removes output of header settings in the Customizer.
 *
 * @since 2.6.0
 *
 * @param array $config Original Customizer items.
 *
 * @return array Filtered Customizer items.
 */
function remove_customizer_settings( $config ) {

	unset( $config['genesis']['sections']['genesis_header'] );

	return $config;

}

/**
 * Defines responsive menu settings.
 *
 * @since 2.3.0
 */
function responsive_menu_settings() {

	$settings = array(
		'mainMenu'         => __( 'Menu', CHILD_TEXT_DOMAIN ),
		'menuIconClass'    => 'dashicons-before dashicons-menu',
		'subMenu'          => __( 'Submenu', CHILD_TEXT_DOMAIN ),
		'subMenuIconClass' => 'dashicons-before dashicons-arrow-down-alt2',
		'menuClasses'      => array(
			'combine' => array(
				'.nav-primary',
			),
			'others'  => array(),
		),
	);

	return $settings;

}
