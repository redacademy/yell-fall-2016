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
			<div class="aboutpg-bg1">
				<div class="aboutpg-bg2">
					<div class="aboutpg-bg3">
						<section class="about-text">
							<h2>. About .</h2>
							<h2>Our Mission</h2>
							<?php echo CFS()->get( 'our_mission' ); ?>
							<h2>Our Story</h2>
							<?php echo CFS()->get( 'our_story' ); ?>
						</section>
						<h2>. Our Team .</h2>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="people-post">

							<?php endwhile; ?>
							<?php
								$args = array( 'post_type' => 'people_type', 'posts_per_page' => 10 ); 
								$loop = new WP_Query( $args ); 
								while ( $loop->have_posts()) : $loop->the_post(); 
								echo '<div class="post-thumbnail">'; 
								the_post_thumbnail( $size = 'post-thumbnail', $attr = '');
								echo '</div>'; 
								the_title();?>
								<?php echo CFS()->get( 'person_position' ); ?>
								<?php endwhile; ?>
						</div>
						<div class="aboutpage-button">
							<h2>Want to learn more?</h2>
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