<?php
/**
 * Constants
 *
 * @package    Project_Name
 * @subpackage Project_Name/Includes
 * @author     Project_Author
 * @copyright  Copyright (c) Project_Date, Project_Author
 * @license    GNU General Public License v2 or later
 * @version    Project_Version
 */

if ( ! defined( 'WPINC' ) ) {
	wp_die( 'No Access Allowed!', 'Error!', array( 'back_link' => true ) );
}

if ( ! defined( 'DEVELOP_THEME_VERSION' ) ) {
	define( 'DEVELOP_THEME_VERSION', '1.0.0' );
}

if ( ! defined( 'DEVELOP_THEME_DIR_URL' ) ) {
	define( 'DEVELOP_THEME_DIR_URL', get_stylesheet_directory_uri() );
}

if ( ! defined( 'DEVELOP_THEME_DIR_PATH' ) ) {
	define( 'DEVELOP_THEME_DIR_PATH', get_stylesheet_directory() );
}

if ( ! defined( 'DEVELOP_THEME_PRFIX' ) ) {
	define( 'DEVELOP_THEME_PRFIX', 'develop' );
}
