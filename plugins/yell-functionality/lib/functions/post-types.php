<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */
// Register Custom Post Type
function custom_people_type() {

	$labels = array(
		'name'                  => _x( 'People', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'People', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'People Types', 'text_domain' ),
		'name_admin_bar'        => __( 'People Type', 'text_domain' ),
		'archives'              => __( 'People Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent People:', 'text_domain' ),
		'all_items'             => __( 'All People', 'text_domain' ),
		'add_new_item'          => __( 'Add New People', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New People', 'text_domain' ),
		'edit_item'             => __( 'Edit People', 'text_domain' ),
		'update_item'           => __( 'Update People', 'text_domain' ),
		'view_item'             => __( 'View People', 'text_domain' ),
		'search_items'          => __( 'Search People', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into People', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this People', 'text_domain' ),
		'items_list'            => __( 'People list', 'text_domain' ),
		'items_list_navigation' => __( 'People list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter People list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'People', 'text_domain' ),
		'description'           => __( 'People Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
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