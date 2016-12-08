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
			<div class="supporters-hero"><h1> We are invested in building and keeping great entrepeneurial talent in Canada</h1>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
		
			<div class="yell">
			<?php
    $props = CFS()->get_field_info( 'the_young' );
    echo '<h3>' . $props['label'] . '</h3>';
    ?>
    <?php echo CFS()->get( 'the_young' ); ?>
			</div>
			 <h3> Our Board </h3>
  
			     <section class="board-wrapper">
				   <?php 
				   $fields=CFS()->get( 'our_board' );
					foreach ( $fields as $field ) :  
					?>
						 	<div class="board-members">
								<?php echo '<img src="' . $field['board_member_image'] . '" class="board-img">';  ?>
								<p><?php echo $field['board_memeber_name'];  ?></p>
								<p><?php echo $field['board_member_position']; ?></p>
							</div>
					 <?php endforeach;?>
					</section> 
				     <div class="resources-wrapper">
							<div class="resource">
								<h3> Resources</h3>
								<button class="get-involved"><?php echo CFS()->get( 'annual_report_hyperlink' ); ?></button>
								<p><?php echo CFS()->get( 'resources_text' ); ?></p>
							</div>
							<div class="btn-partners">
							<h3> Become a Partner</h3>
							<a href="<?php echo esc_url( site_url( '/general-inquirires/' ) ); ?>" rel="general inquiries"><button class="get-involved">Get In Touch</button></a>
							<a href="https://chimp.net/groups/yell-canada"><button class="get-involved2">Donate</button></a>
							</div>
				       </div>
			 <div class="support-img">
				<h3> Our Partners</h3>
			  <img src="<?php echo get_template_directory_uri(); ?>/images/supporters.png" alt= "Partners"> 
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>