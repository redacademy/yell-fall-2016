<?php
/* Template Name: About Page */

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="about-hero">
				<h1>Learn Develop Engage</h1>
			</div>
			<div class="homepg-bg1">
				<div class="homepg-bg2">
					<div class="homepg-bg3">
						<?php echo CFS()->get( 'Want to learn more?' ); ?>
						<?php if (have_posts()) : ?>
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
						<div class="aboutpage-button">
							<button class="contact-us"> Contact Us ></button>
							<button class="programs"> Programs ></button>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>