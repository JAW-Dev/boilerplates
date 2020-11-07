<?php
/**
 * ClassName.
 *
 * @package    Develop
 * @subpackage Develop/Inlcudes/Classes
 * @author     Objectiv
 * @copyright  Copyright (c) Project_Date, Objectiv
 * @license    GNU General Public License v2 or later
 * @since      1.0.0
 */

namespace ProjectNamespace\Includes\Classes;

if ( ! defined( 'WPINC' ) ) {
	wp_die( 'No Access Allowed!', 'Error!', array( 'back_link' => true ) );
}

if ( ! class_exists( __NAMESPACE__ . '\\ClassName' ) ) {

	/**
	 * ClassName.
	 *
	 * @author Jason Witt
	 * @since  Project_Version
	 */
	class ClassName {

		/**
		 * Initialize the class
		 *
		 * @author Jason Witt
		 * @since  Project_Version
		 *
		 * @return void
		 */
		public function __construct() {}
	}
}
