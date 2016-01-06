<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big_Little_M
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Bootstrap -->
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<div id="page" class="site">
	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'custom-web-design' ); ?></a>-->

	<header> <!-- id="masthead" class="site-header" role="banner" -->
		
		<nav class="navbar navbar-default" role="navigation" ><!-- removed id="site-navigation" style="main-navigation" -->
			<div class="container-fluid">

    			<div class="navbar-header navbar-right">
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">-->
			<a class="navbar-brand" href="http://www.biglittlem.com">Big Little M</a>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'myNavbar', 'menu_class' => 'menu nav navbar-nav') ); ?>
			</div>
		</nav> <!--#site-navigation -->
		
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<h1 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h1>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

	</header> <!--#masthead -->

	<div id="content" class="site-content">
