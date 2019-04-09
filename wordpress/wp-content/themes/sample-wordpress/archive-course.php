<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="o-inner course">
                <ul class="course__list">
                    <a href="#food" class="course__link">
                        <li class="course__item" style="background-image: url(<?= get_theme_file_uri('img/course/course01.png') ?>)" alt="thumbnail"></li>
                    </a>
                    <a href="#mind" class="course__link">
                        <li class="course__item" style="background-image: url(<?= get_theme_file_uri('img/course/course02.png') ?>)" alt="thumbnail"></li>
                    </a>
                    <a href="#idea" class="course__link">
                        <li class="course__item" style="background-image: url(<?= get_theme_file_uri('img/course/course03.png') ?>)" alt="thumbnail"></li>
                    </a>
                </ul>
            </div>

            <div id="food" class="course__bg course__bg--01">
                <div class="o-inner">
                    <div class="course__title-area">
                        <p class="course__title--en">FOOD</p>
                        <h3 class="course__title course__title--01">フード学部</h3>
                    </div>
                    <div class="course__slider-area">
                        <?php get_template_part('template-parts/slider/slider-food') ?>
                    </div>
                    <div class="course__flex">
                        <div class="course__flex--left">
                            <h4 class="course__dean-greeting--sp">フード学部長挨拶</h4>
                            <img src="<?= get_theme_file_uri('img/course/dean-thumbnail.png'); ?>" alt="thumbnail">
                        </div>
                        <div class="course__flex--right">
                            <h4 class="course__dean-greeting--pc">フード学部長挨拶</h4>
                            <p class="course__dean-en">Name Name</p>
                            <h4 class="course__dean-name">中山春奈</h4>
                            <p class="course__dean-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <h4 class="title-02"><span class="course__green">コ</span>ース一覧</h4>
                    <div class="row m-0 js-food-wrapper">
                    <?php
                        $args = array(
                        'post_type' => 'course',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'tax_query' => [
                                    [
                                        'taxonomy' => 'coursecat',
                                        'field' => 'slug',
                                        'terms' => 'food',
                                        'include_children' => true,
                                        'operator' => 'AND'
                                    ]
                                ]
                        ); ?>
                    <?php $my_query = new WP_Query( $args ); ?>
                    <?php if($my_query->have_posts()): ?>
                    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                        <?php get_template_part('template-parts/card/card-course', 'course') ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    </div>
                    <?php if ( get_next_posts_link('', $my_query->max_num_pages) ) : ?>
                    <div class="text-center position-relative mt-2 js-button-wrapper">
                        <button
                            class="c-button c-button--rounded c-button--purple c-button--down js-course-more-button"
                            data-term="food"
                            data-page="2"
                            data-target="js-food-wrapper"
                        >more</button>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div id="mind" class="course__bg course__bg--02">
                <div class="o-inner">
                    <div class="course__title-area">
                        <p class="course__title--en">MIND</p>
                        <h3 class="course__title course__title--02">マインド学部</h3>
                    </div>
                    <div class="course__slider-area">
                        <?php get_template_part('template-parts/slider/slider-mind') ?>
                    </div>
                    <div class="course__flex">
                        <div class="course__flex--left">
                            <h4 class="course__dean-greeting--sp">マインド学部長挨拶</h4>
                            <img src="<?= get_theme_file_uri('img/course/dean-thumbnail.png'); ?>" alt="thumbnail">
                        </div>
                        <div class="course__flex--right">
                            <h4 class="course__dean-greeting--pc">マインド学部長挨拶</h4>
                            <p class="course__dean-en">Name Name</p>
                            <h4 class="course__dean-name">宍戸幹央</h4>
                            <p class="course__dean-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <h4 class="title-02"><span class="course__green">コ</span>ース一覧</h4>
                    <div class="row m-0 js-mind-wrapper">
                    <?php
                        $args = array(
                        'post_type' => 'course',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'tax_query' => [
                                [
                                    'taxonomy' => 'coursecat',
                                    'field' => 'slug',
                                    'terms' => 'mind',
                                    'include_children' => true,
                                    'operator' => 'AND'
                                ]
                            ]
                        ); ?>
                    <?php $my_query = new WP_Query( $args ); ?>
                    <?php if($my_query->have_posts()): ?>
                    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                        <?php get_template_part('template-parts/card/card-course', 'course') ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    </div>
                    <?php if ( get_next_posts_link('', $my_query->max_num_pages) ) : ?>
                    <div class="text-center position-relative mt-2 js-button-wrapper">
                        <button
                            class="c-button c-button--rounded c-button--purple c-button--down js-course-more-button"
                            data-term="mind"
                            data-page="2"
                            data-target="js-mind-wrapper"
                        >more</button>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div id="idea" class="course__bg course__bg--03">
                <div class="o-inner">
                    <div class="course__title-area">
                        <p class="course__title--en">IDEA</p>
                        <h3 class="course__title course__title--03">アイデア学部</h3>
                    </div>
                    <div class="course__slider-area">
                        <?php get_template_part('template-parts/slider/slider-idea') ?>
                    </div>
                    <div class="course__flex">
                        <div class="course__flex--left">
                            <h4 class="course__dean-greeting--sp">アイデア学部長挨拶</h4>
                            <img src="<?= get_theme_file_uri('img/course/dean-thumbnail.png'); ?>" alt="thumbnail">
                        </div>
                        <div class="course__flex--right">
                            <h4 class="course__dean-greeting--pc">アイデア学部長挨拶</h4>
                            <p class="course__dean-en">Name Name</p>
                            <h4 class="course__dean-name">北川尚宏</h4>
                            <p class="course__dean-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <h4 class="title-02"><span class="course__green">コ</span>ース一覧</h4>
                    <div class="row m-0 js-idea-wrapper">
                    <?php
                        $args = array(
                        'post_type' => 'course',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'tax_query' => [
                                [
                                    'taxonomy' => 'coursecat',
                                    'field' => 'slug',
                                    'terms' => 'idea',
                                    'include_children' => true,
                                    'operator' => 'AND'
                                ]
                            ]
                        ); ?>
                    <?php $my_query = new WP_Query( $args ); ?>
                    <?php if($my_query->have_posts()): ?>
                    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                        <?php get_template_part('template-parts/card/card-course', 'course') ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    </div>
                    <?php if ( get_next_posts_link('', $my_query->max_num_pages) ) : ?>
                    <div class="text-center position-relative mt-2 js-button-wrapper">
                        <button
                            class="c-button c-button--rounded c-button--purple c-button--down js-course-more-button"
                            data-term="idea"
                            data-page="2"
                            data-target="js-idea-wrapper"
                        >more</button>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();



