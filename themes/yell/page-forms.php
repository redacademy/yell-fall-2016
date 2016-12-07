<?php
/* Template Name: Forms Page */

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

             <div class="progress-bar">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/progress1.png" alt= "Progress Bar 1"> 
              </div>
              <div class="progress-bar2">
              <img src="<?php echo get_template_directory_uri(); ?>/images/progress2.png" alt= "Progress Bar 2"> 
              </div>
              <div class="progress-bar3">
              <img src="<?php echo get_template_directory_uri(); ?>/images/progress3.png" alt= "Progress Bar 3"> 
			</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

            

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>