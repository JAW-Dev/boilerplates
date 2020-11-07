<?php
/**
 * Content None
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
<section class="error-404">
	<header class="error-404__header header">
		<h1 class="error-404__title title">Nothing here yet!</h1>
	</header>
	<section class="error-404__content content">
		<?php get_search_form(); ?>
	</section>
</section>
