<?php
/** Template Name: Front Page 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="home-hero">

			<h1 class="home-hero-txt">Empowering the next generation of Canadian problem solvers</h1>
			<h1 class="home-hero-mobile"> Young Entrepreneurial Leadership Launchpad</h1>
				<!--embedding youtube video-->
				<iframe id="video" src="https://www.youtube.com/embed/DEiw8i6yu7Q" frameborder="0"></iframe>
				<div id="playbtn"> <i class="fa fa-play" aria-hidden="true"></i></div>
				<div class="home-hero-p"> 
					The first unified effort to bring mentor - based entrepreneurship & leadership education to high schools across Canada
					</div>
			
			</div>

			
			<div class="homepg-bg1">
				<div class="homepg-bg2">
					<div class="homepg-bg3">
						<?php
    $props = CFS()->get_field_info( 'what_yell' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>
							<p><?php echo CFS()->get( 'what_yell' ); ?></p>
							<a href="<?php echo esc_url( site_url( '/about/' ) ); ?>" rel="about"><button class="more-about"> More About Yell ></button></a>
							<?php
    $props = CFS()->get_field_info( 'impact' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>
	
<p>What are students saying about YELL?</p>
</div>

						<div class="eds-animate animated bounceIn" data-eds-entry-animation="bounceIn" data-eds-entry-delay="0" data-eds-entry-duration="0.5" data-eds-entry-timing="linear" data-eds-exit-animation="" data-eds-exit-delay="" data-eds-exit-duration="" data-eds-exit-timing="" data-eds-repeat-count="1" data-eds-keep="yes" data-eds-animate-on="scroll" data-eds-scroll-offset="75" style="animation-duration: 0.5s; animation-delay: 0s; animation-timing-function: linear; animation-iteration-count: 1;">
								<div class="chart-wrap">
									<img src="<?php echo get_template_directory_uri(); ?>/images/hills.png" alt="hill chart">
									<div class="bubble-chart">
										<img src="<?php echo get_template_directory_uri(); ?>/images/bubble.png" alt="Bubble chart">
										<img src="<?php echo get_template_directory_uri(); ?>/images/legend.png" alt="Bubble legend">
									</div>
								</div>
							</div>
								<div class="testimonial-flex">
									<div class="testimonial-wrapper">
										<img src="	<?php echo CFS()->get ('image_1') ;  ?>" class="testimonial-img">
										<div class="testimonial">
											<p>
												<?php echo CFS()->get( 'testimonial_1_text' ); ?>
											</p>
											<div class="student-name">
											<?php echo CFS()->get( 'testimonial_1_name' ); ?>
										</div>
										</div>
										
									</div>
									<div class="testimonial-wrapper2">
										<img src="	<?php echo CFS()->get ('image_2') ;  ?>" class="testimonial-img">
										<div class="testimonial">
											<p>
												<?php echo CFS()->get( 'testimonial_2_text' ); ?>
											</p>
											<div class="student-name">
											<?php echo CFS()->get( 'testimonial_2_name' ); ?>
										</div>
										</div>
										
									</div>
									<div class="testimonial-wrapper3">
										<img src="	<?php echo CFS()->get ('image_3') ;  ?>" class="testimonial-img">
										<div class="testimonial">
											<p>
												<?php echo CFS()->get( 'testimonial_3_text' ); ?>
											</p>
											<div class="student-name">
											<?php echo CFS()->get( 'testimonial_3_name' ); ?>
										</div>
										</div>
										
									</div>
								</div>
								<a href="<?php echo esc_url( site_url( '/get-involved/' ) ); ?>" rel="get involved"> <button class="get-involved">Get Involved!</button></a>
					</div>
				</div>
			</div>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>