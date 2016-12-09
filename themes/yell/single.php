<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class='single-post-wrapper'>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<?php endwhile; // End of the loop. ?>
			</div>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>