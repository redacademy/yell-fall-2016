<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */
// Register Custom Post Type
function custom_people_type() {

	$labels = array(
		'name'                  => _x( 'People', 'Post Type General Name'),
		'singular_name'         => _x( 'People', 'Post Type Singular Name'),
		'menu_name'             => __( 'People Types'),
		'name_admin_bar'        => __( 'People Type'),
		'archives'              => __( 'People Archives'),
		'parent_item_colon'     => __( 'Parent People:'),
		'all_items'             => __( 'All People'),
		'add_new_item'          => __( 'Add New People'),
		'add_new'               => __( 'Add New'),
		'new_item'              => __( 'New People'),
		'edit_item'             => __( 'Edit People'),
		'update_item'           => __( 'Update People'),
		'view_item'             => __( 'View People'),
		'search_items'          => __( 'Search People'),
		'not_found'             => __( 'Not found'),
		'not_found_in_trash'    => __( 'Not found in Trash'),
		'featured_image'        => __( 'Featured Image'),
		'set_featured_image'    => __( 'Set featured image'),
		'remove_featured_image' => __( 'Remove featured image'),
		'use_featured_image'    => __( 'Use as featured image'),
		'insert_into_item'      => __( 'Insert into People'),
		'uploaded_to_this_item' => __( 'Uploaded to this People'),
		'items_list'            => __( 'People list'),
		'items_list_navigation' => __( 'People list navigation'),
		'filter_items_list'     => __( 'Filter People list'),
	);
	$args = array(
		'label'                 => __( 'People'),
		'description'           => __( 'People Type Description'),
		'labels'                => $labels,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'people_type', $args );

}
add_action( 'init', 'custom_people_type', 0 );