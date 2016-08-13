<?php
/**
 * Post structures
 *
 * @package		ZoneW3\genesis-zonew3-starter-child\Structure
 * @since		1.0.0
 * @author		Stéphane Bergeron, Zone W3 Média Design inc.
 * @link		http://zonew3.com
 * @license GNU General Public License 2.0+
 */
 namespace Zonew3\GenesisZonew3StarterChild\Structure;
 
/**
 * Modify size of the Gravatar in the author box
 *
 * @since 1.0.0
 *
 * @params $size
 *
 * @return int
 */
add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\setup_author_box_gravatar_size' );
function setup_author_box_gravatar_size( $size ) {

	return 90;

}