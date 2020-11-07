<?php
/**
 * Header
 *
 * @package    Project_Name
 * @subpackage Project_Name/Temaplate_Parts/Header
 * @author     Project_Author
 * @copyright  Copyright (c) Project_Date, Project_Author
 * @license    GNU General Public License v2 or later
 * @version    Project_Version
 */

if ( ! defined( 'WPINC' ) ) {
	wp_die( 'No Access Allowed!', 'Error!', array( 'back_link' => true ) );
}

?>

<header id="site-header" class="site-header" role="banner">
	<h1 class="site-header__branding"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
	<nav role="navigation" aria-label="Main Menu">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav>
</header>
