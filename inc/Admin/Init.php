<?php
/**
 * Admin module loader
 *
 * @package Themeum\LicensePro\Admin
 * @author  Themum<support@themeum.com>
 * @link    https://themeum.com
 * @since   1.0.0
 */

namespace Themeum\LicensePro\Admin;

use Themeum\LicensePro\Admin\Menu\MainMenu;

/**
 * Admin Package loader
 *
 * @since 1.0.0
 */
class Init {

	/**
	 * Load dependencies
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function __construct() {
		new MainMenu();
	}
}
