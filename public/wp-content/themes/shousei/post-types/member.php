<?php

/**
 * Registers the `member` post type.
 */
function member_init() {
	register_post_type( 'member', array(
		'labels'                => array(
			'name'                  => __( 'MEMBER', 'shousei' ),
			'singular_name'         => __( 'MEMBER', 'shousei' ),
			'all_items'             => __( 'All MEMBER', 'shousei' ),
			'archives'              => __( 'MEMBER Archives', 'shousei' ),
			'attributes'            => __( 'MEMBER Attributes', 'shousei' ),
			'insert_into_item'      => __( 'Insert into MEMBER', 'shousei' ),
			'uploaded_to_this_item' => __( 'Uploaded to this MEMBER', 'shousei' ),
			'featured_image'        => _x( 'Featured Image', 'member', 'shousei' ),
			'set_featured_image'    => _x( 'Set featured image', 'member', 'shousei' ),
			'remove_featured_image' => _x( 'Remove featured image', 'member', 'shousei' ),
			'use_featured_image'    => _x( 'Use as featured image', 'member', 'shousei' ),
			'filter_items_list'     => __( 'Filter MEMBER list', 'shousei' ),
			'items_list_navigation' => __( 'MEMBER list navigation', 'shousei' ),
			'items_list'            => __( 'MEMBER list', 'shousei' ),
			'new_item'              => __( 'New MEMBER', 'shousei' ),
			'add_new'               => __( 'Add New', 'shousei' ),
			'add_new_item'          => __( 'Add New MEMBER', 'shousei' ),
			'edit_item'             => __( 'Edit MEMBER', 'shousei' ),
			'view_item'             => __( 'View MEMBER', 'shousei' ),
			'view_items'            => __( 'View MEMBER', 'shousei' ),
			'search_items'          => __( 'Search MEMBER', 'shousei' ),
			'not_found'             => __( 'No MEMBER found', 'shousei' ),
			'not_found_in_trash'    => __( 'No MEMBER found in trash', 'shousei' ),
			'parent_item_colon'     => __( 'Parent MEMBER:', 'shousei' ),
			'menu_name'             => __( 'MEMBER', 'shousei' ),
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
		'rest_base'             => 'member',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'member_init' );

/**
 * Sets the post updated messages for the `member` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `member` post type.
 */
function member_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['member'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'MEMBER updated. <a target="_blank" href="%s">View MEMBER</a>', 'shousei' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'shousei' ),
		3  => __( 'Custom field deleted.', 'shousei' ),
		4  => __( 'MEMBER updated.', 'shousei' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'MEMBER restored to revision from %s', 'shousei' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'MEMBER published. <a href="%s">View MEMBER</a>', 'shousei' ), esc_url( $permalink ) ),
		7  => __( 'MEMBER saved.', 'shousei' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'MEMBER submitted. <a target="_blank" href="%s">Preview MEMBER</a>', 'shousei' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'MEMBER scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview MEMBER</a>', 'shousei' ),
		date_i18n( __( 'M j, Y @ G:i', 'shousei' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'MEMBER draft updated. <a target="_blank" href="%s">Preview MEMBER</a>', 'shousei' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'member_updated_messages' );
