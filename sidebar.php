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

<div id="secondary" class="widget-area default-sidebar" role="complementary">

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home">
		<img src ="<?php bloginfo('template_directory'); ?>/_i/fam-network-logo.png">
	</a>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>shop" class="dashboard-shop">Shop</a>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account" class="dashboard-shop back">Back to Dashboard</a>

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

	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
