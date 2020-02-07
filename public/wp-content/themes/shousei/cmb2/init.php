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
function shousei_enter_title_here($title)
{
	/** @var WP_Screen $screen */
	$screen = get_current_screen();
	if ($screen->post_type === 'works') {
		$title = 'ブランド名称';
	}
	return $title;
}
add_filter('enter_title_here', 'shousei_enter_title_here');

/**
 * Disable Visual editor WORKS
 */
function shousei_user_can_richedit($default)
{
	/** @var WP_Screen $screen */
	$screen = get_current_screen();
	if ($screen->post_type === 'works') {
		$default = false;
	}
	if ($screen->post_type === 'topics') {
		$default = false;
	}

	return $default;
}
add_filter('user_can_richedit', 'shousei_user_can_richedit');

function shousei_admin_post_thumbnail_html($content)
{
	/** @var WP_Screen $screen */
	$screen = get_current_screen();
	if ($screen->post_type === 'works') {
		return $content .= '<p>ブランドロゴ</p>';
	}

	return $content;
}

add_filter('admin_post_thumbnail_html', 'shousei_admin_post_thumbnail_html');


// /**
//  * Enable custom query string
//  */
// function shousei_query_vars($vars)
// {
// 	$vars[] = 'yearmonth';
// 	$vars[] = 'category';
// 	$vars[] = 'text';

// 	return $vars;
// }

// add_filter('query_vars', 'shousei_query_vars');

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
function shousei_pre_get_posts($query)
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

	if ($query->is_post_type_archive('works')) {
		$query->set('posts_per_page', 15);
		$query->set('orderby', 'date');
		$query->set('order', 'DESC');
		return;
	}

	if ($query->is_post_type_archive('interview')) {
		$query->set('posts_per_page', 15);
		$query->set('orderby', 'date');
		$query->set('order', 'DESC');
		return;
	}

	if ($query->is_post_type_archive('faq')) {
		$query->set('posts_per_page', 8);
		$query->set('orderby', 'date');
		$query->set('order', 'DESC');
		return;
	}

	if ($query->is_post_type_archive('member')) {
		$query->set('posts_per_page', -1);
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

add_action('pre_get_posts', 'shousei_pre_get_posts');

/**
 * TOPICS
 */
function shousei_register_topics_metabox()
{
	$prefix = 'shousei_';

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

add_action('cmb2_admin_init', 'shousei_register_topics_metabox');

/**
 * WORKS
 */
function shousei_register_works_metabox()
{
	$prefix = 'shousei_';

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'works_brand_number_metabox',
		'title'        => 'ブランドの商標登録番号',
		'object_types' => ['works'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => 'ブランドの商標登録番号',
		'id'     => $prefix . 'works_brand_number',
		'type'   => 'text',
		'column' => [
			'position' => 3,
			'name'     => 'ブランドの商標登録番号'
		]
	]);

}

add_action('cmb2_admin_init', 'shousei_register_works_metabox');



/**
 * INTERVIEW
 */
function shousei_register_interview_metabox()
{
	$prefix = 'shousei_';

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'interview_user_metabox',
		'title'        => 'お客様の名前',
		'object_types' => ['interview'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => 'お客様の名前',
		'id'     => $prefix . 'interview_user',
		'type'   => 'text',
		'column' => [
			'position' => 4,
			'name'     => 'お客様の名前'
		]
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'interview_user_company_metabox',
		'title'        => 'お客様の会社名',
		'object_types' => ['interview'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => 'お客様の会社名',
		'id'     => $prefix . 'interview_user_company',
		'type'   => 'text',
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'interview_user_position_metabox',
		'title'        => 'お客様の役職',
		'object_types' => ['interview'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => 'お客様の役職',
		'id'     => $prefix . 'interview_user_position',
		'type'   => 'text',
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'interview_title_metabox',
		'title'        => 'インタビュー記事のタイトル',
		'object_types' => ['interview'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => 'インタビュー記事のタイトル',
		'id'     => $prefix . 'interview_title',
		'type'   => 'textarea_small',
		'column' => [
			'position' => 5,
			'name'     => 'インタビュー記事のタイトル'
		]
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'interview_main_image_metabox',
		'title'        => 'インタビュー記事のメイン画像',
		'object_types' => ['interview'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => 'インタビュー記事のメイン画像',
		'description' => '推奨サイズは幅1000px以上です。',
		'id'     => $prefix . 'interview_main_image',
		'type'   => 'file',
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'interview_intro_metabox',
		'title'        => 'インタビュー記事の導入文',
		'object_types' => ['interview'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => 'インタビュー記事の導入文',
		'id'     => $prefix . 'interview_intro',
		'type'   => 'textarea_small',
	]);

	// ループ
	$cmb = new_cmb2_box([
		'id'           => $prefix . 'interview_contents_metabox',
		'title'        => 'インタビューの内容',
		'object_types' => ['interview'],
		'context'      => 'after_title',
		'show_names'   => true,
	]);
	$group_field_id = $cmb->add_field([
		'id'     => $prefix . 'interview_contents',
		'type' => 'group',
		'options'     => array(
			'group_title'       => __( 'インタビューの内容 {#}', 'cmb2' ),
			'add_button'        => __( '追加', 'cmb2' ),
			'remove_button'     => __( '削除', 'cmb2' ),
			'sortable'          => true,
			'remove_confirm' => '削除してよろしいですか？',
		),
	]);
	$cmb->add_group_field($group_field_id, [
		'name' => 'インタビューの質問',
		'id'     => $prefix . 'interview_question',
		'type' => 'textarea_small',
	]);
	$cmb->add_group_field($group_field_id, [
		'name' => 'インタビューの回答',
		'id'     => $prefix . 'interview_answer',
		'type' => 'textarea_small',
	]);
	$cmb->add_group_field($group_field_id, [
		'name' => 'インタビューの画像',
		'description' => '推奨サイズは幅750px以上です。',
		'id'     => $prefix . 'interview_file',
		'type' => 'file',
	]);
}

add_action('cmb2_admin_init', 'shousei_register_interview_metabox');


/**
 * FAQ
 */
function shousei_register_faq_metabox()
{
	$prefix = 'shousei_';

	// $cmb = new_cmb2_box([
	// 	'id'           => $prefix . 'question_metabox',
	// 	'title'        => 'カスタム投稿欄01',
	// 	'object_types' => ['faq'],
	// 	'context'      => 'after_title',
	// 	'show_names'   => false
	// ]);
	// $cmb->add_field([
	// 	'name'   => 'カスタム投稿欄01',
	// 	'id'     => $prefix . 'question',
	// 	'type'   => 'textarea_small',
	// 	'column' => [
	// 		'position' => 3,
	// 		'name'     => 'カスタム投稿欄01'
	// 	]
	// ]);

	// $cmb = new_cmb2_box([
	// 	'id'           => $prefix . 'answer_metabox',
	// 	'title'        => 'カスタム投稿欄02',
	// 	'object_types' => ['faq'],
	// 	'context'      => 'after_title',
	// 	'show_names'   => false
	// ]);
	// $cmb->add_field([
	// 	'name'   => 'カスタム投稿欄02',
	// 	'id'     => $prefix . 'answer',
	// 	'type'   => 'textarea_small',
	// 	'column' => [
	// 		'position' => 4,
	// 		'name'     => 'カスタム投稿欄02'
	// 	]
	// ]);
}

add_action('cmb2_admin_init', 'shousei_register_faq_metabox');


/**
 * MEMBER
 */
function shousei_register_member_metabox()
{
	$prefix = 'shousei_';

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'furigana_metabox',
		'title'        => 'ローマ字',
		'object_types' => ['member'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => 'ローマ字',
		'id'     => $prefix . 'furigana',
		'type'   => 'text'
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'list_qualification_metabox',
		'title'        => '一覧に表示する資格',
		'object_types' => ['member'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => '一覧に表示する資格',
		'id'     => $prefix . 'list_qualification',
		'description' => '一覧に表示する資格が無い場合は空欄',
		'type'   => 'text'
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'list_position_metabox',
		'title'        => '一覧に表示する肩書き',
		'object_types' => ['member'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => '一覧に表示する肩書き',
		'id'     => $prefix . 'list_position',
		'description' => '一覧に表示する資格が無い場合は空欄',
		'type'   => 'text'
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'qualification_metabox',
		'title'        => '資格',
		'object_types' => ['member'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => '資格',
		'id'     => $prefix . 'qualification',
		'type'   => 'textarea_small'
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'field_metabox',
		'title'        => '専門分野',
		'object_types' => ['member'],
		'context'      => 'after_title',
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => '専門分野',
		'id'     => $prefix . 'field',
		'type'   => 'textarea_small'
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'education_metabox',
		'title'        => '学歴',
		'object_types' => ['member'],
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => '学歴',
		'id'     => $prefix . 'education',
		'type'   => 'text'
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'belongs_metabox',
		'title'        => '所属',
		'object_types' => ['member'],
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => '所属',
		'id'     => $prefix . 'belongs',
		'type'   => 'textarea_small'
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'instructor_metabox',
		'title'        => '講師',
		'object_types' => ['member'],
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => '講師',
		'id'     => $prefix . 'instructor',
		'type'   => 'textarea_code'
	]);

	$cmb = new_cmb2_box([
		'id'           => $prefix . 'career_metabox',
		'title'        => '経歴',
		'object_types' => ['member'],
		'show_names'   => false
	]);
	$cmb->add_field([
		'name'   => '経歴',
		'id'     => $prefix . 'career',
		'type'   => 'textarea_code'
	]);

}

add_action('cmb2_admin_init', 'shousei_register_member_metabox');
