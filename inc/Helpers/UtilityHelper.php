<?php
/**
 * Contains Plugin's utilities functions
 *
 * @package Themeum\LicensePro\Utils
 * @author  Themum<support@themeum.com>
 * @link    https://themeum.com
 * @since   1.0.0
 */

namespace Themeum\LicensePro\Utilities;

use Themeum\LicensePro;

if ( ! defined( 'ABSPATH' ) ) {
	return;
}

/**
 * Plugin's utilities
 */
class UtilityHelper {

	/**
	 * Load template file
	 *
	 * @param string $template  required template file path.
	 * @param mixed  $data  data that will be available on the file.
	 * @param bool   $once  if true file will be included once.
	 *
	 * @return void
	 */
	public static function load_template( string $template, $data, $once = false ) {
		if ( file_exists( $template ) ) {
			if ( $once ) {
				include_once $template;
			} else {
				include $template;
			}
		}
	}

	/**
	 * Sanitize fields
	 *
	 * @since 1.0.0
	 *
	 * @param mixed $data string or array data to sanitize.
	 *
	 * @return mixed return input data after sanitize
	 */
	public static function sanitize( $data ) {
		if ( is_array( $data ) ) {
			$data = array_map(
				function( $value ) {
					return sanitize_text_field( $value );
				},
				$data
			);
		} else {
			$data = sanitize_text_field( $data );
		}
		return $data;
	}

	/**
	 * Sanitize post value through callable function
	 *
	 * @param string   $key required $_POST key.
	 * @param callable $callback callable WP sanitize/esc func.
	 * @param string   $default will be returned if key not set.
	 *
	 * @return string
	 */
	public static function sanitize_post_field( string $key, callable $callback = null, $default = '' ) {
		if ( is_null( $callback ) ) {
			$callback = 'sanitize_text_field';
		}
		//phpcs:ignore
		if ( isset( $_POST[ $key ] ) ) {
			return call_user_func( $callback, wp_unslash( $_POST[ $key ] ) ); //phpcs:ignore
		}
		return $default;
	}

	/**
	 * Sanitize get value through callable function
	 *
	 * @param string   $key required $_GET key.
	 * @param callable $callback callable WP sanitize/esc func.
	 * @param string   $default will be returned if key not set.
	 *
	 * @return string
	 */
	public static function sanitize_get_field( string $key, callable $callback = null, $default = '' ) {
		if ( is_null( $callback ) ) {
			$callback = 'sanitize_text_field';
		}
		//phpcs:ignore
		if ( isset( $_GET[ $key ] ) ) {
			return call_user_func( $callback, wp_unslash( $_GET[ $key ] ) ); //phpcs:ignore
		}
		return $default;
	}	

	/**
	 * Create nonce field.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public static function create_nonce_field() {
		$plugin_data = LicensePro::plugin_data();
		wp_nonce_field( $plugin_data['nonce_action'], $plugin_data['nonce'] );
	}

	/**
	 * Verify nonce not it verified then die
	 *
	 * @since 1.0.0
	 *
	 * @return bool if die false otherwise it will die
	 */
	public static function verify_nonce() {
		$plugin_data = LicensePro::plugin_data();
		return isset( $_POST[ $plugin_data['nonce'] ] ) && wp_verify_nonce( $_POST[ $plugin_data['nonce'] ], $plugin_data['nonce_action'] );
	}

}
