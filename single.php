<?php
/**
 * The template for displaying all single posts.
 *
 * @package WordPress Start
 */

 get_header('dashboard'); ?>

 	<div id="primary" class="page-dashboard page-sidebar group">

 		<main id="main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer('dashboard'); ?>
