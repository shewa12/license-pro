<?php

/**
 * The Migration class creates and drops tables of licensePro
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

use Themeum\LicensePro\Database\PackagesTable;

/**
 * Migrate database for license pro
 *
 * @package Themeum\LicensePro\Database
 * @author  Themum<support@themeum.com>
 * @link    https://themeum.com
 * @since   1.0.0
 */

/**
 * The Migrate class creates and drops tables for a database
 */
class Migration {

	/**
	 * The function returns an array of tables
	 *
	 * @since 1.0.0
	 *
	 * @return array of tables
	 */
	private static function tables() {
		$tables = array(
			new PackageTable(),
			new ProductTable(),
			new ProductPackageTable(),
			new OrderTable(),
			new LicenseTable(),
		);

		return $tables;
	}

	/**
	 * Create all the tables
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public static function migrate() {
		$tables = self::tables();

		foreach ( $tables as $table ) {
			$table->create_table();
		}
	}

	/**
	 * Drop all the tables
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public static function drop_tables() {
		$tables = self::tables();

		foreach ( $tables as $table ) {
			$table->drop_table();
		}
	}
}
