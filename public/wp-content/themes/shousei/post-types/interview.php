<?php

/**
 * Registers the `interview` post type.
 */
function interview_init() {
	register_post_type( 'interview', array(
		'labels'                => array(
			'name'                  => __( 'INTERVIEW', 'shousei' ),
			'singular_name'         => __( 'INTERVIEW', 'shousei' ),
			'all_items'             => __( 'All INTERVIEW', 'shousei' ),
			'archives'              => __( 'INTERVIEW Archives', 'shousei' ),
			'attributes'            => __( 'INTERVIEW Attributes', 'shousei' ),
			'insert_into_item'      => __( 'Insert into INTERVIEW', 'shousei' ),
			'uploaded_to_this_item' => __( 'Uploaded to this INTERVIEW', 'shousei' ),
			'featured_image'        => _x( 'Featured Image', 'interview', 'shousei' ),
			'set_featured_image'    => _x( 'Set featured image', 'interview', 'shousei' ),
			'remove_featured_image' => _x( 'Remove featured image', 'interview', 'shousei' ),
			'use_featured_image'    => _x( 'Use as featured image', 'interview', 'shousei' ),
			'filter_items_list'     => __( 'Filter INTERVIEW list', 'shousei' ),
			'items_list_navigation' => __( 'INTERVIEW list navigation', 'shousei' ),
			'items_list'            => __( 'INTERVIEW list', 'shousei' ),
			'new_item'              => __( 'New INTERVIEW', 'shousei' ),
			'add_new'               => __( 'Add New', 'shousei' ),
			'add_new_item'          => __( 'Add New INTERVIEW', 'shousei' ),
			'edit_item'             => __( 'Edit INTERVIEW', 'shousei' ),
			'view_item'             => __( 'View INTERVIEW', 'shousei' ),
			'view_items'            => __( 'View INTERVIEW', 'shousei' ),
			'search_items'          => __( 'Search INTERVIEW', 'shousei' ),
			'not_found'             => __( 'No INTERVIEW found', 'shousei' ),
			'not_found_in_trash'    => __( 'No INTERVIEW found in trash', 'shousei' ),
			'parent_item_colon'     => __( 'Parent INTERVIEW:', 'shousei' ),
			'menu_name'             => __( 'INTERVIEW', 'shousei' ),
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
		'rest_base'             => 'interview',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'interview_init' );

/**
 * Sets the post updated messages for the `interview` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `interview` post type.
 */
function interview_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['interview'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'INTERVIEW updated. <a target="_blank" href="%s">View INTERVIEW</a>', 'shousei' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'shousei' ),
		3  => __( 'Custom field deleted.', 'shousei' ),
		4  => __( 'INTERVIEW updated.', 'shousei' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'INTERVIEW restored to revision from %s', 'shousei' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'INTERVIEW published. <a href="%s">View INTERVIEW</a>', 'shousei' ), esc_url( $permalink ) ),
		7  => __( 'INTERVIEW saved.', 'shousei' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'INTERVIEW submitted. <a target="_blank" href="%s">Preview INTERVIEW</a>', 'shousei' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'INTERVIEW scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview INTERVIEW</a>', 'shousei' ),
		date_i18n( __( 'M j, Y @ G:i', 'shousei' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'INTERVIEW draft updated. <a target="_blank" href="%s">Preview INTERVIEW</a>', 'shousei' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'interview_updated_messages' );
