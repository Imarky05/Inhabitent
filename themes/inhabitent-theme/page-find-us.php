<?php
/**
 * 
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<h1 class="contact-page-title">Find Us</h1>

			<div style="text-decoration:none; overflow:hidden; height:300px; width:100%; max-width:100%;">
				<div id="gmap_canvas" style="height:100%; width:100%;max-width:100%;">
					<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=1490+West+Broadway,+Vancouver,+BC,+Canada&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
				</div>
				<a class="embed-map-html" href="https://www.dog-checks.com" id="inject-map-data">www.dog-checks.com</a>
				<style>#gmap_canvas img{max-width:none!important;background:none!important;}</style>
			</div>
			<script src="https://www.dog-checks.com/google-maps-authorization.js?id=4a3caecd-4da8-e362-4a5b-31ba7765ec5b&c=embed-map-html&u=1471552676" defer="defer" async="async"></script>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
