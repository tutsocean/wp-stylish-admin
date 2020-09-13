<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://tutsocean.com/about-me
 * @since      1.0.0
 *
 * @package    Wp_Stylish_Admin
 * @subpackage Wp_Stylish_Admin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Stylish_Admin
 * @subpackage Wp_Stylish_Admin/includes
 * @author     Deepak Anand <anand.deepak9988@gmail.com>
 */
class Wp_Stylish_Admin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-stylish-admin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
