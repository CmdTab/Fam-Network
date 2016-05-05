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
					<ul class="dashboard-list three-list group">
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
		<div class="dashboard-content global-content">
				<?php
					if( have_rows('global_icons' , 'option') ):
						while ( have_rows('global_icons' , 'option') ) : the_row();
							$icon = get_sub_field('global_section_icon' , 'option');
				?>
				<div class="training dashboard-section">
					<header>
						<div>
							<?php if( !empty($icon) ): ?>
								<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
							<?php endif; ?>
							<h2><?php the_sub_field('global_section_title' , 'option'); ?></h2>
					</header>
					<?php if( have_rows('global_dashboard_links' , 'option') ): ?>
					<ul class="dashboard-list three-list group">
						<?php while ( have_rows('global_dashboard_links' , 'option') ) : the_row();
							$override = get_sub_field('global_content_icon' , 'option');
							$post_object = get_sub_field('global_content_post' , 'option');
							$post = $post_object;
							setup_postdata( $post );
							$terms = get_the_terms( get_the_ID(), 'type');
							if( !empty($terms) ) {
								$term = array_pop($terms);
								$image = get_field('global_content_icon' , 'option' , $term );
							}
							if( get_sub_field('global_premium_only') ) :
								//If user is active premium member so content
								if (wc_memberships_is_user_active_member( $user_id, 'premium-membership' )):
						?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<?php if ( !empty($override) ) { ?>
								<img src="<?php echo $override['url']; ?>" alt="<?php echo $override['alt']; ?>" />
								<?php } else { ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php } ?>
								<h3><?php the_sub_field('global_content_title' , 'option'); ?></h3>
							</a>
						</li>
							<?php
								//show lock if not active premium
								else :
							?>
						<li class="locked">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>premium-membership?add-to-cart=7324">
								<img src ="<?php bloginfo('template_directory'); ?>/_i/locked.png">
								<h3><?php the_sub_field('global_content_title' , 'option'); ?></h3>
							</a>
						</li>
							<?php
								endif;
							//Not premium content
							else :
							?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<?php if ( !empty($override) ) { ?>
								<img src="<?php echo $override['url']; ?>" alt="<?php echo $override['alt']; ?>" />
								<?php } else { ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php } ?>
								<h3><?php the_sub_field('global_content_title' , 'option'); ?></h3>
							</a>
						</li>
					<?php endif; wp_reset_postdata(); endwhile;  ?>
					</ul>
					<?php endif; ?>
				</div>
			<?php endwhile; endif; ?>
		</div><!--dashboard-content-->
	</section><!-- #primary -->

<?php get_footer('dashboard'); ?>
