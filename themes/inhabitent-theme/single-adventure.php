<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main adventure-single-site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				
					
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full' ); ?>
						<?php endif; ?>

					<div class="adventure-single-post">
					<div class="adventure-single-container">
					<div class="adventure-single-wrapper">
						<?php the_title( '<h1 class="adventure-single-title">', '</h1>' ); ?>

						<div class="adventure-single-meta">
							<?php red_starter_posted_by(); ?>
						</div><!-- .adventure-single-meta -->

					<div class="adventure-single-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .adventure-single-content -->

					<footer class="adventure-single-footer">
						<?php red_starter_entry_footer(); ?>
					</footer><!-- .adventure-single-footer -->
					<div class="entry-social-media">
						<span><a href="#"><i class="fa fa-facebook"></i>Like</a></span>
						<span><a href="#"><i class="fa fa-twitter"></i>Tweet</a></span>
						<span><a href="#"><i class="fa fa-pinterest"></i>Pin</a></span>
					</div>
					</div>
					</div>
				</div><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->


<?php get_footer(); ?>
