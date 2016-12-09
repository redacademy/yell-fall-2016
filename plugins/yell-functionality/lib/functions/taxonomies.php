<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'people', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'person', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'people', 'text_domain' ),
		'all_items'                  => __( 'All people', 'text_domain' ),
		'parent_item'                => __( 'Parent people', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent people:', 'text_domain' ),
		'new_item_name'              => __( 'New people Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New people', 'text_domain' ),
		'edit_item'                  => __( 'Edit people', 'text_domain' ),
		'update_item'                => __( 'Update people', 'text_domain' ),
		'view_item'                  => __( 'View people', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate people with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove people', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular people', 'text_domain' ),
		'search_items'               => __( 'Search people'),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No people', 'text_domain' ),
		'items_list'                 => __( 'people list', 'text_domain' ),
		'items_list_navigation'      => __( 'people list navigation', 'text_domain' ),
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
