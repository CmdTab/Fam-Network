<?php
/**
 * The template for displaying all single posts.
 *
 * @package WordPress Start
 */

?>

	<div id="primary" class="content-area page-dashboard group">

		<?php get_sidebar('dashboard'); ?>

		<main id="main" class="site-main dashboard-main" role="main">


			<?php get_header('dashboard'); ?>


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer('dashboard'); ?>