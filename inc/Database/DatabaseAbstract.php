<?php
/**
 * The Database abstract class
 *
 * Perform table create & drop execution
 *
 * @package Themeum\LicensePro\Database
 * @author  Themum<support@themeum.com>
 * @link    https://themeum.com
 * @since   1.0.0
 */

namespace Themeum\LicensePro\Database;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class DatabaseAbstract
 */
abstract class DatabaseAbstract {

	/**
	 * Abstract function to get table name
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	abstract public function get_table_name(): string;

	/**
	 * Abstract function to get table schema
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	abstract public function get_table_schema(): string;

	/**
	 * Create the table
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function create_table() {
		do_action( 'license_pro_before_create_table' );
		global $wpdb;

		$charset_collate = $wpdb->get_charset_collate();
		$sql             = $this->get_table_schema() . $charset_collate;

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';

		dbDelta( $sql );

		do_action( 'license_pro_after_create_table' );
	}

	/**
	 * Drop the table
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function drop_table() {
		global $wpdb;

		do_action( 'license_pro_before_drop_table' );

		$wpdb->query( 'DROP TABLE IF EXISTS ' . $this->get_table_name() ); //phpcs:ignore

		do_action( 'license_pro_after_drop_table' );
	}
}
