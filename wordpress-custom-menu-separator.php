<?php
/**
 * Custom Menu Separator
 *
 * A simple plugin for adding a custom menu separator in the WordPress administration menu.
 *
 * @package   WPCMS
 * @author    Tom McFarlin <tom@tommcfarlin.com>
 * @license   GPL-2.0+
 * @link      https://github.com/tommcfarlin/WordPress-Custom-Menu-Separator
 * @copyright 2013 - 2014 Tom McFarlin
 *
 * @wordpress-plugin
 * Plugin Name: Custom Menu Separator
 * Plugin URI: http://tommcfarlin.com/wordpress-menu-separator
 * Description: A simple plugin for adding a custom menu separator in the WordPress administration menu.
 * Version: 1.2.0
 * Author: Tom McFarlin
 * Author URI: http://tommcfarlin.com
 * Author Email: tom@tommcfarlin.com
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path( __FILE__ ) . '/class-custom-menu-separator.php' ;

add_action( 'plugins_loaded', 'custom_menu_separator_start' );
function custom_menu_separator_start() {
	new Custom_Menu_Separator();
}