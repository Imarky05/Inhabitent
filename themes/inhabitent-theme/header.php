<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header">
				<div class="<?php
							if (is_front_page() || is_page_template('page-about.php') || is_singular('adventure')) {
								echo "fixed-nav-wrapper front-about-nav";
							}
							else {
								echo "fixed-nav-wrapper fixed-nav";
							}						
							?>
				">
					<div class="container nav-wrapper">
						<div class="site-branding">
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
							<a href="<?php echo home_url()?>" class="logo-link">
							<div class="nav-logo <?php
								if (is_front_page() || is_page_template('page-about.php') || is_singular('adventure')) {
									echo "front-about-logo white-logo";
								}
								else {
									echo "green-logo";
								}						
							?>">
								
							</div></a>
						</div><!-- .site-branding -->

						<nav id="site-navigation" class="main-navigation <?php
								if (is_front_page() || is_page_template('page-about.php') || is_singular('adventure')) {
									echo "front-about-main-nav white-nav-links";
								}				
							?>">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>

							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

							<?php get_search_form(); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
			<div class="content-container">
			<div class="content-wrapper">