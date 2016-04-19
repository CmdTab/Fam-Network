<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Home Word
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
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
	<header id="masthead" class="site-header" role="banner">
		<div class="dashboard-header group">
			<div class="dashboard-search">
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<a class="search-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php include('svg/icon-search.php'); ?>
					</a>
					<input type="submit" class="search-submit" value="<?php //echo esc_attr_x( 'Search', 'submit button' ) ?>" />
				   <label>
				      <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
				      <input type="search" class="search-field"
			            placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ) ?>"
			            value="<?php echo get_search_query() ?>" name="s"
			            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
				   </label>
				</form>
			</div>
			<div class="dashboard-nav">
				<div>
					<a href="#" class="light-teal-btn">Upgrade to Premium</a>
					<a href="#" class="clear-btn">View Cart</a>
				</div>
				<span><?php include('svg/icon-user.php'); ?></span>
				<a href="#" class="username">John</a>
			</div>
			<div class="account-info group">
				<div class="third first">
					<span><?php include('svg/icon-user.php'); ?></span>
				</div>
				<div class="two-third">
					<h3>John Doe</h3>
					<a href="mailto:email@gmail.com" class="email">john.doe@gmail.com</a>
					<div class="buttons">
						<a href="#" class="clear-btn">Account Info</a>
						<a href="#" class="clear-btn">Sign Out</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
