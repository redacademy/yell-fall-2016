<?php
/* Template Name: Student Page */

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
    $props = CFS()->get_field_info( 'what_yell' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>
		<div class="what-yell">
    <?php echo CFS()->get( 'what_yell' ); ?>
		</div>

	<?php
    $props = CFS()->get_field_info( 'yell_program' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>
		<div class="yell-program">
    <?php echo CFS()->get( 'yell_program' ); ?>
		</div>

		<?php
    $props = CFS()->get_field_info( 'program_structure' );
    echo '<h2>' . $props['label'] . '</h2>';
    ?>
		<div class="program-structure">
    <?php echo CFS()->get( 'program_structure' ); ?>
		</div>
		

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>