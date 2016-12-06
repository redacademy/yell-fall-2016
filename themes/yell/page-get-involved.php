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
	<a href="http://yell.academy.red/students-get-involved"><div class="studentbtn"><h5>Student ></h5><p> Become a future student at YELL</p></div>
	<a href="http://yell.academy.red/guest-speaker-form"><div class="expertbtn"><h5>Professional ></h5><p> You are an entrepeneur or a guest speaker</p></div></a>
	<a href="http://yell.academy.red/get-involved"><div class="supportbtn"><h5>Supporter ></h5><p> Help support or fund  YELL</p></div></a>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>