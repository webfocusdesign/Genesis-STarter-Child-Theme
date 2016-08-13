<?php
/**
 * Comments structure handling
 *
 * @package		ZoneW3\genesis-zonew3-starter-child\Structure
 * @since		1.0.0
 * @author		Stéphane Bergeron, Zone W3 Média Design inc.
 * @link		http://zonew3.com
 * @license GNU General Public License 2.0+
 */
namespace Zonew3\GenesisZonew3StarterChild\Structure;
 
/**
 * Modify size of the Gravatar in the entry comments
 *
 * @since 1.0.0
 *
 * @params array $args
 *
 * @return array
 */
add_filter( 'genesis_comment_list_args', __NAMESPACE__ . '\setup_comments_gravatar' );
function setup_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;

	return $args;

}