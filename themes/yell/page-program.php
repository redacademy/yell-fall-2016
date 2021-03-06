<?php
/* Template Name: Program Page */

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="program-hero">
				<h1>Program Structure</h1>
				<div class="white-blob">
					</div>
			</div>
			<div class="homepg-bg1">
				<div class="homepg-bg3">
					<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php endwhile; // End of the loop. ?>
					<!--timeline-->
					<?php
						$props = CFS()->get_field_info( 'timeline' );
						echo '<h2>' . $props['label'] . '</h2>';
						?>
						<div class="what-yell">
		
							<img src="<?php echo get_template_directory_uri(); ?>/images/program-timeline.png" alt="timeline">
						</div>
						<!--program info-->
						<div class="program-cols">
							<div class="program-fish">
								<img src="<?php echo get_template_directory_uri(); ?>/images/guage.png" alt="accelerator">
							
								<h3> Business Accelerator</h3>
								<h5> Fall Semester</h5>
								<?php echo CFS()->get( 'fall' ); ?>
							</div>
							
							<div class="program-fish">
								<img src="<?php echo get_template_directory_uri(); ?>/images/idea-incubator.png" alt="brain">
								
								<h3> Idea Incubator</h3>
								<h5> Winter Semester</h5>
								<?php echo CFS()->get( 'winter' ); ?>
							</div>
							
							<div class="program-fish">
								<img src="<?php echo get_template_directory_uri(); ?>/images/fish.png" alt="fish bowls">
								
								<h3> Venture Challenge</h3>
								<h5> Spring Semester</h5>
								<?php echo CFS()->get( 'spring' ); ?>
							</div>
							</div>
						</div>
						<div class="charts">
							<?php $fields=CFS()->get( 'impact_loop' );
							foreach ( $fields as $field ) { ?>
						   <div class="charts-container">
							<div class="chart-left"><?php echo '<img src="' . $field['impact_chart'] . '" class="impact-chart">';  ?></div>
							<div class="chart-right"><?php echo '<img src="' . $field['impact_desc'] . '" class="impact-chart">'; } ?></div>
						</div>
						
						<!--testimonials-->
						<div class="testimonial-container">
						<h3> Student Testimonials</h3>
						<div class="testimonial-flex">
							<div class="testimonial-wrapper">
								<div class="testimonial">
								
									<p>
										<?php echo CFS()->get( 'testimonial_1_text' ); ?>
									</p>
								</div>
								<div class="student-name">
									<?php echo CFS()->get( 'testimonial_1_name' ); ?>
								</div>
							</div>
							<div class="testimonial-wrapper2">
								<div class="testimonial">
									
									<p>
										<?php echo CFS()->get( 'testimonial_2_text' ); ?>
									</p>
								</div>
								<div class="student-name">
									<?php echo CFS()->get( 'testimonial_2_name' ); ?>
								</div>
							</div>
							<div class="testimonial-wrapper3">
								<div class="testimonial">
									
									<p>
										<?php echo CFS()->get( 'testimonial_3_text' ); ?>
									</p>
								</div>
								<div class="student-name">
									<?php echo CFS()->get( 'testimonial_3_name' ); ?>
								</div>
							
						
				
		</main>
		<!-- #main -->
		
		<a href="<?php echo esc_url( site_url( '/get-involved/' ) ); ?>" rel="get involved"><button class="get-involved"> Get Involved! </button></a>
		</div>
		</div>
		<!-- #primary -->
		<?php get_footer(); ?>