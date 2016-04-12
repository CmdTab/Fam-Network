<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress Start
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="dashboard-content">

		<div class="training">
			<h2><?php include('svg/icon-light.php'); ?> Training</h2>
		</div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
