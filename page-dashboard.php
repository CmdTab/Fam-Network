<?php
/**
 * Template Name: Dashboard
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress Start
 */

?>

	<div id="primary" class="content-area page-sidebar group">

		<?php get_sidebar('dashboard'); ?>

		<main id="main" class="site-main dashboard-main" role="main">

			<?php get_header('dashboard'); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'dashboard' ); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			<?php //get_footer(); ?>

		</main><!-- #main -->

	</div><!-- #primary -->



