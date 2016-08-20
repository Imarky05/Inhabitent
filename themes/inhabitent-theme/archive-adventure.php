<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="adventure-page-header">
				<h1 class="adventure-page-title">Latest Adventures</h1>
			</header><!-- .page-header -->

			<div class="adventures-container">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="adventure-wrapper">
						<div class="adventure-content">
							
							<?php the_title( sprintf( '<h2 class="adventure-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						
							<p><a href="<?php echo get_permalink() ?>" class="adventure-read-more">Read more &rarr;</a></p>

						</div>

						<div class="overlay"> 
							
						</div>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full' ); ?>
						<?php endif; ?>
						
				</div>

			<?php endwhile; ?>
			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
