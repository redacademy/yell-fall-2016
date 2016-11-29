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
              <div class="btn-div"> 
                <button class="bluebtn"> More About Yell</button>
              </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
