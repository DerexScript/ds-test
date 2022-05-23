<?php

/**
 * Plugin Name:     Ds Test
 * Plugin URI:      https://example.com/Ds-Test
 * Description:     PLUGIN TESTE
 * Author:          Derex
 * Author URI:      https://example.com/Derex
 * Text Domain:     ds-test
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ds_Test
 */

defined('ABSPATH') || exit;

define('DST_PLUGIN_FILE', __FILE__);
define('DST_PLUGIN_PATH', untrailingslashit(plugin_dir_path(DST_PLUGIN_FILE)));
define('DST_PLUGIN_URL', untrailingslashit(plugins_url('/', DST_PLUGIN_FILE)));


require_once DST_PLUGIN_PATH . '/includes/Plugin.php';

if (file_exists(DST_PLUGIN_PATH . '/vendor/autoload.php')) {
	require_once DST_PLUGIN_PATH . '/vendor/autoload.php';
}

if (class_exists('Plugin')) {

	function DST()
	{
		return Plugin::getInstance();
	}

	add_action('plugins_loaded', array(DST(), 'init'));

	// activation
	register_activation_hook(DST_PLUGIN_FILE, array(DST(), 'activate'));

	// deactivation
	register_deactivation_hook(DST_PLUGIN_FILE, array(DST(), 'deactivate'));

	add_action("admin_menu", array(DST(), 'adminMenu'));

}









