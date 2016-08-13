<?php
/**
 * Child theme initialization file
 *
 * @package		Zonew3\GenesisZonew3StarterChild\Lib\Init
 * @since		1.0.0
 * @author		Stéphane Bergeron, Zone W3 Média Design inc.
 * @link		http://zonew3.com
 * @license GNU General Public License 2.0+
 */
namespace Zonew3\GenesisZonew3StarterChild\Lib\Init;

/**
 * Intialize the theme's constants
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	
	$child_theme = wp_get_theme();
	
	define( 'CHILD_THEME_NAME', $child_theme->get( 'Name' ) );
	define( 'CHILD_THEME_URL', $child_theme->get( 'ThemeURI' ) );
	define( 'CHILD_THEME_VERSION', $child_theme->get( 'Version' ) );
	define( 'CHILD_TEXT_DOMAIN', $child_theme->get( 'TextDomain' ) );
	
	define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
	define( 'CHILD_CONFIG_DIR', CHILD_THEME_DIR . '/config/' );
	
	//* Define URL location constants
	define( 'PARENT_URL', get_template_directory_uri() );
	define( 'CHILD_URL', get_stylesheet_directory_uri() );
		
}

init_constants();