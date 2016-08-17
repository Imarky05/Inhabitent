<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main front-site-main" role="main">

		<div class="hero-banner">
			<img src="<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-full.svg"?>" alt="">
		</div>


		<div class="front-page-container">
			<div class="front-page-wrapper">
				<div class="fp-journal-section">
					<h1>Inhabitent Journal</h1>

					<?php $args = array('posts_per_page' => 3); // exclude category 9?> 
					<?php $blog_posts = get_posts($args); ?>
					<?php foreach($blog_posts as $post) : setup_postdata($post); ?> 

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( array( 400, 'auto') ); ?>
						<?php endif; ?>

						<?php the_title( sprintf( '<p class="front-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>

						<?php if ( 'post' === get_post_type() ) : ?>
						<div class="front-meta">
							<?php red_starter_posted_on(); ?> / 
							<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / 
							<?php red_starter_posted_by(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>

						<span><a href="<?php echo get_permalink() ?>">Read More &rarr;</a></span>

					<?php endforeach; wp_reset_postdata();?>
				</div>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
