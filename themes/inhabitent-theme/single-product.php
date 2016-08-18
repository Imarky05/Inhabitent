<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main single-product-site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="single-product-img">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full' ); ?>
						<?php endif; ?>
					</div>
					<div class="single-product-content">
						<?php the_title( '<h1 class="single-product-title">', '</h1>' ); ?>
						<h2 class="single-product-price"><?php echo CFS()->get( 'price' ); ?></h2>
						<?php the_content(); ?>
						<div class="entry-social-media">
							<span><a href="#"><i class="fa fa-facebook"></i>Like</a></span>
							<span><a href="#"><i class="fa fa-twitter"></i>Tweet</a></span>
							<span><a href="#"><i class="fa fa-pinterest"></i>Pin</a></span>
						</div>
					</div>
					
				</article><!-- #post-## -->



			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_footer(); ?>
