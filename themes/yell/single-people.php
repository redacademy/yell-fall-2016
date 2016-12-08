<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<section id="primary" class="content-area-single-people">
		<main id="main" class="site-main-single-people" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<section class="single-people-container">
				<div class="single-people-thumb">
					<?php the_post_thumbnail( 'category-thumb'); ?>
				</div>
				<div class="single-people-content">
					<h2 class="single-people-title">
						<?php the_title();?>
					</h2>
					<p class="single-people-price">
						<?php echo CFS()->get( 'people_price' ); ?>
					</p>
					<p class="single-people-description">
						<?php the_content();?>
					</p>
					<div class="social-media-button">
						<a class="like-button" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
						<a class="tweet-button" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
						<a class="pin-button" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
					</div>
				</div>
			</section>
			<?php
			?>
				<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
	</section>>
	<!-- #primary -->
	<?php get_footer(); ?>