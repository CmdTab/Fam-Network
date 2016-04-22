<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Home Word
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="backend">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon"
      type="image/png"
      href="<?php bloginfo('template_directory'); ?>/_i/favicon.png">
<?php wp_head(); ?>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/mediaelementplayer.css" />
<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory'); ?>/_js/html5shiv.js"></script>
<![endif]-->
</head>

<body <?php if(is_user_logged_in()) {body_class('group');} else{ body_class('need-login'); } ?>>
    <div id="secondary" class="widget-area backend-sidebar" role="complementary">

    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account" class="logo" rel="home">
    		<img src ="<?php bloginfo('template_directory'); ?>/_i/fam-network-logo.png">
    	</a>

    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>shop" class="dashboard-shop">Shop</a>

    	<div class="dashboard-history">
            <?php
                if(is_single()) :
                    $postType = get_post_type();
                    $current_tax = get_the_terms( $post->ID, 'type' );
                    $TypeTax = $current_tax[0]->slug;
                    $TypeName = $current_tax[0]->name;
                    $args = array(
                        'numberposts' => '5',
                        'post_type' => $postType,
                        'post__not_in' => array( $post->ID ),
                        'tax_query' => array(
                			array(
                				'taxonomy' => 'type',
                				'field' => 'slug',
                				'terms' => $TypeTax,
                			)
                        ),
                    );
                	$recent_posts = wp_get_recent_posts( $args );
                    if(!empty($recent_posts)) {
                        echo '<div class="recent-sidebar">';
                        echo '<h2>More ' . $TypeName . '</h2>';
                        echo '<ul>';
                        foreach( $recent_posts as $recent ){
                            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"].'</a> </li> ';
                        }
                        echo '</ul>';
                        echo '</div>';
                    }
            ?>
            <?php else: ?>
    		<a class="<?php if(is_wc_endpoint_url() || isset( $wp_query->query_vars['members_area'] )) { echo 'no-bubble';} ?> current-month" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>">Current Month
    			<span><?php echo date("F Y"); ?></span>
    			</a>
    		</h2>
    		<div class="month-history">
    			<h2>
    				Past Months
    			</h2>
    			<?php
    				$terms = get_terms( array(
    					'taxonomy' => 'month',
    					'hide_empty' => true,
    					'orderby' => 'term_id',
                        'order' => 'DESC'
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
            <?php endif; ?>
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
    <div class="site-main">
    	<header id="masthead" class="site-header" role="banner">
    		<div class="dashboard-header group">
    			<div class="dashboard-search">
                   <?php get_search_form(); ?>
    			</div>
                <?php $current_user = wp_get_current_user(); ?>
    			<div class="dashboard-nav">
    				<div>
    					<?php if (!wc_memberships_is_user_active_member( $user_id, 'premium-membership' )): ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>premium-membership?add-to-cart=137" class="light-teal-btn">Upgrade to Premium</a>
                        <?php endif; ?>
                        <a class="cart-contents clear-btn" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php include('svg/icon-user.php'); ?><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
    				</div>
    				<span><?php include('svg/icon-user.php'); ?></span>
    				<a href="#" class="username"><?php echo $current_user->user_firstname; ?></a>
    			</div>
    			<div class="account-info group">
    				<div class="third first">
    					<span><?php include('svg/icon-user.php'); ?></span>
    				</div>
    				<div class="two-third">
    					<h3><?php echo $current_user->user_firstname; ?></h3>
    					<span class="email"><?php echo $current_user->user_email; ?></span>
    					<div class="buttons">
    						<a href="#account" class="clear-btn">Account Info</a>
    						<a href="<?php echo wp_logout_url( home_url() ); ?>" class="clear-btn">Sign Out</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</header><!-- #masthead -->

    	<div id="content" class="backend-content">
