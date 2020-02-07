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
			'name'                       => __( 'TOPICSのカテゴリーs', 'starter' ),
			'singular_name'              => _x( 'TOPICSのカテゴリー', 'taxonomy general name', 'starter' ),
			'search_items'               => __( 'Search TOPICSのカテゴリーs', 'starter' ),
			'popular_items'              => __( 'Popular TOPICSのカテゴリーs', 'starter' ),
			'all_items'                  => __( 'All TOPICSのカテゴリーs', 'starter' ),
			'parent_item'                => __( 'Parent TOPICSのカテゴリー', 'starter' ),
			'parent_item_colon'          => __( 'Parent TOPICSのカテゴリー:', 'starter' ),
			'edit_item'                  => __( 'Edit TOPICSのカテゴリー', 'starter' ),
			'update_item'                => __( 'Update TOPICSのカテゴリー', 'starter' ),
			'view_item'                  => __( 'View TOPICSのカテゴリー', 'starter' ),
			'add_new_item'               => __( 'Add New TOPICSのカテゴリー', 'starter' ),
			'new_item_name'              => __( 'New TOPICSのカテゴリー', 'starter' ),
			'separate_items_with_commas' => __( 'Separate TOPICSのカテゴリーs with commas', 'starter' ),
			'add_or_remove_items'        => __( 'Add or remove TOPICSのカテゴリーs', 'starter' ),
			'choose_from_most_used'      => __( 'Choose from the most used TOPICSのカテゴリーs', 'starter' ),
			'not_found'                  => __( 'No TOPICSのカテゴリーs found.', 'starter' ),
			'no_terms'                   => __( 'No TOPICSのカテゴリーs', 'starter' ),
			'menu_name'                  => __( 'TOPICSのカテゴリーs', 'starter' ),
			'items_list_navigation'      => __( 'TOPICSのカテゴリーs list navigation', 'starter' ),
			'items_list'                 => __( 'TOPICSのカテゴリーs list', 'starter' ),
			'most_used'                  => _x( 'Most Used', 'TOPICS_category', 'starter' ),
			'back_to_items'              => __( '&larr; Back to TOPICSのカテゴリーs', 'starter' ),
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
		1 => __( 'TOPICSのカテゴリー added.', 'starter' ),
		2 => __( 'TOPICSのカテゴリー deleted.', 'starter' ),
		3 => __( 'TOPICSのカテゴリー updated.', 'starter' ),
		4 => __( 'TOPICSのカテゴリー not added.', 'starter' ),
		5 => __( 'TOPICSのカテゴリー not updated.', 'starter' ),
		6 => __( 'TOPICSのカテゴリーs deleted.', 'starter' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'topics_category_updated_messages' );
