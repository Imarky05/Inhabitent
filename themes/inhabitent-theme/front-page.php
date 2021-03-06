<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main front-site-main">

		<div class="hero-banner">
			<img src="<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-full.svg"?>" alt="">
		</div>


		<div class="front-page-container">
			<div class="front-page-wrapper">
				<div class="fp-product-section">
					<div class="fp-product-wrapper">
						<h2>Shop Stuff</h2>
						<ul>
							<?php $args = array(
								'taxonomy' => 'product-type',
								'hide_empty' => true,
							);
							$terms = get_terms($args);
							?>

							<?php foreach ($terms as $term) : ?>
								<li>
									<img src="<?php echo get_template_directory_uri() . "/images/product-type-icons/".$term->slug.".svg"?>" alt="">
									<p><?php echo $term->description ?></p>
										<a class="fp-product-button" href="<?php echo get_term_link($term); ?>">
											<?php echo $term->name. ' Stuff' ?>
										</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>

				<div class="fp-journal-section">
					<h2>Inhabitent Journal</h2>
					<div class="fp-journal-post-wrapper">
						<?php $args = array('posts_per_page' => 3); // exclude category 9?> 
						<?php $blog_posts = get_posts($args); ?>
						<?php foreach($blog_posts as $post) : setup_postdata($post); ?>
							<div class="fp-journal-post">
								<div class="fp-journal-img">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( array( 'auto' , 250 ) ); ?>
									<?php endif; ?>
								</div>
								<div class="fp-journal-info">
									<?php if ( 'post' === get_post_type() ) : ?>
									<div class="front-meta">
										<?php red_starter_posted_on(); ?> / 
										<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
									</div><!-- .entry-meta -->
									<?php endif; ?>

									<?php the_title( sprintf( '<p class="front-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>

									<span class="fp-journal-read-more"><a href="<?php echo get_permalink() ?>">Read More &rarr;</a></span>
								</div>
							</div>
						<?php endforeach; wp_reset_postdata();?>
					</div>
				</div>
				<div class="fp-adventure-section">
					<h2>Latest Adventures</h2>
					<div class="fp-adventure-wrapper">
						<?php 
							$args = array('post_type' => 'adventure');
							$loop = new WP_Query( $args );
						?>
						<ul class="">
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<li>
								<div class="adventure-content">

								<h3 class="fp-adventure-title"><a href="<?php echo get_permalink() ?>">
								<?php the_title(); ?></a></h3>
								<p><a href="<?php echo get_permalink() ?>" class="adventure-read-more">Read more &rarr;</a></p>

								</div>

								<div class="fp-adventure-img">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>
								<div class="overlay">
								</div>
								</div>
								
							</li>
						<?php endwhile; wp_reset_postdata();?>
						</ul>

						<p><a href="<?php echo get_post_type_archive_link( 'adventure' ) ?>" class="fp-more-adventure">More Adventures</a></p>

					</div>
				</div>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
