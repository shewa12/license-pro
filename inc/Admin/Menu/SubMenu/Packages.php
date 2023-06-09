<?php
/**
 * Packages submenu
 *
 * @package    Themeum\LicensePro\Admin
 * @subpackage Themeum\LicensePro\Admin\Submenu
 * @author     Themum<support@themeum.com>
 * @link       https://themeum.com
 * @since      1.0.0
 */

namespace Themeum\LicensePro\Admin\Menu\SubMenu;

/**
 * Custom bots sub menu
 */
class Packages implements SubMenuInterface {

	/**
	 * Page title
	 *
	 * @since 1.0.0
	 *
	 * @return string  page title
	 */
	public function page_title(): string {
		return __( 'Packages', 'license-pro' );
	}

	/**
	 * Menu title
	 *
	 * @since 1.0.0
	 *
	 * @return string  menu title
	 */
	public function menu_title(): string {
		return __( 'Packages', 'license-pro' );
	}

	/**
	 * Capability to access this menu
	 *
	 * @since 1.0.0
	 *
	 * @return string  capability
	 */
	public function capability(): string {
		return 'manage_options';
	}

	/**
	 * Page URL slug
	 *
	 * @since 1.0.0
	 *
	 * @return string  slug
	 */
	public function slug(): string {
		return 'license-pro-packages';
	}

	/**
	 * Render content for this sub-menu page
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function callback() {}
}
