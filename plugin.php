<?php
/*
Plugin Name: Custom Menu Separator
Plugin URI: http://tommcfarlin.com/wordpress-menu-separator
Description: A simple plugin for adding a custom menu separator in the WordPress administration menu.
Version: 1.0
Author: Tom McFarlin
Author URI: http://tommcfarlin.com
Author Email: tom@tommcfarlin.com
License:

  Copyright 2012 Tom McFarlin (tom@tommcfarlin.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
  
*/

class Custom_Menu_Separator {
	 
	/*--------------------------------------------*
	 * Constructor
	 *--------------------------------------------*/
	
	/**
	 * Initializes the plugin by adding default actions.
	 */
	function __construct() {
	
		add_action( 'init_custom_menu_separator', array( &$this, 'add_admin_menu_separator' ) );
		add_action( 'init', array( &$this, 'set_admin_menu_separator' ) );

	} // end constructor
	
	/*--------------------------------------------*
	 * Core Functions
	 *---------------------------------------------*/
	
	/**
	 * Adds a menu separator to the administration menu at the specified position.
	 *
	 * @params	$position	Where to insert the custom separator
	 */
	function add_admin_menu_separator( $position ) {
		
		global $menu;

		// NOTE:	If using this in a production environment, this would be a good place to
		//			make sure that the $position isn't one of the existing menu items values.

		$menu[$position] = array(
			0	=>	'',
			1	=>	'read',
			2	=>	'separator' . $position,
			3	=>	'',
			4	=>	'wp-menu-separator'
		);
		
	} // end add_admin_menu_separator

	/**
	 * Executes the custom hook that we defined in the constructor for adding the separator.
	 * Passes the position of the menu separator to the custom hook.
	 */
	function set_admin_menu_separator() {
	
		// NOTE:	Because the 'Settings' menu is located at position 80, we can insert
		//		 	a separator at 79. Refer to the README for more information on
		// 			the positions of the WordPress default menu items.
		
		do_action( 'init_custom_menu_separator', 79 );
		
	} // end set_admin_menu_separator
  
} // end class

new Custom_Menu_Separator();

?>