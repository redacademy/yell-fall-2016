<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="hero-404">404 oops!</div>
			<section class="error-404 not-found">
				<p> Sorry we’re having trouble finding what you’re looking for.
Please don’t YELL at us!</p>
			<div class="btn-wrapper">
				<button class="backbtn">< Back </button>
				<button class="contactbtn">Contact us</button>
			</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
