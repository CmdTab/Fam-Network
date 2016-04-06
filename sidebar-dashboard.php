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

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home">
		<img src ="<?php bloginfo('template_directory'); ?>/_i/fam-network-logo.png">
	</a>

	<a href="#" class="dashboard-shop">Shop</a>

	<div class="dashboard-history">
		<a href="#" class="current-month">
			Current Month
			<span>March, 2016</span>
		</a>
		<div class="month-history">
			<ul>
				<li class="header">Past Months</li>
				<li>March, 2016</li>
				<li>February, 2016</li>
				<li>January, 2016</li>
				<li>December, 2015</li>
				<li>November, 2015</li>
			</ul>
			<a href="#" class="load-history">(Load More)</a>
		</div>
		<div class="feature-product">
			<img src="http://placehold.it/100x150" />
			<h4>Should I Just Smash My Kids Phone</h4>
			<p>by Doug Fields</p>
			<p>$14.99</p>
		</div>
	</div>

</div><!-- #secondary -->
