<?php
/**
 * Frontpage
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
<section id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<header class="entry__header">
		<?php the_title( '<h1 class="entry__title title">', '</h1>' ); ?>
	</header>
	<section class="entry__content">
	<div class="test"></div>test
		<?php the_content(); ?>
	</section>
</section>
