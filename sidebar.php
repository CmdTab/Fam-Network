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

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>shop" class="dashboard-shop back">Back to Dashboard</a>

	<div class="product-feature">
		<img src="http://placehold.it/100x150" />
		<h4>Should I Just Smash My Kids Phone</h4>
		<p>by Doug Fields</p>
		<p>$14.99</p>
	</div>

	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
