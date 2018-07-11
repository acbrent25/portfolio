<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adam_Champagne
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'adam-champagne' ); ?></a>

	<!-- ******************* The Navbar Area ******************* -->
		<!-- Header-->
		<header class="header header-center">
			<div class="container-fluid">
				<!-- Brand-->
				<div class="inner-header"><a class="inner-brand" href="index.html"><img class="brand-dark" src="assets/images/logo.png" width="30px" alt=""><img class="brand-light" src="assets/images/logo-light.png" width="30px" alt=""></a></div>
				<!-- Navigation-->
				<div class="inner-navigation collapse">
					

          <?php wp_nav_menu( array(
            'theme_location'  => 'menu-1',
            'container_class'      => 'inner-nav onepage-nav',
          ) ) ?>
				</div>
        
				<!-- Mobile menu-->
				<div class="nav-toggle"><a href="#" data-toggle="collapse" data-target=".inner-navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></div>
			</div>
		</header>
		<!-- Header end-->





