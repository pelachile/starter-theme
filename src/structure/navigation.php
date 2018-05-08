<?php
/**
 * Navigation HTML markup structure
 *
 * @package CCWP\Structure
 * @since 0.0.1
 * @author cory
 * @link https://corymoore.com
 * @license GNU General Public License 2.0+
 * Date: 5/5/18
 * Time: 9:03 PM
 */

namespace CCWP\Structure;


// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 10 );

add_filter( 'wp_nav_menu_args', __NAMESPACE__ . '\secondary_menu_args' );
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 1.0.0
 *
 * @param array $args Original menu options.
 *
 * @return array Menu options with depth set to 1.
 */
function secondary_menu_args( array $args ) {

	if ( 'secondary' !== $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}