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
		'supports'            => array( 'title', 'editor', 'thumbnail'),
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
		'capability_type'     => array('school_admin', 'school_admins'),
    'map_meta_cap'        => true,
	);
	register_post_type( 'lunch_item', $args );

}
add_action( 'init', __NAMESPACE__ . '\\lunch_item', 0 );

// Register Custom Post Type
function school_event() {

	$labels = array(
		'name'                => _x( 'School Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'School Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'School Event', 'text_domain' ),
		'name_admin_bar'      => __( 'School Event', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All School Events', 'text_domain' ),
		'add_new_item'        => __( 'Add New School Event', 'text_domain' ),
		'add_new'             => __( 'Add New School Event', 'text_domain' ),
		'new_item'            => __( 'New School Event', 'text_domain' ),
		'edit_item'           => __( 'Edit School Event', 'text_domain' ),
		'update_item'         => __( 'Update School Event', 'text_domain' ),
		'view_item'           => __( 'View School Event', 'text_domain' ),
		'search_items'        => __( 'Search School Event', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'School Event', 'text_domain' ),
		'description'         => __( 'School Event Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
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
		'capability_type'     => array('school_admin', 'school_admins'),
    'map_meta_cap'        => true,
	);
	register_post_type( 'school_event', $args );

}
add_action( 'init', __NAMESPACE__ . '\\school_event', 0 );

// Register Custom Post Type
function homework() {

	$labels = array(
		'name'                => _x( 'Homework', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Homework', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Homework', 'text_domain' ),
		'name_admin_bar'      => __( 'Homework', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Homework:', 'text_domain' ),
		'all_items'           => __( 'All Homework', 'text_domain' ),
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
		'supports'            => array( 'title', 'editor', 'thumbnail'),
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
    'capability_type'     => array('classroom', 'classrooms'),
    'map_meta_cap'        => true,
	);
	register_post_type( 'homework', $args );

}
add_action( 'init', __NAMESPACE__ . '\\homework', 0 );

// Register Custom Post Type
function newsletter() {

	$labels = array(
		'name'                => _x( 'Newsletter', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Newsletter', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Newsletter', 'text_domain' ),
		'name_admin_bar'      => __( 'Newsletter', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Newsletter:', 'text_domain' ),
		'all_items'           => __( 'All Newsletter', 'text_domain' ),
		'add_new_item'        => __( 'Add Newsletter', 'text_domain' ),
		'add_new'             => __( 'Add Newsletter', 'text_domain' ),
		'new_item'            => __( 'New Newsletter', 'text_domain' ),
		'edit_item'           => __( 'Edit Newsletter', 'text_domain' ),
		'update_item'         => __( 'Update Newsletter', 'text_domain' ),
		'view_item'           => __( 'View Newsletter', 'text_domain' ),
		'search_items'        => __( 'Search Event', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Newsletter', 'text_domain' ),
		'description'         => __( 'Newsletter Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
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
		// 'capability_type'     => 'page',
    'capability_type'     => array('classroom', 'classrooms'),
    'map_meta_cap'        => true,
	);
	register_post_type( 'newsletter', $args );

}
add_action( 'init', __NAMESPACE__ . '\\newsletter', 0 );

// Register Custom Post Type
function event() {

	$labels = array(
		'name'                => _x( 'Event', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Event', 'text_domain' ),
		'name_admin_bar'      => __( 'Event', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Event:', 'text_domain' ),
		'all_items'           => __( 'All Event', 'text_domain' ),
		'add_new_item'        => __( 'Add Event', 'text_domain' ),
		'add_new'             => __( 'Add Event', 'text_domain' ),
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
		'supports'            => array( 'title', 'editor', 'thumbnail'),
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
		// 'capability_type'     => 'page',
    'capability_type'     => array('classroom', 'classrooms'),
    'map_meta_cap'        => true,
	);
	register_post_type( 'event', $args );

}
add_action( 'init', __NAMESPACE__ . '\\event', 0 );

function spsl_add_school_administrator() {
	remove_role('school_administrator');
	add_role('school_administrator',
           'School Administrator',
           array(
               'read' => true,
               'edit_posts' =>false,
               'delete_posts' => false,
               'publish_posts' => false,
               'upload_files' => true,
           )
       );
}

// add_action( 'init', __NAMESPACE__ . '\\spsl_add_7th_grade_role', 0 );
add_action( 'init', __NAMESPACE__ . '\\spsl_add_school_administrator', 0 );

add_action('admin_init', __NAMESPACE__ . '\\psp_add_school_administrator_role_caps',999);

function psp_add_school_administrator_role_caps() {

	// Add the roles you'd like to administer the custom post types
	$roles = array('school_administrator','editor','administrator');

	// Loop through each role and assign capabilities
	foreach($roles as $the_role) {

			 $role = get_role($the_role);

			 $role->add_cap( 'read' );
			 $role->add_cap( 'read_school_admin');
			 $role->add_cap( 'read_private_school_admins' );
			 $role->add_cap( 'edit_school_admin' );
			 $role->add_cap( 'edit_school_admins' );
			 $role->add_cap( 'edit_published_school_admins' );
			 $role->add_cap( 'publish_school_admins' );
			 $role->add_cap( 'delete_private_school_admins' );
			 $role->add_cap( 'delete_published_school_admins' );

	}
}

// Register Custom Post Type
function classroom() {

	$labels = array(
		'name'                => _x( 'Classroom', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Classroom', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Classroom', 'text_domain' ),
		'name_admin_bar'      => __( 'Classroom', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Classroom:', 'text_domain' ),
		'all_items'           => __( 'All Classroom', 'text_domain' ),
		'add_new_item'        => __( 'Add Classroom', 'text_domain' ),
		'add_new'             => __( 'Add Classroom', 'text_domain' ),
		'new_item'            => __( 'New Classroom', 'text_domain' ),
		'edit_item'           => __( 'Edit Classroom', 'text_domain' ),
		'update_item'         => __( 'Update Classroom', 'text_domain' ),
		'view_item'           => __( 'View Classroom', 'text_domain' ),
		'search_items'        => __( 'Search Classroom', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Classroom', 'text_domain' ),
		'description'         => __( 'Classroom Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'        => true,
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
    'capability_type'     => array('classroom', 'classrooms'),
    'map_meta_cap'        => true,
	);
	register_post_type( 'classroom', $args );

}

add_action( 'init', __NAMESPACE__ . '\\classroom' );

function spsl_add_teacher() {
	remove_role('teacher');
 	add_role(	'teacher',
            'Teacher',
            array(
                'read' => true,
                'edit_posts' =>false,
                'delete_posts' => false,
                'publish_posts' => false,
                'upload_files' => true,
            )
        );
   }

add_action( 'init', __NAMESPACE__ . '\\spsl_add_teacher' );

add_action('admin_init', __NAMESPACE__ . '\\psp_add_teacher_caps');

function psp_add_teacher_caps() {

	// Add the roles you'd like to administer the custom post types
	$roles = array('teacher','editor','administrator');

	// Loop through each role and assign capabilities
	foreach($roles as $the_role) {

			 $role = get_role($the_role);

			 $role->add_cap( 'read' );
			 $role->add_cap( 'read_classroom');
			 $role->add_cap( 'read_private_classrooms' );
			 $role->add_cap( 'edit_classroom' );
			 $role->add_cap( 'edit_classrooms' );
			 $role->add_cap( 'edit_published_classrooms' );
			 $role->add_cap( 'publish_classrooms' );
			 $role->add_cap( 'delete_private_classrooms' );
			 $role->add_cap( 'delete_published_classrooms' );

	}
}

// add_action( 'admin_menu', __NAMESPACE__ . '\\my_admin_menu' );
//
// function my_admin_menu() {
// 	add_menu_page( '7th Grade Stuff Page', '7th Grade Stuff', '7th_grade_teacher', 'seventh_homework', null, 'dashicons-tickets', 6  );
// 	add_submenu_page( 'seventh_homework', 'My Sub Level Menu Example', 'Sub Level Menu',  '7th_grade_teacher', 'edit.php?post_type=seventh_homework', 'myplguin_admin_sub_page' );
// }
