<?php
/**
 * Menus structures
 *
 * @package		ZoneW3\genesis-zonew3-starter-child\Structure
 * @since		1.0.0
 * @author		Stéphane Bergeron, Zone W3 Média Design inc.
 * @link		http://zonew3.com
 * @license GNU General Public License 2.0+
 */
namespace Zonew3\GenesisZonew3StarterChild\Structure;
 
//* Reposition the secondary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

/**
 *  Reduce the secondary navigation menu to one level depth
 *
 * @since 1.0.0
 *
 * @params array $args
 *
 * @return array
 */
add_filter( 'wp_nav_menu_args', __NAMESPACE__ . '\setup_secondary_menu_args' );
function setup_secondary_menu_args( $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}