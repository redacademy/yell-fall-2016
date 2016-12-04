<?php
/* Template Name: Student Page */

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<div class="homepg-bg1">

	<div class="studentflex-wrapper">
		<span class="pglabel"> <h3>Students Apply</h3></span>
			<?php
    $props = CFS()->get_field_info( 'what_yell' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>
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
	<div class="timeline">
		<img src="<?php echo get_template_directory_uri(); ?>/images/program-timeline.png" alt= "timeline">  
	</div>
	<div class="register-sect">	
		<h2> How do I register?</h2>
		<span class="register-blurb"> 
			<p>Select your school district below for details on how you can register for YELL!</p>
		
		<h3> Didn't find your school district?</h3>
		<p>We are working to expand YELL all the time. Contact us HERE to let us know you’re interested!</p>
</span>
	</div>	
		<button class="yell-at"> YELL at us! ></button>
	</div>
		</main><!-- #main -->
		</div>
	</div><!-- #primary -->
<?php get_footer(); ?>