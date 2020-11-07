<?php
/**
 * Plugin Constants.
 *
 * @package    Project_Name
 * @subpackage Project_Name/Inlcudes
 * @author     Project_Author
 * @copyright  Copyright (c) Project_Date, Project_Author
 * @license    GNU General Public License v2 or later
 * @since      Project_Version
 */

if ( ! defined( 'PROJECT_PREFIX_VERSION' ) ) {
	define( 'PROJECT_PREFIX_VERSION', 'Project_Version.' );
}

if ( ! defined( 'PROJECT_PREFIX_DIR_URL' ) ) {
	define( 'PROJECT_PREFIX_DIR_URL', trailingslashit( plugin_dir_url( dirname( __FILE__ ) ) ) );
}

if ( ! defined( 'PROJECT_PREFIX_DIR_PATH' ) ) {
	define( 'PROJECT_PREFIX_DIR_PATH', trailingslashit( plugin_dir_path( dirname( __FILE__ ) ) ) );
}

if ( ! defined( 'PROJECT_PREFIX_PRFIX' ) ) {
	define( 'PROJECT_PREFIX_PRFIX', 'Project_Name' );
}
