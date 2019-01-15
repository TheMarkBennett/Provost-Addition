<?php



// Register Custom Post Type
function register_ucf_cpts_initiatives() {

	$labels = array(
		'name'                  => _x( 'Initiatives', 'Post Type General Name', 'ucf_lang' ),
		'singular_name'         => _x( 'Initiative', 'Post Type Singular Name', 'ucf_lang' ),
		'menu_name'             => __( 'Initiatives', 'ucf_lang' ),
		'name_admin_bar'        => __( 'Initiatives', 'ucf_lang' ),
		'archives'              => __( 'Item Archives', 'ucf_lang' ),
		'attributes'            => __( 'Item Attributes', 'ucf_lang' ),
		'parent_item_colon'     => __( 'Parent Item:', 'ucf_lang' ),
		'all_items'             => __( 'All Initiatives', 'ucf_lang' ),
		'add_new_item'          => __( 'Add New Initiative', 'ucf_lang' ),
		'add_new'               => __( 'Add Initiative', 'ucf_lang' ),
		'new_item'              => __( 'New Initiative', 'ucf_lang' ),
		'edit_item'             => __( 'Edit Initiative', 'ucf_lang' ),
		'update_item'           => __( 'Update Initiative', 'ucf_lang' ),
		'view_item'             => __( 'View Initiative', 'ucf_lang' ),
		'view_items'            => __( 'View Initiatives', 'ucf_lang' ),
		'search_items'          => __( 'Search Initiatives', 'ucf_lang' ),
		'not_found'             => __( 'Not found', 'ucf_lang' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'ucf_lang' ),
		'featured_image'        => __( 'Featured Image', 'ucf_lang' ),
		'set_featured_image'    => __( 'Set featured image', 'ucf_lang' ),
		'remove_featured_image' => __( 'Remove featured image', 'ucf_lang' ),
		'use_featured_image'    => __( 'Use as featured image', 'ucf_lang' ),
		'insert_into_item'      => __( 'Insert into item', 'ucf_lang' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'ucf_lang' ),
		'items_list'            => __( 'Items list', 'ucf_lang' ),
		'items_list_navigation' => __( 'Items list navigation', 'ucf_lang' ),
		'filter_items_list'     => __( 'Filter items list', 'ucf_lang' ),
	);
	$args = array(
		'label'                 => __( 'Initiative', 'ucf_lang' ),
		'description'           => __( 'Allows you to create task-force, working groups and committees', 'ucf_lang' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-paperclip',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'initiatives',
		'rewrite' => array( "slug" => 'initiatives', 'with_front' => true ),
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		"map_meta_cap" => true,
	);
	register_post_type( 'initiatives', $args );

}
add_action( 'init', 'register_ucf_cpts_initiatives', 0 );


