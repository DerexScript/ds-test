<?php

namespace DST\Includes;

defined('ABSPATH') || exit;

final class AdminMenu
{
	private function __construct()
	{
	}

	public static function addMenuPanel()
	{
		//global $menu;
		$page_title = __('Ds-Test', 'acf');
		$menuPosition = 76; //https://developer.wordpress.org/reference/functions/add_menu_page/#menu-structure
		add_menu_page(
			$page_title,
			"Ds-Test",
			"manage_options",
			"ds-test",
			array(__CLASS__, 'displayPage'),
			'dashicons-superhero-alt', //DST_PLUGIN_URL . '/assets/images/icon-menu1.png', // https://developer.wordpress.org/resource/dashicons/
			$menuPosition
		);
		add_submenu_page(
			'ds-test',
			'Ds-Test',
			'Settings',
			'manage_options',
			'displayConfigPage',
			array(__CLASS__, 'displayPageSettings'),
		);
	}

	public static function displayPage()
	{
		echo "<h1>displayPage</h1>";
	}

	public static function displayPageSettings()
	{
		echo "<h1>displayPageSettings</h1>";
	}

}

