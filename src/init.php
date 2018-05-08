<?php
/**
 * Initialize theme constants
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

/**
 * Initialize the themes constants
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {

	$theme_dir = wp_get_theme();

	define( 'CHILD_THEME_NAME', $theme_dir->get( 'Name' ));
	define( 'CHILD_THEME_URL', $theme_dir->get( 'ThemeURI' ) );
	define( 'CHILD_THEME_VERSION', $theme_dir->get( 'Version' ) );
	define( 'CHILD_TEXT_DOMAIN', $theme_dir->get( 'TextDomain' ) );

	define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
	define( 'CHILD_CONFIG_DIR', CHILD_THEME_DIR . '/config/' );

}

init_constants();