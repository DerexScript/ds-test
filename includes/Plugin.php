<?php

use DST\Includes\Activate;
use DST\Includes\Deactivate;
use DST\Includes\AdminMenu;

defined('ABSPATH') || exit;


final class Plugin
{

	private $version = "0.1.0";

	private static $instances = null;

	/**
	 * The Singleton's constructor should always be private to prevent direct
	 * construction calls with the `new` operator.
	 */
	private function __construct()
	{

	}

	/**
	 * Singletons should not be cloneable.
	 */
	private function __clone()
	{
	}

	/**
	 * Singletons should not be restorable from strings.
	 */
	public function __wakeup()
	{
		throw new \Exception("Cannot unserialize a singleton.");
	}

	public static function getInstance(): ?Plugin
	{
		$cls = static::class;
		if (!isset(self::$instances[$cls])) {
			self::$instances[$cls] = new static();
		}
		return self::$instances[$cls];
	}

	public function init()
	{

	}

	public function activate()
	{
		Activate::activate();
	}

	public function deactivate()
	{
		Deactivate::deactivate();
	}

	public function adminMenu()
	{
		AdminMenu::addMenuPanel();
	}


}
