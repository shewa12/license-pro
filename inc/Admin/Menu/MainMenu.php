<?php
/**
 * Admin menu and page management
 *
 * @package    Themeum\LicensePro\Admin
 * @subpackage Themeum\LicensePro\Admin\Menu
 * @author     Themum<support@themeum.com>
 * @link       https://themeum.com
 * @since      1.0.0
 */

namespace Themeum\LicensePro\Admin\Menu;

use Themeum\LicensePro;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Create admin menu and page management
 *
 * @package LicensePro\Admin
 * @author Shewa <shewa12kpi@gmail.com>
 * @since 1.0.0
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
		// TODO Submenu.

		do_action( 'license_pro_after_sub_menu_register' );
	}
}

