<?php
/**
 * Comments
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
<section id="comments" class="comments">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments__title">
			<?php
			if ( function_exists( 'owpl_get_comments_title' ) ) :
				owpl_get_comments_title();
			endif;
			?>
		</h2>
		<?php
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
			get_template_part( 'template-parts/content-comments', 'navigation' );
		endif;
		?>
		<ol class="comment__list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>
		<?php
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
			get_template_part( 'template-parts/content/content-comments' );
		endif;
		?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="comments__none">
				<?php esc_html_e( 'Comments are closed.', '_s' ); ?>
			</p>
		<?php endif; ?>
		<?php comment_form(); ?>
	<?php endif; ?>
</section>
