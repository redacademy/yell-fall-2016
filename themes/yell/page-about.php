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
			 <div class="white-blob">
			   <img src="<?php echo get_template_directory_uri(); ?>/images/white-blob-desktop.png" alt= "White Blob">  
			 </div>
			</div>	
			<div class="homepg-bg1">
				<div class="homepg-bg2">
					<div class="homepg-bg3">
						<?php echo CFS()->get( 'Want to learn more?' ); ?>
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