<?php

require_once WP_PLUGIN_DIR . '/cmb2/init.php';
require_once WP_PLUGIN_DIR . '/cmb2-post-search-field/cmb2_post_search_field.php';

/**
 * Set post type title
 *
 * @param $title
 *
 * @return string
 */
function starter_enter_title_here($title)
{
	/** @var WP_Screen $screen */
	$screen = get_current_screen();
	if ($screen->post_type === 'works') {
		$title = 'ブランド名称';
	}
	return $title;
}
add_filter('enter_title_here', 'starter_enter_title_here');

/**
 * Disable Visual editor WORKS
 */
function starter_user_can_richedit($default)
{
	/** @var WP_Screen $screen */
	$screen = get_current_screen();
	if ($screen->post_type === 'topics') {
		$default = false;
	}

	return $default;
}
add_filter('user_can_richedit', 'starter_user_can_richedit');

// サムネイル下にテキストの表示
function starter_admin_post_thumbnail_html($content)
{
	/** @var WP_Screen $screen */
	$screen = get_current_screen();
	if ($screen->post_type === 'works') {
		return $content .= '<p>ブランドロゴ</p>';
	}

	return $content;
}

add_filter('admin_post_thumbnail_html', 'starter_admin_post_thumbnail_html');


// /**
//  * Enable custom query string
//  */
// function starter_query_vars($vars)
// {
// 	$vars[] = 'yearmonth';
// 	$vars[] = 'category';
// 	$vars[] = 'text';

// 	return $vars;
// }

// add_filter('query_vars', 'starter_query_vars');

/**
 * WP_Query の動的変更
 *
 * @param string $orderby
 * @param WP_Query $query
 *
 * @return mixed
 */
/**
 * @param WP_Query $query
 */
function starter_pre_get_posts($query)
{
	if (is_admin() || ! $query->is_main_query()) {
		return;
	}

//	// トップページ
//	if ($query->is_home()) {
//		// 処理内容
//		return;
//	}

//	// 固定ページ
//	if ($query->is_page()) {
//		// 処理内容
//		return;
//	}

//	// アーカイブページ
//	if ($query->is_archive()) {
//		// 処理内容
//		return;
//	}

	// カスタム投稿タイプアーカイブページ
	if ($query->is_post_type_archive('topics')) {
		$query->set('posts_per_page', 8);
		$query->set('orderby', 'date');
		$query->set('order', 'DESC');
		return;
	}

//	// 日付アーカイブページ
//	if ($query->is_date()) {
//		// 処理内容
//		return;
//	}
//
//	// 年別アーカイブページ
//	if ($query->is_year()) {
//		// 処理内容
//		return;
//	}
//
//	// 月別アーカイブページ
//	if ($query->is_month()) {
//		// 処理内容
//		return;
//	}
//
//	// 制作者アーカイブページ
//	if ($query->is_author()) {
//		// 処理内容
//		return;
//	}
//
//	// カテゴリーページ
//	if ($query->is_category()) {
//		// 処理内容
//		return;
//	}
//
//	// タグページ
//	if ($query->is_tag()) {
//		// 処理内容
//		return;
//	}
//
//	// タクソノミーページ
//	if ($query->is_tax()) {
//		// 処理内容
//		return;
//	}
//
//	//詳細ページ
//	if ($query->is_single()) {
//		// 処理内容
//		return;
//	}
//
//	// 検索結果ページ
//	if ($query->is_search()) {
//		// 処理内容
//		return;
//	}
//
//	// フィードページ
//	if ($query->is_feed()) {
//		// 処理内容
//		return;
//	}
//
//	// 404ページ
//	if ($query->is_404()) {
//		// 処理内容
//		return;
//	}
}

add_action('pre_get_posts', 'starter_pre_get_posts');

/**
 * TOPICS
 */
function starter_register_topics_metabox()
{
	$prefix = 'starter_';

	// $cmb = new_cmb2_box([
	// 	'id'           => $prefix . 'field01_metabox',
	// 	'title'        => '入力欄01',
	// 	'object_types' => ['topics'],
	// 	'context'      => 'after_title',
	// 	'show_names'   => false
	// ]);
	// $cmb->add_field([
	// 	'name'   => '入力欄01',
	// 	'id'     => $prefix . 'field01',
	// 	'type'   => 'text_small',
	// 	'column' => [
	// 		'position' => 3,
	// 		'name'     => '入力欄01'
	// 	]
	// ]);

	// $cmb = new_cmb2_box([
	// 	'id'           => $prefix . 'field02_metabox',
	// 	'title'        => '入力欄02',
	// 	'object_types' => ['topics'],
	// 	'context'      => 'after_title',
	// 	'show_names'   => false
	// ]);
	// $cmb->add_field([
	// 	'name'   => '入力欄02',
	// 	'id'     => $prefix . 'field02',
	// 	'type'   => 'textarea_small',
	// 	'column' => [
	// 		'position' => 4,
	// 		'name'     => '入力欄02'
	// 	]
	// ]);
}

add_action('cmb2_admin_init', 'starter_register_topics_metabox');
