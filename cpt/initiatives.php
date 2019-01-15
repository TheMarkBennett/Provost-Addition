<?php



function cptui_register_my_cpts_initiatives() {

	/**
	 * Post Type: Initiatives.
	 */

	$labels = array(
		"name" => __( "Initiatives", "custom-post-type-ui" ),
		"singular_name" => __( "Initiative", "custom-post-type-ui" ),
		"menu_name" => __( "Initiatives", "custom-post-type-ui" ),
		"all_items" => __( "All initiatives", "custom-post-type-ui" ),
		"add_new_item" => __( "Add New Initiative", "custom-post-type-ui" ),
		"edit_item" => __( "Edit initiative", "custom-post-type-ui" ),
		"new_item" => __( "New initiative", "custom-post-type-ui" ),
		"view_item" => __( "View initiative", "custom-post-type-ui" ),
		"view_items" => __( "View initiatives", "custom-post-type-ui" ),
		"search_items" => __( "Search initiative", "custom-post-type-ui" ),
		"archives" => __( "Initiative Archive", "custom-post-type-ui" ),
		"items_list" => __( "Initiatives list", "custom-post-type-ui" ),
		"name_admin_bar" => __( "initiative", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Initiatives", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "Allows you to create task-forces, committees and working groups ",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "initiatives",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => "false",
		//"rewrite" => array( "slug" => "initiatives", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "page-attributes" ),
		
	);

	register_post_type( "initiatives", $args );
}

add_action( 'init', 'cptui_register_my_cpts_initiatives' );