<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Home Word
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="store">
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

<body <?php body_class(); ?>>
    <div class="site-main">
    	<header id="masthead" class="site-header" role="banner">
    		<div class="store-header group">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account" class="logo" rel="home">
            		<img src ="<?php bloginfo('template_directory'); ?>/_i/fam-network-logo.png">
            	</a>
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

    	<div id="content" class="store-content">
