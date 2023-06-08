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
class OrderTable extends DatabaseAbstract {

	/**
	 * Table name without prefix
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	private $name = 'lp_orders';

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
            id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
            product_package_id INT,
            user_id BIGINT UNSIGNED NOT NULL,
            order_price DECIMAL(10, 2) NOT NULL,
            regular_price DECIMAL(10, 2) NOT NULL,
            coupon_id INT,
            order_status ENUM('pending', 'completed', 'cancelled', 'refunded', 'partially_refunded', 'expired', 'upgraded') NOT NULL DEFAULT 'pending',
            auto_renew BOOLEAN DEFAULT FALSE NOT NULL,
            payment_gateway VARCHAR(255) NOT NULL,
            payment_payload_data JSON,
            order_note TEXT,
            order_created DATETIME DEFAULT CURRENT_TIMESTAMP,
            order_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            INDEX idx_product_package_id (product_package_id),
            INDEX idx_user_id (user_id),
            INDEX idx_order_status (order_status),
            INDEX idx_order_created (order_created)
        ) ENGINE = INNODB ";

		return $schema;
	}

}
