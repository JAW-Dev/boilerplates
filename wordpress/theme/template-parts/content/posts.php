<?php
/**
 * Posts
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
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<header class="entry__header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry__title title">', '</h1>' );
		else :
			the_title( '<h2 class="entry__title title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( has_post_thumbnail() ) :
			?>
			<figure class="entry__thumbnail thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
			</figure>
			<?php
		endif;
		?>
		<div class="entry__meta meta"></div>
	</header>
	<section class="entry__content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="entry__page-links page-links">' . esc_html__( 'Pages:', 'owlp' ),
				'after'  => '</div>',
			)
		);
		?>
	</section>
</article>
