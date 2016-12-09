<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'people', 'Taxonomy General Name'),
		'singular_name'              => _x( 'person', 'Taxonomy Singular Name'),
		'menu_name'                  => __( 'people'),
		'all_items'                  => __( 'All people'),
		'parent_item'                => __( 'Parent people'),
		'parent_item_colon'          => __( 'Parent people:'),
		'new_item_name'              => __( 'New people Name'),
		'add_new_item'               => __( 'Add New people'),
		'edit_item'                  => __( 'Edit people'),
		'update_item'                => __( 'Update people'),
		'view_item'                  => __( 'View people'),
		'separate_items_with_commas' => __( 'Separate people with commas'),
		'add_or_remove_items'        => __( 'Add or remove people'),
		'choose_from_most_used'      => __( 'Choose from the most used'),
		'popular_items'              => __( 'Popular people'),
		'search_items'               => __( 'Search people'),
		'not_found'                  => __( 'Not Found'),
		'no_terms'                   => __( 'No people'),
		'items_list'                 => __( 'people list'),
		'items_list_navigation'      => __( 'people list navigation'),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'people', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );
