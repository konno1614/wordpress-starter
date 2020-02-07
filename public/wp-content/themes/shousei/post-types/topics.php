<?php

/**
 * Registers the `topics` post type.
 */
function topics_init() {
	register_post_type( 'topics', array(
		'labels'                => array(
			'name'                  => __( 'TOPICS', 'shousei' ),
			'singular_name'         => __( 'TOPICS', 'shousei' ),
			'all_items'             => __( 'All TOPICS', 'shousei' ),
			'archives'              => __( 'TOPICS Archives', 'shousei' ),
			'attributes'            => __( 'TOPICS Attributes', 'shousei' ),
			'insert_into_item'      => __( 'Insert into TOPICS', 'shousei' ),
			'uploaded_to_this_item' => __( 'Uploaded to this TOPICS', 'shousei' ),
			'featured_image'        => _x( 'Featured Image', 'topics', 'shousei' ),
			'set_featured_image'    => _x( 'Set featured image', 'topics', 'shousei' ),
			'remove_featured_image' => _x( 'Remove featured image', 'topics', 'shousei' ),
			'use_featured_image'    => _x( 'Use as featured image', 'topics', 'shousei' ),
			'filter_items_list'     => __( 'Filter TOPICS list', 'shousei' ),
			'items_list_navigation' => __( 'TOPICS list navigation', 'shousei' ),
			'items_list'            => __( 'TOPICS list', 'shousei' ),
			'new_item'              => __( 'New TOPICS', 'shousei' ),
			'add_new'               => __( 'Add New', 'shousei' ),
			'add_new_item'          => __( 'Add New TOPICS', 'shousei' ),
			'edit_item'             => __( 'Edit TOPICS', 'shousei' ),
			'view_item'             => __( 'View TOPICS', 'shousei' ),
			'view_items'            => __( 'View TOPICS', 'shousei' ),
			'search_items'          => __( 'Search TOPICS', 'shousei' ),
			'not_found'             => __( 'No TOPICS found', 'shousei' ),
			'not_found_in_trash'    => __( 'No TOPICS found in trash', 'shousei' ),
			'parent_item_colon'     => __( 'Parent TOPICS:', 'shousei' ),
			'menu_name'             => __( 'TOPICS', 'shousei' ),
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
		'rest_base'             => 'topics',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'topics_init' );

/**
 * Sets the post updated messages for the `topics` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `topics` post type.
 */
function topics_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['topics'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'TOPICS updated. <a target="_blank" href="%s">View TOPICS</a>', 'shousei' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'shousei' ),
		3  => __( 'Custom field deleted.', 'shousei' ),
		4  => __( 'TOPICS updated.', 'shousei' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'TOPICS restored to revision from %s', 'shousei' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'TOPICS published. <a href="%s">View TOPICS</a>', 'shousei' ), esc_url( $permalink ) ),
		7  => __( 'TOPICS saved.', 'shousei' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'TOPICS submitted. <a target="_blank" href="%s">Preview TOPICS</a>', 'shousei' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'TOPICS scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview TOPICS</a>', 'shousei' ),
		date_i18n( __( 'M j, Y @ G:i', 'shousei' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'TOPICS draft updated. <a target="_blank" href="%s">Preview TOPICS</a>', 'shousei' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'topics_updated_messages' );
