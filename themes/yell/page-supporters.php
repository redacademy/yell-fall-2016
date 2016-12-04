<?php
/* Template Name: Supporters Page */

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="supporters-hero">
			  <div class="white-blob">
			   <img src="<?php echo get_template_directory_uri(); ?>/images/white-blob-desktop.png" alt= "White Blob">  
			 </div>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
		
			<div class="support-img">
				<?php echo CFS()->get( 'our_supporters' ); ?>
			</div>
			<div class="yell">
			<?php
    $props = CFS()->get_field_info( 'the_young' );
    echo '<h3>' . $props['label'] . '</h3>';
    ?>

    <?php echo CFS()->get( 'the_young' ); ?>
			</div>
<h3> Our Board </h3>
<div class="ourboard-wrapper">
				<?php $fields=CFS()->get( 'our_board' );
							foreach ( $fields as $field ) {  ?>
							<div class="our-board">
								
								<?php echo '<img src="' . $field['board_member_image'] . '" class="board-img">';  ?>
								<div class="board-name">
									<?php echo $field['board_memeber_name'];  ?>
								</div>
								<div class="board-pos">
									<?php echo $field['board_member_position']; } ?>
								</div>
</div>
							</div>
							<div class="resource">
								<h3> Resources</h3>
								<button class="get-involved"><?php echo CFS()->get( 'annual_report_hyperlink' ); ?></button>
								<p><?php echo CFS()->get( 'resources_text' ); ?></p>
							</div>

							<h3> Become a Partner</h3>
							<div class="btn-partners">
							<button class="get-involved">Get In Touch</button>
							<button class="get-involved2">Donate</button>
							</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>