

<?php
/** Template Name: Front Page 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="home-hero"><h1 class="home-hero-txt">Empowering the next generation of Canadian problem solvers</h1><h1 class="home-hero-mobile"> Young Entrepreneurial Leadership Launchpad</h1>
		<!--embedding youtube video-->



<iframe id="video" src="https://www.youtube.com/embed/DEiw8i6yu7Q" frameborder="0"></iframe>
		<div id="playbtn"> <i class="fa fa-play" aria-hidden="true"></i></div>

		<div class="home-hero-p"> The first unified effort to bring mentor - based entrepreneurship & leadership education to high schools across Canada</div>


			 <!--<div class="white-blob">
			   /*<img src="<?php echo get_template_directory_uri(); ?>/images/white-blob-desktop.png" alt= "White Blob">  */
			 </div>-->

		</div>
<div class="homepg-bg1">
	<div class="homepg-bg2">
		<div class="homepg-bg3"><?php
    $props = CFS()->get_field_info( 'what_yell' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>

    <?php echo CFS()->get( 'what_yell' ); ?>
		
		 <a href="<?php echo esc_url( site_url( '/about/' ) ); ?>" rel="about"><button class="more-about"> More About Yell ></button></a>

	<?php
    $props = CFS()->get_field_info( 'impact' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>
		<div class="chart-wrap">
	<img src="<?php echo get_template_directory_uri(); ?>/images/hill.png" alt= "hill chart">  
	<div class= "bubble-chart">
	<img src="<?php echo get_template_directory_uri(); ?>/images/bubble.png" alt= "Bubble chart">  
	<img src="<?php echo get_template_directory_uri(); ?>/images/legend.png" alt= "Bubble legend">  
	</div>
</div>
	<div class="testimonial-flex">
					<div class="testimonial-wrapper">
						<img src="	<?php echo CFS()->get ('image_1') ;  ?>" class="testimonial-img">
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
								<img src="	<?php echo CFS()->get ('image_2') ;  ?>" class="testimonial-img">
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
			<img src="	<?php echo CFS()->get ('image_3') ;  ?>" class="testimonial-img">
					<div class="testimonial">
					
				
						<p>
							<?php echo CFS()->get( 'testimonial_3_text' ); ?>
						</p>
					</div>
					<div class="student-name">
						<?php echo CFS()->get( 'testimonial_3_name' ); ?>
					</div>
				</div>

			

			</div>
		
				 <a href="<?php echo esc_url( site_url( '/get-involved/' ) ); ?>" rel="get involved"> <button class="get-involved"> Get Involved! </button></a>
		    </div>
			</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
