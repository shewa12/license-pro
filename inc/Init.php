<?php
/**
 * Initialize the plugin
 *
 * All all the dependent modules
 *
 * @package Themeum\LicensePro\Init
 * @author  Themum<support@themeum.com>
 * @link    https://themeum.com
 * @since   1.0.0
 */

namespace Themeum\LicensePro;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Themeum\LicensePro\Admin\Init as AdminInit;
use Themeum\LicensePro\Assets\Enqueue;

/**
 * The Init class initializes plugin dependencies by creating instances
 * of the classes
 */
class Init {

	/**
	 * Initialize the plugin dependencies
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		new Enqueue();
		new AdminInit();
	}
}
