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

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
<div class="involved-info">
			<h3> Get Involved </h3>
			<p> Who are you? </p>
</div>

<div class="btn-wrapper">
	<div class="studentbtn"><a href="<?php echo esc_url( site_url( '/get-involved/' ) ); ?>" rel="get involved"><h5>Student <span>></span></h5><p> Become a future student at YELL</p></a></div>
	<div class="expertbtn"><a href="<?php echo esc_url( site_url( '/guest-speaker-form/' ) ); ?>" rel="guest form"><h5>Professional <span>></span></h5><p> You are an entrepeneur or a guest speaker</p></a></div>
	<div class="supportbtn"><a href="<?php echo esc_url( site_url( '/support/' ) ); ?>" rel="support"><h5>Supporter<span> ></span></h5><p> Help support or fund  YELL</p></a></div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>