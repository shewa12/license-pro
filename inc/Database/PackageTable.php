<?php
/**
 * The PackagesTable class defines a database table schema
 * for storing information about license packages.
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
 * PackagesTable class for creating & dropping table
 */
class PackageTable extends DatabaseAbstract {

	/**
	 * Table name without prefix
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	private $name = 'lp_packages';

	/**
	 * This function sets the name property of an object to the WordPress
	 * database table prefix concatenated with the object's name property.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		global $wpdb;
		$this->name = $wpdb->prefix . $this->name;
	}

	/**
	 * Get the name of the table with prefix
	 *
	 * @since 1.0.0
	 *
	 * @return string A string representing the name of a table.
	 */
	public function get_table_name(): string {
		return $this->name;
	}

	/**
	 * This PHP function returns a string containing a SQL schema for creating a table with specific
	 * columns.
	 *
	 * @since 1.0.0
	 *
	 * @return string a string that contains a SQL query to create a table with columns for id, name,
	 * domain_limit, subdomain_limit, and validity_in_days. The id column is set as the primary key.
	 */
	public function get_table_schema(): string {
		$schema = "CREATE TABLE $this->name (
            id SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(255) NOT NULL,
            domain_limit TINYINT UNSIGNED NOT NULL,
            subdomain_limit TINYINT UNSIGNED NOT NULL,
            validity_in_days SMALLINT UNSIGNED NOT NULL
        ) ENGINE = INNODB ";

		return $schema;
	}

}
