<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header-product">
				<h1>Shop Stuff</h1>
				<div class="product-category-container">
					<?php 
						$args = array('taxonomy' => 'product-type','hide_empty' => true,);
						$terms = get_terms($args);
					?>
					<?php foreach ($terms as $term) : ?>
								<a href="<?php echo get_term_link($term); ?>">
									<?php echo $term->name; ?>
								</a>
					<?php endforeach; ?>
					
				</div>
			</header><!-- .page-header -->
			
			<div class="products-container">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="screen-reader-text"><?php the_title(); ?></h2>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="product-img-wrapper">
								<a href="<?php echo get_permalink() ?>">
									<?php the_post_thumbnail( array('auto', 250) ); ?>
								</a>
							</div>
						<?php endif; ?>
						<div class="product-title-price">
							<p class="product-title"><?php the_title(); ?></p>
							<p class="product-dots">.................................................................</p>
							<p class="product-price"><?php echo CFS()->get( 'price'); ?></p>
						</div>
				</article><!-- #post-## -->

			<?php endwhile; ?>
			
			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
