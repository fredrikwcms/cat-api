<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              min-fina-blogg.nu
 * @since             1.0.0
 * @package           Cat_Api
 *
 * @wordpress-plugin
 * Plugin Name:       WCMS19 CatAPI
 * Plugin URI:        https://wtfpl.net
 * Description:       Displays an image of a random cat.
 * Version:           1.0.0
 * Author:            Fredrik 
 * Author URI:        min-fina-blogg.nu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cat-api
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CAT_API_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cat-api-activator.php
 */
function activate_cat_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cat-api-activator.php';
	Cat_Api_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cat-api-deactivator.php
 */
function deactivate_cat_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cat-api-deactivator.php';
	Cat_Api_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cat_api' );
register_deactivation_hook( __FILE__, 'deactivate_cat_api' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cat-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cat_api() {

	$plugin = new Cat_Api();
	$plugin->run();

}
run_cat_api();
