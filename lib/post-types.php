<?php

// namespace Roots\Sage\PostTypes;
//
// use Roots\Sage\Assets;

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
		'menu_position'       => 1,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => array('school_admin', 'school_admins'),
    'map_meta_cap'        => true,
		'rewrite'							=> array( 'slug' => 'lunch' ),
	);
	register_post_type( 'lunch_item', $args );

}
add_action( 'init', __NAMESPACE__ . '\\lunch_item', 0 );

add_action( 'pre_get_posts', function ( $q ) {

    if( !is_admin() && $q->is_main_query() && $q->is_post_type_archive( 'lunch_item' ) ) {

        $q->set( 'posts_per_page', 5 );

    }

});

//manage the columns of the `page` post type
function manage_columns_for_lunch_item($columns){
    //remove columns
    // unset($columns['date']);
    // unset($columns['comments']);
    // unset($columns['author']);

    //add new columns
    $columns['lunch_date'] = 'Lunch Date';

    return $columns;
}
add_action('manage_lunch_item_posts_columns', __NAMESPACE__ . '\\manage_columns_for_lunch_item');

//Populate custom columns for `page` post type
function populate_lunch_item_columns($column,$post_id){

    //page content column
    if($column == 'lunch_date'){

        //get the page based on its post_id
        $page = get_post($post_id);
        if($page){
            //get the main content area
						$lunch_date = get_field('lunch_date');
						$date = new DateTime($lunch_date);
						$date->format('l, F d');
            // $page_content = apply_filters('the_content', $page->post_content);
            echo $date->format('l, F dS');
        }
    }
}
add_action('manage_lunch_item_posts_custom_column', __NAMESPACE__ . '\\populate_lunch_item_columns',10,2);

add_filter( 'manage_edit-lunch_item_sortable_columns',  __NAMESPACE__ . '\\my_sortable_lunch_item_column' );
function my_sortable_lunch_item_column( $columns ) {
    $columns['lunch_date'] = 'lunch_date';

    //To make a column 'un- remove it from the array
    //unset($columns['date']);

    return $columns;
}

add_action( 'pre_get_posts', __NAMESPACE__ . '\\my_lunch_date_orderby' );
function my_lunch_date_orderby( $query ) {
    if( ! is_admin() )
        return;

    $orderby = $query->get( 'orderby');

    if( 'lunch_date' == $orderby ) {
        $query->set('meta_key','lunch_date');
        $query->set('orderby','meta_value_num');
    }
}



function lunch_item_column_orderby( $vars ) {
    if ( isset( $vars['orderby'] ) && 'lunch_item' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
            'meta_key' => 'lunch_item',
            'orderby' => 'meta_value_num'
        ) );
    }

    return $vars;
}
add_filter( 'request', __NAMESPACE__ . '\\lunch_item_column_orderby' );

// Register Custom Post Type
function grade() {

	$labels = array(
		'name'                => _x( 'Grades', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Grade', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Grade', 'text_domain' ),
		'name_admin_bar'      => __( 'Grade', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Grades', 'text_domain' ),
		'add_new_item'        => __( 'Add New Grade', 'text_domain' ),
		'add_new'             => __( 'Add New Grade', 'text_domain' ),
		'new_item'            => __( 'New Grade', 'text_domain' ),
		'edit_item'           => __( 'Edit Grade', 'text_domain' ),
		'update_item'         => __( 'Update Grade', 'text_domain' ),
		'view_item'           => __( 'View Grade', 'text_domain' ),
		'search_items'        => __( 'Search Grade', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Grade', 'text_domain' ),
		'description'         => __( 'Grade Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 1,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => array('school_admin', 'school_admins'),
    'map_meta_cap'        => true,
		'rewrite'							=> array( 'slug' => 'grade' ),
	);
	register_post_type( 'grade', $args );

}
add_action( 'init', __NAMESPACE__ . '\\grade', 0 );

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
		'menu_position'       => 1,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => array('school_admin', 'school_admins'),
    'map_meta_cap'        => true,
		'rewrite'							=> array( 'slug' => 'school-calendar' ),
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
		'menu_position'       => 1,
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
		'menu_position'       => 1,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
    'capability_type'     => array('classroom', 'classrooms'),
    'map_meta_cap'        => true,
	);
	register_post_type( 'newsletter', $args );

}
add_action( 'init', __NAMESPACE__ . '\\newsletter', 0 );

// Register Custom Post Type
function event() {

	$labels = array(
		'name'                => _x( 'Classroom Event', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Classroom Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Classroom Event', 'text_domain' ),
		'name_admin_bar'      => __( 'Classroom Event', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Classroom Event:', 'text_domain' ),
		'all_items'           => __( 'All Classroom Event', 'text_domain' ),
		'add_new_item'        => __( 'Add Classroom Event', 'text_domain' ),
		'add_new'             => __( 'Add Classroom Event', 'text_domain' ),
		'new_item'            => __( 'New Classroom Event', 'text_domain' ),
		'edit_item'           => __( 'Edit Classroom Event', 'text_domain' ),
		'update_item'         => __( 'Update Classroom Event', 'text_domain' ),
		'view_item'           => __( 'View Classroom Event', 'text_domain' ),
		'search_items'        => __( 'Search Classroom Event', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Classroom Event', 'text_domain' ),
		'description'         => __( 'Classroom Event Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 1,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
    'capability_type'     => array('classroom', 'classrooms'),
    'map_meta_cap'        => true,
	);
	register_post_type( 'event', $args );

}
add_action( 'init', __NAMESPACE__ . '\\event', 0 );

// Register Custom Post Type
function classroom_link() {

	$labels = array(
		'name'                => _x( 'Classroom Link', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Classroom Link', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Classroom Link', 'text_domain' ),
		'name_admin_bar'      => __( 'Classroom Link', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Classroom Link:', 'text_domain' ),
		'all_items'           => __( 'All Classroom Link', 'text_domain' ),
		'add_new_item'        => __( 'Add Classroom Link', 'text_domain' ),
		'add_new'             => __( 'Add Classroom Link', 'text_domain' ),
		'new_item'            => __( 'New Classroom Link', 'text_domain' ),
		'edit_item'           => __( 'Edit Classroom Link', 'text_domain' ),
		'update_item'         => __( 'Update Classroom Link', 'text_domain' ),
		'view_item'           => __( 'View Classroom Link', 'text_domain' ),
		'search_items'        => __( 'Search Classroom Link', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Classroom Link', 'text_domain' ),
		'description'         => __( 'Classroom Link Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 1,
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
	register_post_type( 'classroom_link', $args );

}
add_action( 'init', __NAMESPACE__ . '\\classroom_link', 0 );


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
			 $role->add_cap( 'edit_others_school_admins' );
			 $role->add_cap( 'edit_published_school_admins' );
			 $role->add_cap( 'publish_school_admins' );
			 $role->add_cap( 'publish_others_school_admin' );
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
		'menu_position'       => 1,
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
			 $role->add_cap( 'edit_others_classrooms' );
			 $role->add_cap( 'edit_published_classrooms' );
			 $role->add_cap( 'publish_classrooms' );
			 $role->add_cap( 'publish_others_classrooms' );
			 $role->add_cap( 'delete_private_classrooms' );
			 $role->add_cap( 'delete_published_classrooms' );
			 $role->add_cap( 'delete_others_classrooms' );

	}
}

function namespace_lunch_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'nav_menu_item', 'lunch_item'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', __NAMESPACE__ . '\\namespace_lunch_types' );

// ACF
/*
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_classroom',
		'title' => 'Classroom',
		'fields' => array (
			array (
				'key' => 'field_55ccaca426f50',
				'label' => 'Grade',
				'name' => 'grade',
				'type' => 'select',
				'choices' => array (
					'Pre-K' => 'Pre-K',
					'Kindergarten' => 'Kindergarten',
					'1st Grade' => '1st Grade',
					'2nd Grade' => '2nd Grade',
					'3rd Grade' => '3rd Grade',
					'4th Grade' => '4th Grade',
					'5th Grade' => '5th Grade',
					'6th Grade' => '6th Grade',
					'7th Grade' => '7th Grade',
					'8th Grade' => '8th Grade',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'classroom',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'format',
				7 => 'categories',
				8 => 'tags',
				9 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_homework',
		'title' => 'Homework',
		'fields' => array (
			array (
				'key' => 'field_55cbb35c03bec',
				'label' => 'Classroom',
				'name' => 'classroom',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'classroom',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55ce1cf066410',
				'label' => 'Due Date',
				'name' => 'due_date',
				'type' => 'date_picker',
				'instructions' => 'Pick a Date',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'homework',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'excerpt',
				1 => 'custom_fields',
				2 => 'discussion',
				3 => 'comments',
				4 => 'revisions',
				5 => 'slug',
				6 => 'format',
				7 => 'featured_image',
				8 => 'categories',
				9 => 'tags',
				10 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_lunch-item',
		'title' => 'Lunch Item',
		'fields' => array (
			array (
				'key' => 'field_55c9283db1486',
				'label' => 'Event',
				'name' => 'event',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'event',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55c9285cb1487',
				'label' => '',
				'name' => '',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'lunch_item',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_newsletter',
		'title' => 'Newsletter',
		'fields' => array (
			array (
				'key' => 'field_55ccf7cd2627f',
				'label' => 'Classroom',
				'name' => 'classroom',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'classroom',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55ccf94ffe48f',
				'label' => 'Featured Image',
				'name' => 'featured_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'newsletter',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'custom_fields',
				1 => 'discussion',
				2 => 'comments',
				3 => 'revisions',
				4 => 'slug',
				5 => 'author',
				6 => 'format',
				7 => 'categories',
				8 => 'tags',
				9 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_user-profile',
		'title' => 'User Profile',
		'fields' => array (
			array (
				'key' => 'field_55cd2c14840a7',
				'label' => 'Profile Picture',
				'name' => 'profile_picture',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_55ce1b4807ac7',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'select',
				'choices' => array (
					'null' => '( None )',
					'Mr.' => 'Mr.',
					'Mrs.' => 'Mrs.',
					'Miss' => 'Miss',
					'Ms.' => 'Ms.',
					'Dr.' => 'Dr.',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_user',
					'operator' => '==',
					'value' => 'all',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
*/
