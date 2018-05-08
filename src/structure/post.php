<?php
/**
 * Post HTML markup structure
 *
 * @package CCWP\Structure
 * @since 0.0.1
 * @author cory
 * @link https://corymoore.com
 * @license GNU General Public License 2.0+
 * Date: 5/5/18
 * Time: 9:41 PM
 */

namespace CCWP\Structure;

add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 1.0.0
 *
 * @param int $size Original icon size.
 *
 * @return int Modified icon size.
 */
function author_box_gravatar( $size ) {

	return 90;

}