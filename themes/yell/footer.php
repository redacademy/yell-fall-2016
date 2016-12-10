<?php
/**
* The template for displaying the footer.
*
* @package RED_Starter_Theme
*/
?>
	<!-- #content -->
	<!--Site Footer-->
<section class="footer-container">
	<div class="hi">
	<div class ="get-involved-button-footer">
		<button class="get-involved"><a href="<?php echo esc_url( site_url( '/get-involved' ) ); ?>" rel="get involved"> Get Involved!</a></button>
	</div>
	<div class="social-media-icons">
		 <i class="fa fa-facebook-square" aria-hidden="true"></i>
         <i class="fa fa-twitter" aria-hidden="true"></i>
         <i class="fa fa-instagram" aria-hidden="true"></i>
	</div>
	</div>
    <div class="colophon-footer">
	<div class="colophon-left">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><p>Home</p></a>
		<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" rel="about"><p>About Us</p></a>
		<a href="<?php echo esc_url( home_url( '/programs' ) ); ?>" rel="programs"><p>Program Details</p></a>
		<a href="<?php echo esc_url( home_url( '/students' ) ); ?>" rel="student info"><p>Info for Students</p></a>
    </div>
	<div class="colophon-right">
		<a href="<?php echo esc_url( home_url( '/professionals' ) ); ?>" rel="professionals"><p>Be a Professional</p></a>
		<a href="<?php echo esc_url( home_url( '/supporters' ) ); ?>" rel="supporters"><p>Become a Partner</p></a>
		<a href="<?php echo esc_url( home_url( '/press-stories-2' ) ); ?>" rel="press and stories"><p>Press and Stories</p></a>
		<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" rel="contact"><p>Contact Us</p></a>	
	</div>
	</div>
	<div class ="site-copyright">
		<p>Young Entrepreneur Leadership Launchpad</p>
	</div>
</section>

</section>
	<!-- #page -->
	<?php wp_footer(); ?>