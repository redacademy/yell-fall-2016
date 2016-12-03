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
			<div class="program-hero"></div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
<!--timeline-->
					<?php
    $props = CFS()->get_field_info( 'timeline' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>
		<div class="what-yell">
    <?php echo CFS()->get( 'timeline' ); ?>
		</div>
<!--program info-->
				<div class="expert-wrapper">
		<div class="program">
				<img src="<?php echo get_template_directory_uri(); ?>/images/guage.png" alt= "accelerator">  
    <h3> Business Accelerator</h3>
	<h5> Fall Semester</h5>
	<?php echo CFS()->get( 'fall' ); ?>
		</div>
		
		<div class="program">
				<img src="<?php echo get_template_directory_uri(); ?>/images/idea-incubator.png" alt= "brain">  
		 <h3> Idea Incubator</h3>
	     <h5> Winter Semester</h5>
    <?php echo CFS()->get( 'winter' ); ?>
		</div>

		<div class="program">
				<img src="<?php echo get_template_directory_uri(); ?>/images/fish.png" alt= "fish bowls">  
		 <h3> Venture Challenge</h3>
	     <h5> Spring</h5>
    <?php echo CFS()->get( 'spring' ); ?>
		</div>
	</div>

<!--testimonials-->
				<div class="testimonial-flex">
					<div class="testimonial-wrapper">
					<div class="testimonial">
					
					<img src="	<?php echo CFS()->get ('testimonial_1_image') ;  ?>" class="testimonial-img">
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
					
					<img src="	<?php echo CFS()->get ('testimonial_2_image') ;  ?>" class="testimonial-img">
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
					
					<img src="	<?php echo CFS()->get ('testimonial_3_image') ;  ?>" class="testimonial-img">
						<p>
							<?php echo CFS()->get( 'testimonial_3_text' ); ?>
						</p>
					</div>
					<div class="student-name">
						<?php echo CFS()->get( 'testimonial_3_name' ); ?>
					</div>
				</div>

			

			</div>
						

			<!--impact charts-->
			
		</main><!-- #main -->

			<div class ="charts">
			<?php $fields=CFS()->get( 'impact_loop' );
							foreach ( $fields as $field ) { ?>
						<?php echo '<img src="' . $field['impact_chart'] . '" class="impact-chart">';  ?>
						<?php echo '<img src="' . $field['impact_desc'] . '" class="impact-chart">'; } ?>
				</div>
	<!-- #primary -->
<?php get_footer(); ?>
