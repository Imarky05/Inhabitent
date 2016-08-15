<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full' ); ?>
						<?php endif; ?>

						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
					
					<?php echo CFS()->get( 'price' ); ?>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					
					<footer class="entry-footer">
						<?php red_starter_entry_footer(); ?>
					</footer><!-- .entry-footer -->
					<div class="entry-social-media">
						<span><a href="#"><i class="fa fa-facebook"></i>Like</a></span>
						<span><a href="#"><i class="fa fa-twitter"></i>Tweet</a></span>
						<span><a href="#"><i class="fa fa-pinterest"></i>Pin</a></span>
					</div>
				</article><!-- #post-## -->



			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_footer(); ?>
