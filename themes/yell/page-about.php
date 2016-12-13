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
				<div class="white-blob">
			 
			 </div>
			</div>
			<div class="aboutpg-bg1">
				<div class="aboutpg-bg2">
					<div class="aboutpg-bg3">
						<section class="about-text">
							<div class="about-content-container">
								<h2>About</h2>
								<div class="our-mission">
									<h3>Our Mission</h3>
									
									<p>
										<?php echo CFS()->get( 'our_mission' ); ?>
									</p>
								</div>
								<h3>Our Story</h3>
								<p>
									<?php echo CFS()->get( 'our_story' ); ?>
								</p>
							</div>
						</section>
						<h2 class="about-pg-our-team">Our Team</h2>
						<section class="people-post">
							<?php
								$args = array( 'post_type' => 'people_type',
												'order' => 'ASC',
												'posts_per_page'=> 6);
								$posts = get_posts( $args ); // returns an array of posts
							?>
								<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
								<div class="each-person">
									<?php the_post_thumbnail(); ?>
									<p class="the-title">
										<?php the_title(); ?>
									</p>
									<p class="people-position">
										<?php echo CFS()->get( 'person_position' ); ?>
									</p>
									<a class="about-read-more" href="<?php echo the_permalink();?>">READ MORE ></a>
								</div>
					
					<?php endforeach; wp_reset_postdata(); ?>
					</section>
					<div class="aboutpage-button">
						<h2>Want to learn more?</h2>
						<div class="about-btns">
							<a href="<?php echo esc_url( site_url( '/contact/' ) ); ?>" rel="contact"><button class="contact-us"> Contact Us ></button></a>
							<a href="<?php echo esc_url( site_url( '/program/' ) ); ?>" rel="program"><button class="programs"> Programs ></button></a>
						</div>
					</div>
				</div>
			</div>
	</div>
	</main>
	<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>