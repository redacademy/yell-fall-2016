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
				<div class="testimonial-wrap">

						<?php $fields=CFS()->get( 'testimonial' );
							foreach ( $fields as $field ) {  ?>

					
							<div class="text">
								<div class="text-test"><?php echo $field['testimonial_text'];  ?></div>
						
								<div class="name"><?php echo $field['testimonial_name']; } ?></div>
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
