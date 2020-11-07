<?php
/**
 * Activation.
 *
 * @package    Project_Name
 * @subpackage Project_Name/Inlcudes/Classes
 * @author     Project_Author
 * @copyright  Copyright (c) Project_Date, Project_Author
 * @license    GNU General Public License v2 or later
 * @since      Project_Version
 */

namespace ProjectNamespace\Includes\Classes;

if ( ! defined( 'WPINC' ) ) {
	wp_die( 'No Access Allowed!', 'Error!', array( 'back_link' => true ) );
}

if ( ! class_exists( __NAMESPACE__ . '\\Activation' ) ) {

	/**
	 * Activation.
	 *
	 * @author Project_Author
	 * @since  Project_Version
	 */
	class Activation {

		/**
		 * Run
		 *
		 * @author Project_Author
		 * @since  Project_Version
		 *
		 * @return void
		 */
		public static function run() {
			// code...
			flush_rewrite_rules();
		}
	}
}
