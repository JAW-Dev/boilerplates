<?php
/**
 * Find/Replace the following for the plugin. Follow the style so not to break anything.
 * Uppercase where uppercase, Spaces where spaces, Underscore where underscore, etc.
 * Delete this afterwards!
 *
 * ProjectNamespace
 * Project_Name
 * Project_Name
 * project-name
 * Project Name
 * Project Description
 * Project_Version
 * Project_Author
 * project-author
 * Project_URI
 * Project_Date
 * PROJECT_PREFIX
 */

/**
 * Plugin Name: Project Name
 * Description: Project Description
 * Version:     Project_Version
 * Author:      Project_Author
 * Author URI:  Project_URI
 * License:     GNU General Public License v2 or later
 * Text Domain: project_name
 * Domain Path: /languages
 *
 * @package    Project_Name
 * @author     Project_Author
 * @copyright  Copyright (c) Project_Date, Project_Author
 * @license    GNU General Public License v2 or later
 * @version    Project_Version
 */

namespace ProjectNamespace;

if ( ! defined( 'WPINC' ) ) {
	wp_die( 'No Access Allowed!', 'Error!', array( 'back_link' => true ) );
}

/**
 * Autoloader
 */
if ( file_exists( trailingslashit( plugin_dir_path( __FILE__ ) ) . trailingslashit( 'vendor' ) . 'autoload.php' ) ) {
	require_once trailingslashit( plugin_dir_path( __FILE__ ) ) . trailingslashit( 'vendor' ) . 'autoload.php';
}

/**
 * Constants
 */
if ( file_exists( trailingslashit( plugin_dir_path( __FILE__ ) ) . trailingslashit( 'includes' ) . 'constants.php' ) ) {
	require_once trailingslashit( plugin_dir_path( __FILE__ ) ) . trailingslashit( 'includes' ) . 'constants.php';
}

if ( ! class_exists( __NAMESPACE__ . '\\Project_Name' ) ) {

	/**
	 * Name
	 *
	 * @author Project_Author
	 * @since  Project_Version
	 */
	class Project_Name {

		/**
		 * Singleton instance of plugin.
		 *
		 * @var   static
		 * @since Project_Version
		 */
		protected static $single_instance = null;

		/**
		 * Creates or returns an instance of this class.
		 *
		 * @author Project_Author
		 * @since  Project_Version
		 *
		 * @return static
		 */
		public static function get_instance() {
			if ( null === self::$single_instance ) {
				self::$single_instance = new self();
			}

			return self::$single_instance;
		}

		/**
		 * Run
		 *
		 * @author Project_Author
		 * @since  Project_Version
		 *
		 * @return void
		 */
		public function run() {

			// Load translated strings for plugin.
			load_plugin_textdomain( 'project_name', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

			// Init Classes.
			new Includes\Classes\Init();
		}
	}
}

/**
 * Return an instance of the plugin class.
 *
 * @author Project_Author
 * @since  Project_Version
 *
 * @return Project_Name instance of plugin class.
 */
function project_name() {
	return Project_Name::get_instance();
}

if ( class_exists( 'genesis' ) ) {
	// Required to use Genesis functionality.
	add_action( 'after_setup_theme', array( project_name(), 'run' ) );
} else {
	add_action( 'plugins_loaded', array( project_name(), 'run' ) );
}


/**
 * Activation Hook
 *
 * @author Project_Author
 * @since  Project_Version
 *
 * @return void
 */
register_activation_hook( __FILE__, 'ProjectNamespace\Includes\Classes\Activation::run' );

/**
 * Deactivation Hook
 *
 * @author Project_Author
 * @since  Project_Version
 *
 * @return void
 */
register_deactivation_hook( __FILE__, 'ProjectNamespace\Includes\Classes\Deactivation::run' );
