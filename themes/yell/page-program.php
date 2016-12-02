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

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

					<?php
    $props = CFS()->get_field_info( 'timeline' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>
		<div class="what-yell">
    <?php echo CFS()->get( 'timeline' ); ?>
		</div>

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

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
