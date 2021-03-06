

<?php
/*
Template Name: Press and Stories Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="press-hero"><h1>News and Stories</h1>
<div class="white-blob">
					</div>
</div>

<div class="flexwrapper-blog">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			

			<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
			
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>
            
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<a href="#top" class="back-top" id="smoothup" title="Back to top">Back to the top ^</a>

<?php get_footer(); ?>
