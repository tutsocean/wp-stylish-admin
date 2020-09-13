<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://tutsocean.com/about-me
 * @since             1.0.0
 * @package           Wp_Stylish_Admin
 *
 * @wordpress-plugin
 * Plugin Name:       wp stylish admin
 * Plugin URI:        https://tutsocean.com/wp-stylish-admin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Deepak Anand
 * Author URI:        https://tutsocean.com/about-me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-stylish-admin
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
define( 'WP_STYLISH_ADMIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-stylish-admin-activator.php
 */
function activate_wp_stylish_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-stylish-admin-activator.php';
	Wp_Stylish_Admin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-stylish-admin-deactivator.php
 */
function deactivate_wp_stylish_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-stylish-admin-deactivator.php';
	Wp_Stylish_Admin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_stylish_admin' );
register_deactivation_hook( __FILE__, 'deactivate_wp_stylish_admin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-stylish-admin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_stylish_admin() {

	$plugin = new Wp_Stylish_Admin();
	$plugin->run();

}
run_wp_stylish_admin();
