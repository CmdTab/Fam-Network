<?php
/**
 * @package WordPress Start
 */
?>

<div class="dash-single-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>

			<?php if( get_field('podcast_file') ): ?>

				<div class="audio"><audio src="<?php the_field('podcast_file'); ?>"></audio></div>

			<?php endif; ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'start' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<strong>TYPE: </strong><?php echo get_the_term_list( $post->ID, 'type', '', ', '); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>
