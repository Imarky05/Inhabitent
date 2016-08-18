<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
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

			<header id="masthead" class="site-header" role="banner">
				<div class="<?php
							if (is_front_page() || is_page_template('page-about.php')) {
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
							<a href="<?php echo home_url()?>" class="logo-link"><img src="<?php
							if (is_front_page() || is_page_template('page-about.php')) {
								echo get_template_directory_uri() . "/images/logos/inhabitent-logo-tent-white.svg";
							}
							else {
								echo get_template_directory_uri() . "/images/logos/inhabitent-logo-tent.svg";
							}						
							?>" alt="Home Page" class="nav-logo"/></a>
						</div><!-- .site-branding -->

						<nav id="site-navigation" class="main-navigation <?php
								if (is_front_page() || is_page_template('page-about.php')) {
									echo "front-about-main-nav page-link";
								}				
							?>" 
							role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>

							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

							<fieldset>
								<a href="#" class="toggle-search">
									<i class="fa fa-search"></i>
								</a>
								<label class="nav-search-label">
									<input type="search" name="search" placeholder="Type and hit enter" class="nav-search">
								</label>
							</fieldset>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
			<div class="content-container">
			<div class="content-wrapper">
