<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


// add a readmore buttom to posts

function new_excerpt_more($more) {
       global $post;
	return '<div class="readmore"><a class="moretag" href="'. get_permalink($post->ID) . '"> read more > </a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');