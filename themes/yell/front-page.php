<?php
/** Template Name: Front Page 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="homepg-bg1">
	<div class="homepg-bg2">
		<div class="homepg-bg3">
<?php
    $props = CFS()->get_field_info( 'what_yell' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>

    <?php echo CFS()->get( 'what_yell' ); ?>
		
		 <button class="more-about"> More About Yell ></button>
		 
	<?php
    $props = CFS()->get_field_info( 'impact' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>
		<div class="impact">
    <?php echo CFS()->get( 'impact' ); ?>
		</div>

	<div class="testimonial-wrapper">
		<div class="testimonial">
   		<p> <?php echo CFS()->get( 'testimonial' ); ?></p>
		</div>
			<div class="student-name">
				<?php echo CFS()->get('student_name'); ?>
					</div>
			</div>
		
				  <button class="get-involved"> Get Involved! </button>
		    </div>
			</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
