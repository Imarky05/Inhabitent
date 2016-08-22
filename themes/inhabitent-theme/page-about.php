<?php
/**
 * The main template file.
 * Template Name: About Template
 * @package Inhabitent_Theme
 */

get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main about-site-main" role="main">
			<div class="about-hero-banner">
				<h1>About</h1>
			</div>
			<div class="about-container">
				<div class="about-wrapper">
					<h1>Our Story</h1>
					<p><?php echo CFS()->get( 'our_story' ); ?></p>
					<h1>Our Team</h1>
					<p><?php echo CFS()->get( 'our_team' ); ?></p>
				</div>
			</div>
			</main><!-- #main -->
		</div><!-- #primary -->
<?php get_footer(); ?>
