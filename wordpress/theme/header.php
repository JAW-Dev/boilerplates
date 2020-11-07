<?php
/**
 * Header
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

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'develop' ); ?></a>
	<?php get_template_part( 'template-parts/header/header' ); ?>
	<?php
	$nav_menu = htmlspecialchars(
		wp_json_encode(
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'walker'         => new NBPL\WordPress\General\Nav_Walker(),
					'echo'           => false,
				)
			)
		),
		ENT_QUOTES
	);
	?>
	<div id="menu-one" data-component="slide-out-menu" data-type="slide-left" data-content="<?php echo esc_html( $nav_menu ); ?>"></div>
	<div id="menu-two" data-component="slide-out-menu" data-type="slide-left" data-content="<?php echo esc_html( $nav_menu ); ?>"></div>
	<main id="main" class="main" role="main">
