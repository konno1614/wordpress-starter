<?php

/**
 * Registers the `interview_category` taxonomy,
 * for use with 'interview'.
 */
function interview_category_init() {
	register_taxonomy( 'interview_category', array( 'interview' ), array(
		'hierarchical'      => true,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts',
		),
		'labels'            => array(
			'name'                       => __( 'INTERVIEWのカテゴリーs', 'shousei' ),
			'singular_name'              => _x( 'INTERVIEWのカテゴリー', 'taxonomy general name', 'shousei' ),
			'search_items'               => __( 'Search INTERVIEWのカテゴリーs', 'shousei' ),
			'popular_items'              => __( 'Popular INTERVIEWのカテゴリーs', 'shousei' ),
			'all_items'                  => __( 'All INTERVIEWのカテゴリーs', 'shousei' ),
			'parent_item'                => __( 'Parent INTERVIEWのカテゴリー', 'shousei' ),
			'parent_item_colon'          => __( 'Parent INTERVIEWのカテゴリー:', 'shousei' ),
			'edit_item'                  => __( 'Edit INTERVIEWのカテゴリー', 'shousei' ),
			'update_item'                => __( 'Update INTERVIEWのカテゴリー', 'shousei' ),
			'view_item'                  => __( 'View INTERVIEWのカテゴリー', 'shousei' ),
			'add_new_item'               => __( 'Add New INTERVIEWのカテゴリー', 'shousei' ),
			'new_item_name'              => __( 'New INTERVIEWのカテゴリー', 'shousei' ),
			'separate_items_with_commas' => __( '「商標」または「特許」カテゴリーを選択してください。', 'shousei' ),
			'add_or_remove_items'        => __( 'Add or remove INTERVIEWのカテゴリーs', 'shousei' ),
			'choose_from_most_used'      => __( 'Choose from the most used INTERVIEWのカテゴリーs', 'shousei' ),
			'not_found'                  => __( 'No INTERVIEWのカテゴリーs found.', 'shousei' ),
			'no_terms'                   => __( 'No INTERVIEWのカテゴリーs', 'shousei' ),
			'menu_name'                  => __( 'INTERVIEWのカテゴリーs', 'shousei' ),
			'items_list_navigation'      => __( 'INTERVIEWのカテゴリーs list navigation', 'shousei' ),
			'items_list'                 => __( 'INTERVIEWのカテゴリーs list', 'shousei' ),
			'most_used'                  => _x( 'Most Used', 'INTERVIEW_category', 'shousei' ),
			'back_to_items'              => __( '&larr; Back to INTERVIEWのカテゴリーs', 'shousei' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'INTERVIEW_category',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'interview_category_init' );

/**
 * Sets the post updated messages for the `INTERVIEW_category` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `INTERVIEW_category` taxonomy.
 */
function INTERVIEW_category_updated_messages( $messages ) {

	$messages['INTERVIEW_category'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'INTERVIEWのカテゴリー added.', 'shousei' ),
		2 => __( 'INTERVIEWのカテゴリー deleted.', 'shousei' ),
		3 => __( 'INTERVIEWのカテゴリー updated.', 'shousei' ),
		4 => __( 'INTERVIEWのカテゴリー not added.', 'shousei' ),
		5 => __( 'INTERVIEWのカテゴリー not updated.', 'shousei' ),
		6 => __( 'INTERVIEWのカテゴリーs deleted.', 'shousei' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'interview_category_updated_messages' );
