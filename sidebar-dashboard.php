<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package WordPress Start
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area dashboard-sidebar" role="complementary">

	<?php //dynamic_sidebar( 'sidebar-1' ); ?>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account" class="site-logo" rel="home">
		<img src ="<?php bloginfo('template_directory'); ?>/_i/fam-network-logo.png">
	</a>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>shop" class="dashboard-shop">Shop</a>

	<div class="dashboard-history">
		<a class="current-month" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>">Current Month
			<span><?php echo date("F Y"); ?></span>
			</a>
		</h2>
		<div class="month-history">
			<h2>
				<?php include('svg/icon-plus-circle.php') ?>Past Months
			</h2>
			<?php
				$terms = get_terms( array(
					'taxonomy' => 'month',
					'hide_empty' => true,
					'orderby' => 'term_id',
					'order' => 'ASC'
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
			?>
			<ul>
				<?php foreach ( $terms as $term ) : ?>
				<li>
					<a href = "<?php echo get_term_link($term); ?>"><?php include('svg/icon-plus-circle.php') ?><?php echo $term->name; ?></a>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>

			<a href="#" class="load-history">(Load More)</a>
		</div>
		<?php if( have_rows('product_ad', 'option') ): ?>
		<div class="product-feature">
			<?php while( have_rows('product_ad', 'option') ): the_row(); ?>
			<div class="side-product">
				<a href = "<?php the_sub_field('ad_url'); ?>">
					<?php
						$image = get_sub_field('ad_image');
						if( !empty($image) ):
					?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</a>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>

</div><!-- #secondary -->
