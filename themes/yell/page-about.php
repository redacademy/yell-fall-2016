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
						<div class="boxes" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="people">
					<div class="people-thumbnail">
						<a href="<?php the_permalink() ; ?> ">
							<?php the_post_thumbnail( 'large' ); ?>
						</a>
					</div>
					<div class="people-info">
						<?php the_title('<p class="people-title">'); ?>
						
					</div>
				</div>
				<?php endwhile ?>
			</div>
	</div>
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