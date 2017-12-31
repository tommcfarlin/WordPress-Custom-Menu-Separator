<?php
/*
Version: 1.2.0
Author: Tom McFarlin
Author URI: http://tommcfarlin.com
Author Email: tom@tommcfarlin.com
License:

  Copyright 2012 - 2014 Tom McFarlin (tom@tommcfarlin.com)

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
		add_action( 'admin_init', array( $this, 'add_admin_menu_separator' ) );
	} // end constructor

	/*--------------------------------------------*
	 * Core Functions
	 *---------------------------------------------*/

	/**
	 * Adds a menu separator to the administration menu at the specified position.
	 *
	 * @param	int	$position	Where to insert the custom separator
	 */
	public function add_admin_menu_separator() {

		global $menu;
		$position = 76;

		/**
		 * NOTE:	If using this in a production environment, this would be a good place to
		 *			make sure that the $position isn't one of the existing menu items values.
		 */

		$menu[ $position ] = array(
			0	=>	'',							// The text of the menu item
			1	=>	'read',						// Permission level required to view the item
			2	=>	'separator' . $position,	// The ID of the menu item
			3	=>	'',							// Empty by default.
			4	=>	'wp-menu-separator'			// Custom class names for the menu item
		);
		ksort( $menu );

	} // end add_admin_menu_separator

} // end class