<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="single-wrapper">
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
</header>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">
				<?php red_starter_posted_on(); ?> <h4><?php the_subtitle(); ?></h4> <?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
	<!-- .entry-header -->

		<div class="entry-content">
			<?php the_content('</div>'); ?>
		
		</div><!-- .entry-content -->


</article><!-- #post-## -->
