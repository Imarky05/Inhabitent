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

			<header class="page-header-product">
				<h1>Shop Stuff</h1>
			</header><!-- .page-header -->
			
			<div class="products-container">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="product-img-wrapper">
								<a href="<?php echo get_permalink() ?>">
									<?php the_post_thumbnail( array('auto', 250) ); ?>
								</a>
							</div>
						<?php endif; ?>
						<div class="product-title-price">
							<p class="product-title"><?php the_title(); ?></p>
							<p></p>
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
