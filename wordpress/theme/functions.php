<?php
/**
 * Project Name
 *
 * @package   Project_Name
 * @author    Project_Author
 * @copyright Copyright (c) Project_Date, Project_Author
 * @license   GNU General Public License v2 or later
 * @version   Project_Version
 */

if ( ! defined( 'WPINC' ) ) {
	wp_die( 'No Access Allowed!', 'Error!', array( 'back_link' => true ) );
}

/**
 * Autoload.
 */
if ( file_exists( trailingslashit( get_stylesheet_directory() ) . 'vendor/autoload.php' ) ) {
	require_once trailingslashit( get_stylesheet_directory() ) . 'vendor/autoload.php';
}

/**
 * Constants
 */
if ( file_exists( trailingslashit( get_stylesheet_directory() ) . 'includes/constant.php' ) ) {
	require_once trailingslashit( get_stylesheet_directory() ) . 'includes/constantphp';
}

/**
 * Init Classes
 */
new ProjectNamespace\Includes\Classes\Init();
