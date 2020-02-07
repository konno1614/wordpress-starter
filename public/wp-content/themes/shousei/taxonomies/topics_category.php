<?php

/**
 * Registers the `topics_category` taxonomy,
 * for use with 'topics'.
 */
function topics_category_init() {
	register_taxonomy( 'topics_category', array( 'topics' ), array(
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
			'name'                       => __( 'TOPICSのカテゴリーs', 'shousei' ),
			'singular_name'              => _x( 'TOPICSのカテゴリー', 'taxonomy general name', 'shousei' ),
			'search_items'               => __( 'Search TOPICSのカテゴリーs', 'shousei' ),
			'popular_items'              => __( 'Popular TOPICSのカテゴリーs', 'shousei' ),
			'all_items'                  => __( 'All TOPICSのカテゴリーs', 'shousei' ),
			'parent_item'                => __( 'Parent TOPICSのカテゴリー', 'shousei' ),
			'parent_item_colon'          => __( 'Parent TOPICSのカテゴリー:', 'shousei' ),
			'edit_item'                  => __( 'Edit TOPICSのカテゴリー', 'shousei' ),
			'update_item'                => __( 'Update TOPICSのカテゴリー', 'shousei' ),
			'view_item'                  => __( 'View TOPICSのカテゴリー', 'shousei' ),
			'add_new_item'               => __( 'Add New TOPICSのカテゴリー', 'shousei' ),
			'new_item_name'              => __( 'New TOPICSのカテゴリー', 'shousei' ),
			'separate_items_with_commas' => __( 'Separate TOPICSのカテゴリーs with commas', 'shousei' ),
			'add_or_remove_items'        => __( 'Add or remove TOPICSのカテゴリーs', 'shousei' ),
			'choose_from_most_used'      => __( 'Choose from the most used TOPICSのカテゴリーs', 'shousei' ),
			'not_found'                  => __( 'No TOPICSのカテゴリーs found.', 'shousei' ),
			'no_terms'                   => __( 'No TOPICSのカテゴリーs', 'shousei' ),
			'menu_name'                  => __( 'TOPICSのカテゴリーs', 'shousei' ),
			'items_list_navigation'      => __( 'TOPICSのカテゴリーs list navigation', 'shousei' ),
			'items_list'                 => __( 'TOPICSのカテゴリーs list', 'shousei' ),
			'most_used'                  => _x( 'Most Used', 'TOPICS_category', 'shousei' ),
			'back_to_items'              => __( '&larr; Back to TOPICSのカテゴリーs', 'shousei' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'TOPICS_category',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'topics_category_init' );

/**
 * Sets the post updated messages for the `TOPICS_category` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `TOPICS_category` taxonomy.
 */
function TOPICS_category_updated_messages( $messages ) {

	$messages['TOPICS_category'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'TOPICSのカテゴリー added.', 'shousei' ),
		2 => __( 'TOPICSのカテゴリー deleted.', 'shousei' ),
		3 => __( 'TOPICSのカテゴリー updated.', 'shousei' ),
		4 => __( 'TOPICSのカテゴリー not added.', 'shousei' ),
		5 => __( 'TOPICSのカテゴリー not updated.', 'shousei' ),
		6 => __( 'TOPICSのカテゴリーs deleted.', 'shousei' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'topics_category_updated_messages' );
