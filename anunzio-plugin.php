// Developed for Anunzio International by Anzul Aqeel. Contact +971545822608 or +971585515742. Linkedin Profile: linkedin.com/in/anzulaqeel

<?php
/**
 * Plugin Name:       Anunzio Boilerplate Plugin
 * Plugin URI:        https://anunziointernational.com
 * Description:       A starter boilerplate for WordPress Plugin development.
 * Version:           1.0.0
 * Author:            Anzul Aqeel
 * Author URI:        https://anunziointernational.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       anunzio-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'ANUNZIO_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 */
function activate_anunzio_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-anunzio-plugin-activator.php';
	Anunzio_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_anunzio_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-anunzio-plugin-deactivator.php';
	Anunzio_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_anunzio_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_anunzio_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-anunzio-plugin.php';

/**
 * Begins execution of the plugin.
 */
function run_anunzio_plugin() {
	$plugin = new Anunzio_Plugin();
	$plugin->run();
}
run_anunzio_plugin();

// Developed for Anunzio International by Anzul Aqeel. Contact +971545822608 or +971585515742. Linkedin Profile: linkedin.com/in/anzulaqeel
