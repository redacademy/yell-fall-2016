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

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			<h3>Contact Us</h3>
			<div class="contactinfo">
			<div class="child1">
				<p> Are you a professional who wants to take 
				part of YELL?</p>
		<a href="http://yell.academy.red/professionals">	<button class="peachbtn">Professionals</button></a>
			</div>
			<div class="child2">
			<p> Are you a potential sponsor, business
 				or a community partner?</p>
			<a href="http://yell.academy.red/supporters"><button class="get-involved">Supporters</button></a>
			</div>
			<div class="child3">
			<p> Have questions? Send us a message.</p>
			<a href="http://yell.academy.red/general-inquiries"><button class="get-involved2">General Inquiries</button></a>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>