<?php
/**
 * The ProductTable class defines a database table schema
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
class LicenseTable extends DatabaseAbstract {

	/**
	 * Table name without prefix
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	private $name = 'lp_licenses';

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
		global $wpdb;

		$product_package_table = ( new ProductPackageTable() )->get_table_name();
		$user_table            = $wpdb->users;

		$schema = "CREATE TABLE $this->name (
            id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
            user_id BIGINT UNSIGNED NOT NULL,
            product_package_id INT NOT NULL,
            site_url VARCHAR(255) NOT NULL,
            license_key VARCHAR(255) NOT NULL,
            update_count TINYINT UNSIGNED DEFAULT 0,
            FOREIGN KEY (user_id) REFERENCES {$user_table} (id),
            FOREIGN KEY (product_package_id) REFERENCES {$product_package_table} (id),
            INDEX idx_user_id (user_id),
            INDEX idx_product_package_id (product_package_id)
        ) ENGINE = INNODB ";

		return $schema;
	}

}
