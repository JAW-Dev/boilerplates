<?php
/**
 * Template.
 *
 * @package    Project_Name
 * @subpackage Project_Name/Includes/Functions
 * @author     Project_Author
 * @copyright  Copyright (c) Project_Date, Project_Author
 * @license    GNU General Public License v2 or later
 * @since      Project_Version
 */

if ( ! defined( 'WPINC' ) ) {
	wp_die( 'No Access Allowed!', 'Error!', array( 'back_link' => true ) );
}

if ( ! function_exists( 'Project_Name_template' ) ) {
	/**
	 * Template.
	 *
	 * @author Project_Author
	 * @since  Project_Version
	 *
	 * @return void
	 */
	function Project_Name_template() {
		echo 'This is an example function template tag';
	}
}
