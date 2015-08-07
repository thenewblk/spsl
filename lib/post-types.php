<?php

namespace Roots\Sage\PostTypes;

use Roots\Sage\Assets;

// Register Custom Post Type
function lunch_item() {

	$labels = array(
		'name'                => _x( 'Lunch Items', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Lunch Item', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Lunch Item', 'text_domain' ),
		'name_admin_bar'      => __( 'Lunch Item', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Lunch Items', 'text_domain' ),
		'add_new_item'        => __( 'Add New Lunch Item', 'text_domain' ),
		'add_new'             => __( 'Add New Lunch Item', 'text_domain' ),
		'new_item'            => __( 'New Lunch Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Lunch Item', 'text_domain' ),
		'update_item'         => __( 'Update Lunch Item', 'text_domain' ),
		'view_item'           => __( 'View Lunch Item', 'text_domain' ),
		'search_items'        => __( 'Search Lunch Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Lunch Item', 'text_domain' ),
		'description'         => __( 'Lunch Item Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'lunch_item', $args );

}
add_action( 'init', __NAMESPACE__ . '\\lunch_item', 0 );

// Register Custom Post Type
function event() {

	$labels = array(
		'name'                => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Event', 'text_domain' ),
		'name_admin_bar'      => __( 'Event', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Event:', 'text_domain' ),
		'all_items'           => __( 'All Events', 'text_domain' ),
		'add_new_item'        => __( 'Add New Event', 'text_domain' ),
		'add_new'             => __( 'Add New Event', 'text_domain' ),
		'new_item'            => __( 'New Event', 'text_domain' ),
		'edit_item'           => __( 'Edit Event', 'text_domain' ),
		'update_item'         => __( 'Update Event', 'text_domain' ),
		'view_item'           => __( 'View Event', 'text_domain' ),
		'search_items'        => __( 'Search Event', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Event', 'text_domain' ),
		'description'         => __( 'Event Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'event', $args );

}
add_action( 'init', __NAMESPACE__ . '\\event', 0 );

// Register Custom Post Type
function homework() {

	$labels = array(
		'name'                => _x( 'Homeworks', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Homework', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Homework', 'text_domain' ),
		'name_admin_bar'      => __( 'Homework', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Homework:', 'text_domain' ),
		'all_items'           => __( 'All Homeworks', 'text_domain' ),
		'add_new_item'        => __( 'Add Homework', 'text_domain' ),
		'add_new'             => __( 'Add Homework', 'text_domain' ),
		'new_item'            => __( 'New Homework', 'text_domain' ),
		'edit_item'           => __( 'Edit Homework', 'text_domain' ),
		'update_item'         => __( 'Update Homework', 'text_domain' ),
		'view_item'           => __( 'View Homework', 'text_domain' ),
		'search_items'        => __( 'Search Event', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Homework', 'text_domain' ),
		'description'         => __( 'Homework Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'homework', $args );

}
add_action( 'init', __NAMESPACE__ . '\\homework', 0 );
