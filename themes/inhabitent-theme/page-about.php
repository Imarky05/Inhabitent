<?php
/**
 * The main template file.
 * Template Name: About Template
 * @package Inhabitent_Theme
 */

get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main about-site-main">
			<div class="about-hero-banner">
				<h1>About</h1>
			</div>
			<div class="about-container">
				<div class="about-wrapper">
					<h1>Our Story</h1>
					<?php echo CFS()->get( 'our_story' ); ?>
					<h1>Our Team</h1>
					<?php echo CFS()->get( 'our_team' ); ?>
				</div>
			</div>
			</main><!-- #main -->
		</div><!-- #primary -->
<?php get_footer(); ?>
