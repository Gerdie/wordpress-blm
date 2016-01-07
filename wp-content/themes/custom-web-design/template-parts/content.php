<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Big_Little_M
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
		<?php
			if ( is_single() ) {
				the_title( '<h2 class="entry-title blog-blm">', '</h2>' );
			} else {
				the_title( '<h2 class="entry-title blog-blm"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<!-- <?php custom_web_design_posted_on(); ?> -->
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

if ( is_single() ) {
		
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'custom-web-design' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'custom-web-design' ),
				'after'  => '</div>',
			) );
			} else {
				
				the_excerpt();
				echo '<a href="' . get_permalink() . '" title="' . __('Read more ', 'custom-web-design') . get_the_title() . '" rel="bookmark" class="read-more">Read more</a>';

				
			}
				
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php custom_web_design_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
