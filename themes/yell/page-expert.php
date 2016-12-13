<?php
/* Template Name: Expert Page */

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="expert-hero">
				<h1>A bright future for all Canadian communities</h1>
				<div class="white-blob">
					</div>
			</div>
			<div class="homepg-bg1">
				<div class="homepg-bg3">
					<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php endwhile; // End of the loop. ?>
					<h2> Be an Expert</h2>
					<!--testimonial section-->
					<div class="testimonial-flex">
						<div class="testimonial-wrapper">
							<div class="testimonial">
								<img src="	<?php echo CFS()->get ('testimonial_1_image') ;  ?>" class="testimonial-img">
								<p>
									<?php echo CFS()->get( 'testimonial_1_text' ); ?>
								</p>
								<div class="student-name">
								<?php echo CFS()->get( 'testimonial_1_name' ); ?>
							</div>
							</div>
							
						</div>
						<div class="testimonial-wrapper2">
							<div class="testimonial">
								<img src="	<?php echo CFS()->get ('testimonial_2_image') ;  ?>" class="testimonial-img">
								<p>
									<?php echo CFS()->get( 'testimonial_2_text' ); ?>
								</p>
								<div class="student-name">
								<?php echo CFS()->get( 'testimonial_2_name' ); ?>
							</div>
							</div>
							
						</div>
						<div class="testimonial-wrapper3">
							<div class="testimonial">
								<img src="	<?php echo CFS()->get ('testimonial_3_image') ;  ?>" class="testimonial-img">
								<p>
									<?php echo CFS()->get( 'testimonial_3_text' ); ?>
								</p>
								<div class="student-name">
								<?php echo CFS()->get( 'testimonial_3_name' ); ?>
							</div>
							</div>
							
						</div>
					</div>
					<!--end of testimonial section-->
					<div class="eds-animate animated pulse" data-eds-entry-animation="pulse" data-eds-entry-delay="0" data-eds-entry-duration="0.5" data-eds-entry-timing="linear" data-eds-exit-animation="" data-eds-exit-delay="" data-eds-exit-duration="" data-eds-exit-timing="" data-eds-repeat-count="1" data-eds-keep="yes" data-eds-animate-on="scroll" data-eds-scroll-offset="75" style="animation-duration: 0.5s; animation-delay: 0s; animation-timing-function: linear; animation-iteration-count: 1;">

					<div class="expert-info">
		
						<p><?php echo CFS()->get( 'expert_paragraph' ); ?></p>
					</div>
					</div>
					<div class="expert-wrapper">
						<div class="speaker-btn">Guest Speakers at YELL
						</div>
						<div class="speaker-info">
							<div class="speaker-infom">
								<h2>Guest Speakers at YELL
								</h2>
								<?php echo CFS()->get( 'guest_speakers_at_yell' ); ?>
							</div>
							
							<a href="<?php echo esc_url( site_url( '/get-involved/' ) ); ?>" rel="get-involved"><button class="get-involved"> Be a guest speaker! </button></a>
						</div>
						<div class="mentor-btn">
							Mentors at YELL
						</div>
						<div class="mentor-info">
							<h2> Mentors at YELL</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/images/mentor.png" alt="mentor chart" class="mentor-chart">
							<p> We believe that mentoring with YELL will be a positive and enriching experience for you. Specifically, we hope you
								will:</p>
							<ul class="mentor-ul">
								<li> Refine your coaching and mentoring skills</li>
								<li>Develop meaningful connections with students</li>
								<li>Support the development of future leaders in your community </li>
								<li>Learn about the YELL organization and the next generation of entrepreneurs </li>
								<li> Expand your professional network </li>
							</ul>
							<a href="<?php echo esc_url( site_url( '/mentor-form/' ) ); ?>" rel="mentor form"><button class="get-involved"> Be a YELL Mentor! </button></a>
						</div>
					</div>
					<div class="teacher-btn">
						Details For Teachers
					</div>
					<div class="teacher-info">
						<div class="what-yell">
							<?php echo CFS()->get( 'what_yell' ); ?>
						</div>
						<?php
			$props = CFS()->get_field_info( 'yell_program' );
			echo '<h3>' . $props['label'] . '</h3>';
			?>
							<div class="yell-program">
								<?php echo CFS()->get( 'yell_program' ); ?>
							</div>
							<h2> Program Structure</h2>
							<div class="expert-wrapper">
								<div class="program">
									<img src="<?php echo get_template_directory_uri(); ?>/images/guage.png" alt="accelerator">
									<h3> Business Accelerator</h3>
									<h5> Fall Semester</h5>
									<?php echo CFS()->get( 'fall' ); ?>
								</div>
								<div class="program">
									<img src="<?php echo get_template_directory_uri(); ?>/images/idea-incubator.png" alt="brain">
									<h3> Idea Incubator</h3>
									<h5> Winter Semester</h5>
									<?php echo CFS()->get( 'winter' ); ?>
								</div>
								<div class="program">
									<img src="<?php echo get_template_directory_uri(); ?>/images/fish.png" alt="fish bowls">
									<h3> Venture Challenge</h3>
									<h5> Spring Semester</h5>
									<?php echo CFS()->get( 'spring' ); ?>
								</div>
							</div>
							<a href="<?php echo esc_url( site_url( '/contact/' ) ); ?>" rel="contact"><button class="get-involved"> Contact us to find out more </button></a>
					</div>
		</main>
		</div>
		</div>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>