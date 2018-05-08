<?php
/**
 * Comments HTML markup structure
 *
 * @package CCWP\Structure
 * @since 0.0.1
 * @author cory
 * @link https://corymoore.com
 * @license GNU General Public License 2.0+
 * Date: 5/6/18
 * Time: 12:49 AM
 */

namespace CCWP\Structure;

add_filter( 'genesis_comment_list_args', __NAMESPACE__ . '\comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 1.0.0
 *
 * @param array $args Gravatar settings.
 *
 * @return array Gravatar settings with modified size.
 */
function comments_gravatar( array $args ) {

	$args['avatar_size'] = 60;

	return $args;

}