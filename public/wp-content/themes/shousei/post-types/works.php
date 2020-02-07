<?php

/**
 * Registers the `works` post type.
 */
function works_init() {
	register_post_type( 'works', array(
		'labels'                => array(
			'name'                  => __( 'WORKS', 'shousei' ),
			'singular_name'         => __( 'WORKS', 'shousei' ),
			'all_items'             => __( 'All WORKS', 'shousei' ),
			'archives'              => __( 'WORKS Archives', 'shousei' ),
			'attributes'            => __( 'WORKS Attributes', 'shousei' ),
			'insert_into_item'      => __( 'Insert into WORKS', 'shousei' ),
			'uploaded_to_this_item' => __( 'Uploaded to this WORKS', 'shousei' ),
			'featured_image'        => _x( 'Featured Image', 'works', 'shousei' ),
			'set_featured_image'    => _x( 'Set featured image', 'works', 'shousei' ),
			'remove_featured_image' => _x( 'Remove featured image', 'works', 'shousei' ),
			'use_featured_image'    => _x( 'Use as featured image', 'works', 'shousei' ),
			'filter_items_list'     => __( 'Filter WORKS list', 'shousei' ),
			'items_list_navigation' => __( 'WORKS list navigation', 'shousei' ),
			'items_list'            => __( 'WORKS list', 'shousei' ),
			'new_item'              => __( 'New WORKS', 'shousei' ),
			'add_new'               => __( 'Add New', 'shousei' ),
			'add_new_item'          => __( 'Add New WORKS', 'shousei' ),
			'edit_item'             => __( 'Edit WORKS', 'shousei' ),
			'view_item'             => __( 'View WORKS', 'shousei' ),
			'view_items'            => __( 'View WORKS', 'shousei' ),
			'search_items'          => __( 'Search WORKS', 'shousei' ),
			'not_found'             => __( 'No WORKS found', 'shousei' ),
			'not_found_in_trash'    => __( 'No WORKS found in trash', 'shousei' ),
			'parent_item_colon'     => __( 'Parent WORKS:', 'shousei' ),
			'menu_name'             => __( 'WORKS', 'shousei' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_rest'          => true,
		'rest_base'             => 'works',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'works_init' );

/**
 * Sets the post updated messages for the `works` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `works` post type.
 */
function works_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['works'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'WORKS updated. <a target="_blank" href="%s">View WORKS</a>', 'shousei' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'shousei' ),
		3  => __( 'Custom field deleted.', 'shousei' ),
		4  => __( 'WORKS updated.', 'shousei' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'WORKS restored to revision from %s', 'shousei' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'WORKS published. <a href="%s">View WORKS</a>', 'shousei' ), esc_url( $permalink ) ),
		7  => __( 'WORKS saved.', 'shousei' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'WORKS submitted. <a target="_blank" href="%s">Preview WORKS</a>', 'shousei' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'WORKS scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview WORKS</a>', 'shousei' ),
		date_i18n( __( 'M j, Y @ G:i', 'shousei' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'WORKS draft updated. <a target="_blank" href="%s">Preview WORKS</a>', 'shousei' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'works_updated_messages' );
