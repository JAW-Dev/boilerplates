<?php
/**
 * Front Page
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

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content/frontpage' );
	endwhile;
	the_posts_navigation();
else :
	get_template_part( 'template-parts/content/none' );
endif;
get_footer();
