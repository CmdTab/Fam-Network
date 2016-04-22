<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress Start
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		global $wp_query;
		if(is_user_logged_in() && !is_wc_endpoint_url() && !isset( $wp_query->query_vars['members_area'] )) :
	?>
	<div class="dashboard-content">
		<?php
			if( have_rows('dashboard_section') ):
				while ( have_rows('dashboard_section') ) : the_row();
					$icon = get_sub_field('section_icon');
		?>
		<div class="training dashboard-section">
			<header>
				<div>
					<?php if( !empty($icon) ): ?>
						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
					<?php endif; ?>
					<h2><?php the_sub_field('section_title'); ?></h2>
			</header>
			<?php if( have_rows('dashboard_links') ): ?>
			<ul class="three-list group">
				<?php while ( have_rows('dashboard_links') ) : the_row();
					$post_object = get_sub_field('content_post');
					$post = $post_object;
					setup_postdata( $post );
					$terms = get_the_terms( get_the_ID(), 'type');
					if( !empty($terms) ) {
						$term = array_pop($terms);
						$image = get_field('type_icon', $term );
					}
					if( get_sub_field('premium_only') ) :
						//If user is active premium member so content
						if (wc_memberships_is_user_active_member( $user_id, 'premium-membership' )):
				?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<h3><?php the_sub_field('content_title'); ?></h3>
					</a>
				</li>
					<?php
						//show lock if not active premium
						else :
					?>
				<li class="locked">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>premium-membership?add-to-cart=137">
						<img src ="<?php bloginfo('template_directory'); ?>/_i/locked.png">
						<h3><?php the_sub_field('content_title'); ?></h3>
					</a>
				</li>
					<?php
						endif;
					//Not premium content
					else :
					?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<h3><?php the_sub_field('content_title'); ?></h3>
					</a>
				</li>
			<?php endif; wp_reset_postdata(); endwhile;  ?>
			</ul>
			<?php endif; ?>
		</div>
	<?php endwhile; endif; ?>
	</div><!--dashboard-content-->
	<?php endif; ?>
	<div class="account-stuff entry-content" id="account">
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

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'start' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
