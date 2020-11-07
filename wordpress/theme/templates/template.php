<?php
/**
 * Develop Theme
 *
 * @package    Project_Name
 * @subpackage Project_Name/Temaplates
 * @author     Project_Author
 * @copyright  Copyright (c) Project_Date, Project_Author
 * @license    GNU General Public License v2 or later
 * @version    Project_Version
 *
 * Template Name: Template
 * Template Post Type: post, page
 */

if ( ! defined( 'WPINC' ) ) {
	wp_die( 'No Access Allowed!', 'Error!', array( 'back_link' => true ) );
}

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content/posts', get_post_format() );
	endwhile;
	the_posts_navigation();
else :
	get_template_part( 'template-parts/content/none' );
endif;
get_footer();
