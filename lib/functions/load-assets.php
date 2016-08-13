<?php
/**
 * Load child theme assets (enqueue)
 *
 * @package		ZoneW3\GenesisZonew3StarterChild\Functions
 * @since		1.0.0
 * @author		Stéphane Bergeron, Zone W3 Média Design inc.
 * @link		http://zonew3.com
 * @license GNU General Public License 2.0+
 */
namespace Zonew3\GenesisZonew3StarterChild\Functions;

/**
 * Enqueue Scripts and Styles
 *
 * @since 1.0.0
 *
 * @return void
 */
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
function enqueue_assets() {

	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-responsive-menu', CHILD_URL . '/assets/js/responsive-menu.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	$localized_script_args = array(
		'mainMenu' => __( 'Menu', CHILD_TEXT_DOMAIN ),
		'subMenu'  => __( 'Menu', CHILD_TEXT_DOMAIN ),
	);	
	wp_localize_script( CHILD_THEME_DIR . '-responsive-menu', 'GenesisZonew3StarterChildL10n', $localized_script_args );

}