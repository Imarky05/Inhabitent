<?php
/**
 * 
 * Template Name: Contact Template
 * @package Inhabitent_Theme
 */
get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<header class="entry-header">
				<?php the_title( '<h1 class="contact-page-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div style="text-decoration:none; overflow:hidden; height:300px; width:100%; max-width:100%;">
				<div id="gmap_canvas" style="height:100%; width:100%;max-width:100%;">
					<iframe style="height:100%;width:100%;border:0;" src="https://www.google.com/maps/embed/v1/place?q=1490+West+Broadway,+Vancouver,+BC,+Canada&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
				</div>
				<a class="embed-map-html" href="https://www.dog-checks.com" id="inject-map-data">www.dog-checks.com</a>
			</div>
			<script src="https://www.dog-checks.com/google-maps-authorization.js?id=4a3caecd-4da8-e362-4a5b-31ba7765ec5b&c=embed-map-html&u=1471552676" defer="defer" async="async"></script>
		
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="contact-page-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop. ?>

			<!-- <h2 class="contact-page-email-title">Send us an email!</h2> -->

			</main><!-- #main -->
		</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
