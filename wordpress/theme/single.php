<?php
/**
 * Single
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
		get_template_part( 'template-parts/content', get_post_format() );
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
else :
	get_template_part( 'template-parts/content/none' );
endif;
get_sidebar();
get_footer();
