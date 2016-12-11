<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<section id="primary" class="content-area-single-people">
		<main id="main" class="site-main-single-people" role="main">
			<!--<?php while ( have_posts() ) : the_post(); ?>-->

			<div class="single-people-container">

				<div class="single-people-thumb">
					<?php the_post_thumbnail(); ?>
						<h2 class="single-people-title">
						<?php the_title();?>
						</h2>
						<p class="people-position"><?php echo CFS()->get( 'person_position' ); ?></p>

					<p class="single-people-description">
						
						<p><?php echo CFS()->get( 'person_description' ); ?></p>
					</p>
				</div>
				
			</section>
				<!--<?php endwhile; // End of the loop. ?>-->
		</main>
		<!-- #main -->
	</section>
	<!-- #primary -->
	<?php get_footer(); ?>