<?php
/* Template Name: Get Involved Page */

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<section class ="get-involved-title">		
<div class="involved-info">
			<h3> Get Involved </h3>
			<p> Who are you? </p>
</div>
</section>
<div class="btn-wrapper">
	<div class="studentbtn"><a href="<?php echo esc_url( site_url( '/get-involved/' ) ); ?>" rel="get involved"><span class="words-container"><h5>Student <span class="arrow">></span></h5><p> Become a future student at YELL</p></span></a></div>
	<div class="expertbtn"><a href="<?php echo esc_url( site_url( '/guest-speaker-form/' ) ); ?>" rel="guest form"><span class="words-container"><h5>Professional <span>></span></h5><p> You are an entrepeneur or a guest speaker</p></span></a></div>
	<div class="supportbtn"><a href="<?php echo esc_url( site_url( '/support/' ) ); ?>" rel="support"><span class="words-container"><h5>Supporter <span>><span></h5><p> Help support or fund  YELL</p></span></a></div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>