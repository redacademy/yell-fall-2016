<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
				<h2> What is YELL</h2>
             
                <button class="more-about"> More About Yell ></button>

				<h2> Impact </h2>
				<h4> Student Impact</h4>

				 <button class="more-about"> More Results ></button>
			<div class="testimonial">
				<div class="student-name">
					</div>
			</div>
				  <button class="get-involved"> Get Involved! </button>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
