<?php
/**
 * Init.
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

if ( ! class_exists( __NAMESPACE__ . '\\Init' ) ) {

	/**
	 * Init.
	 *
	 * @author Project_Author
	 * @since  Project_Version
	 */
	class Init {

		/**
		 * Initialize the class
		 *
		 * @author Project_Author
		 * @since  Project_Version
		 *
		 * @return void
		 */
		public function __construct() {
			$this->init_classes();
		}

		/**
		 * Init Classes
		 *
		 * @author Project_Author
		 * @since  Project_Version
		 *
		 * @return void
		 */
		public function init_classes() {
			// code...
		}
	}
}
