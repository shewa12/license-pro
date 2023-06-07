<?php
/**
 * Enqueue Assets, styles & scripts
 *
 * @package Themeum\LicensePro\Assets
 * @author  Themum<support@themeum.com>
 * @link    https://themeum.com
 * @since   1.0.0
 */

namespace Themeum\LicensePro\Assets;

use Themeum\LicensePro;

/**
 * Enqueue styles & scripts
 */
class Enqueue {

	/**
	 * Register hooks
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'load_admin_scripts' ) );

		// frontend scripts.
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'load_front_end_scripts' ) );

		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'script_text_domain' ) );
	}

	/**
	 * Load admin styles & scripts
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public static function load_admin_scripts(): void {
		$plugin_data = LicensePro::plugin_data();
		$minify      = 'DEV' === $plugin_data['env'] ? '' : 'min.';

		// Load Admin app.
		$prompt_bundle_path = $plugin_data['plugin_path'] . 'assets/js/backend-bundle.js';
		$prompt_bundle_url  = $plugin_data['assets'] . 'js/backend-bundle.js';

		wp_enqueue_script(
			'license-pro-backend',
			$prompt_bundle_url,
			array(),
			filemtime( $prompt_bundle_path ),
			true
		);

		// Add data to use in js files.
		wp_add_inline_script( 'license-pro-prompt', 'const licensePro = ' . json_encode( self::scripts_data() ), 'before' );
	}

	/**
	 * Load front end scripts
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public static function load_front_end_scripts() {
		$plugin_data = LicensePro::plugin_data();
		// Load front-end script styles here.
	}

	/**
	 * Add inline data in scripts
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	public static function scripts_data() {
		$plugin_data = LicensePro::plugin_data();

		$data = array(
			'ajax_url'    => admin_url( 'admin-ajax.php' ),
			'nonce_value' => wp_create_nonce( $plugin_data['nonce_action'] ),
			'nonce_field' => $plugin_data['nonce'],
			'site_url'    => home_url(),
			'plugin_url'  => $plugin_data['plugin_url'],
			'plugin_path' => $plugin_data['plugin_path'],
		);
		return apply_filters( 'license_pro_inline_script_data', $data );
	}

	/**
	 * Script text domain mapping to make JS script
	 * translate-able
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public static function script_text_domain() {
		$plugin_data = LicensePro::plugin_data();
		wp_set_script_translations( 'license-pro-backend', $plugin_data['plugin_path'] . 'assets/languages/' );
	}

}
