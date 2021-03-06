<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mystery Themes
 * @subpackage Fotogenic
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) :
			if( !is_singular() ){ ?>

			<div class="entry-meta">
				<?php
					fotogenic_posted_on();
					fotogenic_posted_by();
					fotogenic_entry_footer();
				?>
			</div><!-- .entry-meta -->
		<?php } endif; ?>
	</header><!-- .entry-header -->

	<?php 
		if(!is_singular()) {
			fotogenic_post_thumbnail(); 
		}?>

	<div class="entry-content">
		<?php
		if( is_singular() ) {
			the_content();
		} else {
			the_excerpt( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fotogenic' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		}

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fotogenic' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
