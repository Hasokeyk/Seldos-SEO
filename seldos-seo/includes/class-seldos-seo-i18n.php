<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.hayatikodla.com
 * @since      1.0.0
 *
 * @package    Seldos_Seo
 * @subpackage Seldos_Seo/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Seldos_Seo
 * @subpackage Seldos_Seo/includes
 * @author     Hasan Yüksektepe <hasanhasokeyk@hotmail.com>
 */
class Seldos_Seo_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'seldos-seo',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
