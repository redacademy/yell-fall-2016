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
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>
			<div class="testimonial-flex">
				<div class="testimonial-wrapper">
					<div class="testimonial">
						<?php $fields=CFS()->get( 'testimonial' );
							foreach ( $fields as $field ) { ?>
						<?php echo '<img src="' . $field['testimonial_image'] . '" class="testimonial-img">';  ?>
						<p>
							<?php echo $field['testimonial_text'];  ?>
						</p>
					</div>
					<div class="student-name">
						<?php echo $field['testimonial_name']; } ?>
					</div>
				</div>
				<div class="testimonial-wrapper2">
					<div class="testimonial">
						<?php $fields=CFS()->get( 'testimonial' );
							foreach ( $fields as $field ) { ?>
						<?php echo '<img src="' . $field['testimonial_image'] . '" class="testimonial-img">';  ?>
						<p>
							<?php echo $field['testimonial_text'];  ?>
						</p>
					</div>
					<div class="student-name">
						<?php echo $field['testimonial_name']; } ?>
					</div>
				</div>
				<div class="testimonial-wrapper3">
					<div class="testimonial">
						<?php $fields=CFS()->get( 'testimonial' );
							foreach ( $fields as $field ) { ?>
						<?php echo '<img src="' . $field['testimonial_image'] . '" class="testimonial-img">';  ?>
						<p>
							<?php echo $field['testimonial_text'];  ?>
						</p>
					</div>
					<div class="student-name">
						<?php echo $field['testimonial_name']; } ?>
					</div>
				</div>
			</div>
			<div class="expert-info">
				<?php echo CFS()->get( 'expert_paragraph' ); ?>
			</div>
			<div class="expert-wrapper">
				<div class="speaker-btn">Guest Speakers at YELL
				</div>
				<div class="speaker-info">
					<div class="speaker-infom">
						<h2>Guest Speakers at YELL
							<h2>
					</div>
					<?php echo CFS()->get( 'guest_speakers_at_yell' ); ?>
					<button class="get-involved"> Be a guest speaker! </button>
				</div>
				<div class="mentor-btn">
					Mentors at YELL
				</div>
				<div class="mentor-info">
					<h2> Mentors at YELL</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/mentor.png" alt="mentor chart" class="mentor-chart">
					<p> We believe that mentoring with YELL will be a positive and enriching experience for you. Specifically, we hope you will:</p>
					<ul class="mentor-ul">
						<li> Refine your coaching and mentoring skills</li>
						<li>Develop meaningful connections with students</li>
						<li>Support the development of future leaders in your community </li>
						<li>Learn about the YELL organization and the next generation of entrepreneurs </li>
						<li> Expand your professional network </li>
					</ul>
					<button class="get-involved"> Be a YELL Mentor! </button>
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
							<h5> Spring</h5>
							<?php echo CFS()->get( 'spring' ); ?>
						</div>
					</div>
					<button class="get-involved"> YELL at your school! </button>
			</div>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>