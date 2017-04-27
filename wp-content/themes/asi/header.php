<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */

?><!DOCTYPE html>
<!--[if lte IE 8]> <html class="no-js lt-ie10 lt-ie9 oldie" <?php language_attributes() ?>> <![endif]-->
<!--[if IE 9]> <html class="no-js lt-ie10 oldie" <?php language_attributes() ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes() ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://use.fontawesome.com/0ca6671226.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800i|Roboto" rel="stylesheet">
<!-- <link rel="shortcut icon" href="<?php //echo get_stylesheet_directory_uri(); ?>/favicon.ico" /> -->

<?php 
wp_head(); 
$imagedir = get_stylesheet_directory_uri() . "/assets/img";
?>
</head>

<body <?php body_class(); ?>>

<div class="breakpoint-context"></div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="header" class="header" role="banner">
		<div class="header__container">
			<a href="/#" class="site-branding nav-item">
				<img class="desktop-logo" src="<?php echo $imagedir ?>/asi-logo-dark.png"/>
			</a>
			<nav id="site-navigation" class="nav-item" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
			<div class="site-action nav-item">
				<a class="button" href="/#contact">Contact Us</a>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">

