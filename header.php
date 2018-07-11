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
					<div class="inner-nav onepage-nav">
						<ul>
							<li><a href="#home"><span class="menu-item-span">Home</span></a></li>
							<li><a href="#profile"><span class="menu-item-span">Profile</span></a></li>
							<li><a href="#portfolio"><span class="menu-item-span">Work</span></a></li>
							<li><a href="#services"><span class="menu-item-span">Services</span></a></li>
							<li><a href="#resume"><span class="menu-item-span">Resume</span></a></li>
							<li><a href="#blog"><span class="menu-item-span">Blog</span></a></li>
							<li><a href="#contact"><span class="menu-item-span">Connect</span></a></li>
							<li class="menu-item-has-children"><a href="#"><span class="menu-item-span">Pages</span></a>
								<ul class="sub-menu">
									<li class="menu-item-has-children"><a href="#">Blog</a>
										<ul class="sub-menu">
											<li><a href="blog.html">Blog Standard</a></li>
											<li><a href="blog-masonry.html">Blog Masonry</a></li>
											<li><a href="blog-single.html">Single Post</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children"><a href="#">Portfolio</a>
										<ul class="sub-menu">
											<li><a href="portfolio-single-1.html">Portfolio 1</a></li>
											<li><a href="portfolio-single-2.html">Portfolio 2</a></li>
											<li><a href="portfolio-single-3.html">Portfolio 3</a></li>
											<li><a href="portfolio-single-4.html">Portfolio 4</a></li>
											<li><a href="portfolio-single-5.html">Portfolio 5</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="start.html"><span class="menu-item-span">All Demos</span></a></li>
						</ul>
					</div>
				</div>
				<!-- Mobile menu-->
				<div class="nav-toggle"><a href="#" data-toggle="collapse" data-target=".inner-navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></div>
			</div>
		</header>
		<!-- Header end-->





