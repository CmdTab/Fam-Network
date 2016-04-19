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
			<ul class="three-list group">
				<li>
					<a href="#">
						<?php include('svg/icon-podcast.php'); ?>
						<h3>Monthly Podcast</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<?php include('svg/icon-dash-culture.php'); ?>
						<h3>Culture Update</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<?php include('svg/icon-dash-newsletter.php'); ?>
						<h3>Good Advice Newsletter</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<?php include('svg/icon-dash-marriage.php'); ?>
						<h3>Healthy Marriage Newsletter</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<?php include('svg/icon-dash-webinar.php'); ?>
						<h3>Webinar</h3>
					</a>
				</li>
			</ul>
		</div>
		<div class="training support">
			<h2><?php include('svg/icon-plus-o.php'); ?> Support</h2>
			<ul class="three-list group">
				<li>
					<a href="#">
						<?php include('svg/icon-podcast.php'); ?>
						<h3>Idea Forum</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<?php include('svg/icon-dash-thumbs.php'); ?>
						<h3>Coaching Support</h3>
					</a>
				</li>
			</ul>
		</div>
		<div class="entry-content">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'start' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'start' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
