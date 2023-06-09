<?php
/**
 * Interface contains  method that derived class must need to implement
 *
 * @package    Themeum\LicensePro\Admin
 * @subpackage Themeum\LicensePro\Admin\Submenu
 * @author     Themum<support@themeum.com>
 * @link       https://themeum.com
 * @since      1.0.0
 */

namespace Themeum\LicensePro\Admin\Menu\SubMenu;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *  SubMenuInterface
 */
interface SubMenuInterface {

	/**
	 * Page title
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function page_title() : string;

	/**
	 * Menu title
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function menu_title() : string;

	/**
	 * User capability
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function capability() : string;

	/**
	 * Page slug
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function slug() : string;

	/**
	 * Sub menu callback function
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function callback();

}
