<?php
//  Template Name: Thank You Page
/**
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="thanks-hero">
				<div class="header-container">
					<h1>Thank you for Getting Involved!</h1>
				</div>
			</div>
			<div class="thanks-body">
				<h1>We'll get back to you shortly!</h1>
				<button class="back-home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> Back Home </a></button>
			</div>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>