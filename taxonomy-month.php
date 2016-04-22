<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress Start
 */

 get_header('dashboard'); ?>

 	<div id="primary" class="page-dashboard page-sidebar group">

 		<main id="main" role="main">
			<?php if ( have_posts() ) : ?>

				<header class="archive-header">
					<h1 class="archive-title">
						<?php
							if ( is_category() ) :
								single_cat_title();

							elseif( is_tax() ) :
							    global $wp_query;
							    $term = $wp_query->get_queried_object();
							    echo $term->name;
							else :
								_e( 'Archives', 'start' );

							endif;
						?>
					</h1>
					<?php
						// Show an optional term description.
						$term_description = term_description();
						if ( ! empty( $term_description ) ) :
							printf( '<div class="taxonomy-description">%s</div>', $term_description );
						endif;
					?>
				</header><!-- .page-header -->

				<div class="dashboard-section dashboard-archive">
					<ul class="three-list group">
					<?php while ( have_posts() ) : the_post(); ?>
						<li>
						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', 'month' );
						?>
						</li>
					<?php endwhile; ?>

				<?php start_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer('dashboard'); ?>
