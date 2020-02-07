<?php

/**
 * Registers the `faq` post type.
 */
function faq_init() {
	register_post_type( 'faq', array(
		'labels'                => array(
			'name'                  => __( 'FAQ', 'shousei' ),
			'singular_name'         => __( 'FAQ', 'shousei' ),
			'all_items'             => __( 'All FAQ', 'shousei' ),
			'archives'              => __( 'FAQ Archives', 'shousei' ),
			'attributes'            => __( 'FAQ Attributes', 'shousei' ),
			'insert_into_item'      => __( 'Insert into FAQ', 'shousei' ),
			'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'shousei' ),
			'featured_image'        => _x( 'Featured Image', 'faq', 'shousei' ),
			'set_featured_image'    => _x( 'Set featured image', 'faq', 'shousei' ),
			'remove_featured_image' => _x( 'Remove featured image', 'faq', 'shousei' ),
			'use_featured_image'    => _x( 'Use as featured image', 'faq', 'shousei' ),
			'filter_items_list'     => __( 'Filter FAQ list', 'shousei' ),
			'items_list_navigation' => __( 'FAQ list navigation', 'shousei' ),
			'items_list'            => __( 'FAQ list', 'shousei' ),
			'new_item'              => __( 'New FAQ', 'shousei' ),
			'add_new'               => __( 'Add New', 'shousei' ),
			'add_new_item'          => __( 'Add New FAQ', 'shousei' ),
			'edit_item'             => __( 'Edit FAQ', 'shousei' ),
			'view_item'             => __( 'View FAQ', 'shousei' ),
			'view_items'            => __( 'View FAQ', 'shousei' ),
			'search_items'          => __( 'Search FAQ', 'shousei' ),
			'not_found'             => __( 'No FAQ found', 'shousei' ),
			'not_found_in_trash'    => __( 'No FAQ found in trash', 'shousei' ),
			'parent_item_colon'     => __( 'Parent FAQ:', 'shousei' ),
			'menu_name'             => __( 'FAQ', 'shousei' ),
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
		'rest_base'             => 'faq',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'faq_init' );

/**
 * Sets the post updated messages for the `faq` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `faq` post type.
 */
function faq_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['faq'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'FAQ updated. <a target="_blank" href="%s">View FAQ</a>', 'shousei' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'shousei' ),
		3  => __( 'Custom field deleted.', 'shousei' ),
		4  => __( 'FAQ updated.', 'shousei' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'FAQ restored to revision from %s', 'shousei' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'FAQ published. <a href="%s">View FAQ</a>', 'shousei' ), esc_url( $permalink ) ),
		7  => __( 'FAQ saved.', 'shousei' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'FAQ submitted. <a target="_blank" href="%s">Preview FAQ</a>', 'shousei' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'FAQ scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview FAQ</a>', 'shousei' ),
		date_i18n( __( 'M j, Y @ G:i', 'shousei' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'FAQ draft updated. <a target="_blank" href="%s">Preview FAQ</a>', 'shousei' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'faq_updated_messages' );
