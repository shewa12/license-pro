<?php
/**
 * Register admin main menu & sub-menu
 *
 * @package    Themeum\LicensePro\Admin
 * @subpackage Themeum\LicensePro\Admin\Menu
 * @author     Themum<support@themeum.com>
 * @link       https://themeum.com
 * @since      1.0.0
 */

namespace Themeum\LicensePro\Admin\Menu;

use Themeum\LicensePro;
use Themeum\LicensePro\Admin\Menu\SubMenu\Packages;
use Themeum\LicensePro\Admin\Menu\SubMenu\Products;
use Themeum\LicensePro\Admin\Menu\SubMenu\Orders;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Admin main menu & sub-menu management
 */
class MainMenu {

	/**
	 * Capability
	 *
	 * @var string
	 */
	private $capability = 'manage_options';

	/**
	 * Slug for this page
	 *
	 * @var string $slug
	 */
	private $slug = 'license-pro';

	/**
	 * Hold plugin meta data
	 *
	 * @var array
	 */
	public $plugin_data;

	/**
	 * Register hooks
	 *
	 * @param bool $run  to excecute contrustor method.
	 *
	 * @return void
	 */
	public function __construct( $run = true ) {
		if ( $run ) {
			add_action( 'admin_menu', array( $this, 'add_menu' ) );
		}
		$this->plugin_data = LicensePro::plugin_data();
	}

	/**
	 * Page title
	 *
	 * @return string
	 */
	public function page_title(): string {
		return __( 'LicensePro', 'license-pro' );
	}

	/**
	 * Menu title
	 *
	 * @return string
	 */
	public function menu_title(): string {
		return __( 'LicensePro', 'license-pro' );
	}

	/**
	 * Capability
	 *
	 * @return string
	 */
	public function capability(): string {
		return $this->capability;
	}

	/**
	 * Slug
	 *
	 * @return string
	 */
	public function slug(): string {
		return $this->slug;
	}

	/**
	 * Position
	 *
	 * @return int
	 */
	public function position(): int {
		return 10;
	}

	/**
	 * Icon name that will used for page menu icon
	 *
	 * @return string
	 */
	public function icon_name(): string {
		return '';
	}

	/**
	 * Page view
	 *
	 * @return void
	 */
	public function view() {
		include trailingslashit( $this->plugin_data['views'] . 'pages' ) . 'license-pro.php';
	}

	/**
	 * Main menu register
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function add_menu() {
		do_action( 'license_pro_before_main_menu_register' );
		// Register main menu.
		add_menu_page(
			$this->page_title(),
			$this->menu_title(),
			$this->capability(),
			$this->slug(),
			array( $this, 'view' ),
			$this->icon_name(),
			$this->position()
		);

		do_action( 'license_pro_after_main_menu_register' );

		$submenus = $this->submenu_factory();

		// Register sub-menus.
		foreach ( $submenus as $submenu ) {
			add_submenu_page(
				$this->slug(),
				$submenu->page_title(),
				$submenu->menu_title(),
				$submenu->capability(),
				$submenu->slug(),
				array( $submenu, 'callback' )
			);
		}

		do_action( 'license_pro_after_sub_menu_register' );
	}

	/**
	 * The function creates an array of submenu objects for a menu.
	 *
	 * @since 1.0.0
	 *
	 * @return The function `submenu_factory()` is returning an array of objects that represent sub-menus.
	 * The sub-menus are instances of the `Packages`, `Products`, and `Orders` classes.
	 */
	private function submenu_factory() {
		$sub_menus = array(
			new Packages(),
			new Products(),
			new Orders(),
		);

		return $sub_menus;
	}
}

