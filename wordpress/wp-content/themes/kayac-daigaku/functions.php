<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 */

if ( ! function_exists( 'kayac_daigaku_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kayac_daigaku_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
    }
endif;
add_action( 'after_setup_theme', 'kayac_daigaku_setup' );

/**
 * Enqueue scripts and styles.
 */
function add_css_scripts() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/common.css');
    if ( is_front_page() || is_page('animation') ) {
        wp_enqueue_style( 'hero-style', get_template_directory_uri() . '/assets/css/hero.css');
    }

    if ( show_hero_animation() ) {
        wp_enqueue_script( 'hero-script', get_template_directory_uri() . '/assets/js/hero.js', array( 'jquery' ), '', true );
    }
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/common.js', array( 'jquery' ), '', true );
    wp_localize_script( 'script', 'theme_ajax', array ( 'url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'add_css_scripts' );

// デフォルト投稿postの本文フィールドを非表示
function my_remove_post_editor_support() {
    remove_post_type_support( 'post', 'editor' );
}
add_action( 'init' , 'my_remove_post_editor_support' );

// カスタム投稿タイプの追加（サークル活動）
function create_post_type_circle() {
    $labels= array(
        'name' => 'サークル活動',
        'all_items' => 'サークル活動一覧',
        'add_new_item' => 'サークル活動を追加',
        'edit_item' => 'サークル活動を編集',
        'view_item' => 'サークル活動を表示'
    );
    $args = array(
        'labels'    => $labels,
        'supports'  => array('title','thumbnail','page-attributes'),
        'public'    => true,
        'show_ui'   => true,
        'menu_position' => 5,
        'has_archive'   => true,
        'hierarchical' => true
    );
    register_post_type('circle', $args);

	// サークル活動のカテゴリーは使わないので非表示
	// register_taxonomy(
    //     'circle_cat', //カテゴリー名（任意）
    //     'circle', //カスタム投稿名
    //     array(
    //         'hierarchical' => true, //カテゴリータイプの指定
    //         'update_count_callback' => '_update_post_term_count',
    //         'label' => 'カテゴリー', //ダッシュボードに表示させる名前
    //         'public' => true,
    //         'show_ui' => true
    //     )
    // );

    //タグタイプの設定（カスタムタクソノミーの設定）
    register_taxonomy(
        'circle_tag', //タグ名（任意）
        'circle', //カスタム投稿名
        array(
            'hierarchical' => false, //タグタイプの指定（階層をもたない）
            'update_count_callback' => '_update_post_term_count',
            'label' => 'サークル活動のタグ', //ダッシュボードに表示させる名前
            'public' => true,
            'show_ui' => true
        )
    );
}
add_action( 'init', 'create_post_type_circle' );

// カスタム投稿タイプの追加(コース紹介)
function create_post_type_course(){
    $labels= array(
        'name' => 'コース紹介',
        'all_items' => 'コース紹介一覧',
        'add_new_item' => 'コース紹介を追加',
        'edit_item' => 'コース紹介を編集',
        'view_item' => 'コース紹介を表示'
    );
    $args = array(
        'labels'    => $labels,
        'supports'  => array('title','thumbnail','page-attributes'),
        'public'    => true,
        'show_ui'   => true,
        'menu_position' => 5,
        'has_archive'   => true,
        'hierarchical' => true
    );
    register_post_type('course', $args);

        //カテゴリタイプの設定（カスタムタクソノミーの設定）
        register_taxonomy(
            'coursecat', //カテゴリー名（任意）
            'course', //カスタム投稿名
            array(
              'hierarchical' => true, //カテゴリータイプの指定
              'update_count_callback' => '_update_post_term_count',
              //ダッシュボードに表示させる名前
              'label' => 'コース紹介のカテゴリー',
              'public' => true,
              'show_ui' => true
            )
          );
        //タグタイプの設定（カスタムタクソノミーの設定）
        // コース紹介のカテゴリーは使わないので非表示
        //   register_taxonomy(
        //     'coursetag', //タグ名（任意）
        //     'course', //カスタム投稿名
        //     array(
        //       'hierarchical' => false, //タグタイプの指定（階層をもたない）
        //       'update_count_callback' => '_update_post_term_count',
        //       //ダッシュボードに表示させる名前
        //       'label' => 'コース紹介のタグ',
        //       'public' => true,
        //       'show_ui' => true
        //     )
        //   );
}
add_action('init', 'create_post_type_course', 0);


// 下層のheroを設定
function get_hero_title() {
    if ( is_home() || is_singular('post') ) {
        return [
            'en' => 'NEWS',
            'title' => 'お知らせ'
        ];
    }

    if ( is_page('contact') ) {
        return [
            'en' => 'FAQ & CONTACT',
            'title' => get_the_title()
        ];
    }

    if ( is_post_type_archive('course') ) {
        return [
            'en' => 'COURSE',
            'title' => '学部案内'
        ];
    }

    if ( is_singular('course') ) {
        return [
            'en' => 'COURSE DETAIL',
            'title' => 'コース紹介'
        ];
    }

    if ( is_post_type_archive('circle') ) {
        return [
            'en' => 'CIRCLE',
            'title' => 'サークル紹介'
        ];
    }

    if ( is_singular('circle') ) {
        return [
            'en' => 'CIRCLE DETAIL',
            'title' => get_the_title()
        ];
    }

    if ( is_404() ) {
        return [
            'en' => '404',
            'title' => 'Not Found'
        ];
    }

    return [
        'en' => strtoupper(urldecode(basename(get_permalink()))), // slug
        'title' => get_the_title()
    ];
}

function setcookie_action() {
    $day = 1;
    // TODO 開発時は60秒だけにしてる
    // $expire = time() + 60 * 60 * 24 * $day;
    $expire = time() + 60;
        if ( !isset($_COOKIE['visited_home']) ) {
        setcookie('visited_home', true, $expire, '/');
    }
}
add_action( 'get_header', 'setcookie_action');

/**
 * hero-animationを見せるか返す
 * @return boolean
 */
function show_hero_animation() {
    if ( is_page('animation') ) return true; // debug用
    if ( !is_front_page() ) return false;
    if ( isset($_COOKIE['visited_home']) ) return false;

    return true;
}

function add_query_vars_filter( $vars ){
    $vars[] = 'show_all';
    return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

/**
 * @return boolean
 */
function is_show_all() {
    return !!get_query_var( 'show_all', false );
}

function custom_pre_get_posts( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
        return;
    }

    if ( $query->is_archive('circle') ) {
        $query->set( 'posts_per_page', is_show_all() ? -1 : 6 );
        return;
    }

    $query->set( 'posts_per_page', 6 );
}
add_action( 'pre_get_posts', 'custom_pre_get_posts' );

function get_card_view() {
    $page = isset($_POST['page']) && is_numeric($_POST['page']) ? $_POST['page'] : 2;
    $post_type = isset($_POST['post_type']) ? $_POST['post_type'] : 'post';
    $posts_per_page = $post_type === 'post' ? 6 : 3;

    $args = array (
        'post_type' => $post_type,
        'posts_per_page' => $posts_per_page,
        'paged' => $page,
        'post_status' => array( 'publish' ),
        'perm' => 'readable',
    );
    $query = new WP_Query( $args );
    header('X_Max_Num_Pages: ' . $query->max_num_pages);
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part('template-parts/card/card', $post_type);
        }
        wp_reset_postdata();
    }
    exit;
}
add_action( 'wp_ajax_get_card_view', 'get_card_view' );
add_action( 'wp_ajax_nopriv_get_card_view', 'get_card_view' );

function get_course_card_view() {
    $page = isset($_POST['page']) && is_numeric($_POST['page']) ? $_POST['page'] : 2;
    $term = isset($_POST['term']) ? $_POST['term'] : 'idea';

    $args = array (
        'post_type' => 'course',
        'posts_per_page' => 3,
        'paged' => $page,
        'post_status' => array( 'publish' ),
        'perm' => 'readable',
        'tax_query' => [
            [
                'taxonomy' => 'coursecat',
                'field' => 'slug',
                'terms' => $term,
                'include_children' => true,
                'operator' => 'AND'
            ]
        ]
    );
    $query = new WP_Query( $args );
    header('X_Max_Num_Pages: ' . $query->max_num_pages);
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part('template-parts/card/card', 'course');
        }
        wp_reset_postdata();
    }
    exit;
}
add_action( 'wp_ajax_get_course_card_view', 'get_course_card_view' );
add_action( 'wp_ajax_nopriv_get_course_card_view', 'get_course_card_view' );

class SNS {
    const instagram = 'https://www.instagram.com/?hl=ja';
}
