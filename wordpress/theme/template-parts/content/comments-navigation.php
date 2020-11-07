<?php
/**
 * Comments Navigation
 *
 * @package    Project_Name
 * @subpackage Project_Name/Temaplate_Parts/Content
 * @author     Project_Author
 * @copyright  Copyright (c) Project_Date, Project_Author
 * @license    GNU General Public License v2 or later
 * @version    Project_Version
 */

if ( ! defined( 'WPINC' ) ) {
	wp_die( 'No Access Allowed!', 'Error!', array( 'back_link' => true ) );
}

?>
<nav id="comments-nav" class="comments__navigation" role="navigation">
	<h2 class="comments__heading screen-reader-text">
		<?php esc_html_e( 'Comment navigation', 'owpl' ); ?>
	</h2>
	<div class="comments__navigation-links">
		<div class="comments__navigation-previous">
			<?php previous_comments_link( esc_html__( 'Older Comments', 'owpl' ) ); ?>
		</div>
		<div class="comments__navigation-next">
			<?php next_comments_link( esc_html__( 'Newer Comments', 'owpl' ) ); ?>
		</div>
	</div>
</nav>
