<?php
/* Template Name: Contact Page */

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<h3>Contact Us</h3>
			<div class="contactinfo">
				<div class="contact-profesh">
					<p> Are you a professional who wants to take part of YELL?</p>
					<a href="<?php echo esc_url( site_url( '/professionals/' ) ); ?>" rel="professionals">	<button class="peachbtn">Professionals</button></a>
			</div>
			<div class="contact-sponsor ">
			<p> Are you a potential sponsor, business
 				or a community partner?</p>
			<a href="<?php echo esc_url( site_url( '/supporters/' ) ); ?>" rel="supporters"><button class="get-involved">Supporters</button></a>
				</div>
				<div class="contact-question">
					<p> Have questions? Send us a message.</p>
					<a href="<?php echo esc_url( site_url( '/general-inquiries/' ) ); ?>" rel="general inquiries"><button class="get-involved2">General Inquiries</button></a>
				</div>
		</div>

				<div class="contact-details">
				<a href="<?php echo CFS()->get( 'contact_phone' ); ?>" ><p><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo CFS()->get( 'contact_phone' ); ?></p></a>
				<a href="mailto<?php echo CFS()->get( 'contact_email' ); ?>"><p><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo CFS()->get( 'contact_email' ); ?></p></a> 
				</div>

		</main>
		<!-- #main -->
		
		<!-- #primary -->
		<?php get_footer(); ?>