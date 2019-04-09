<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sample-wordpress
 */

get_header();
?>

		<article class="o-article">
			<div class="o-inner--small">
				<div class="university">
					<div class="university__title-area">
						<h2 class="m-0 university__title"><span class="university__blue">ま</span>ちの大学</h2>
						<p class="university__day">2019年4月開講！！</p>
					</div>
					<p class="university__sentence">「鎌倉らしい」に「これまでにない働き方があるかも」って感じる仲間をツナギます。「鎌倉らしい」に「これまでにない働き方があるかも」って感じる仲間をツナぎます。（紹介の簡単なテキスト）</p>
				</div>
			</div>
		</article>
		<article class="o-article o-article--news bg-cream">
			<div class="o-inner--small">
				<h2 class="title-01">お知らせ</h2>
				<ul class="c-news-list list-unstyled">
					<?php
					$latest_news_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
					if ( $latest_news_posts->have_posts() ) : while ( $latest_news_posts->have_posts() ) : $latest_news_posts->the_post(); ?>
					<li class="c-news-list__item">
						<a href="<?php the_permalink(); ?>" class="c-news-list__block">
							<time class="c-news-list__time" datetime="<?= the_time('Y-m-d') ?>"><?= the_time('Y-m-d') ?></time>
							<div class="c-news-list__content"><?= the_title() ?></div>
						</a>
					</li>
					<?php endwhile; endif; ?>
				</ul>
				<div class="text-center position-relative mt-2">
                    <a href="<?= home_url('news/') ?>" class="c-button c-button--rounded c-button--right">お知らせ一覧へ</a>
				</div>
			</div>
		</article>
		<article class="o-article">
			<div class="o-inner o-inner--course">
				<h3 class="title-01 text-purple">学部案内</h3>
				<ul class="c-course-list">
					<li class="c-course-list__item">
						<a href="<?= home_url('course/#food') ?>" class="c-course-list__link">
							<div class="c-course-list__img">
								<img src="<?= get_theme_file_uri('img/top/course01.png'); ?>" alt="食学部">
							</div>
						</a>
					</li>
					<li class="c-course-list__item">
						<a href="<?= home_url('course/#mind') ?>" class="c-course-list__link">
							<div class="c-course-list__img">
								<img src="<?= get_theme_file_uri('img/top/course02.png'); ?>" alt="ココロとカラダ学部">
							</div>
						</a>
					</li>
					<li class="c-course-list__item">
						<a href="<?= home_url('course/#idea') ?>" class="c-course-list__link">
							<div class="c-course-list__img">
								<img src="<?= get_theme_file_uri('img/top/course03.png'); ?>" alt="アイデア学部">
							</div>
						</a>
					</li>
				</ul>
				<div class="text-center position-relative mt-2">
                    <a href="<?= home_url('course/') ?>" class="c-button c-button--rounded c-button--purple c-button--right">学部案内へ</a>
                </div>
			</div>
		</article>
		<article class="o-article o-article--circle bg-light-green">
			<div class="o-inner o-inner--circle">
				<h3 class="title-01 text-green">サークル活動</h3>
				<div class="row m-0">
					<?php get_template_part('template-parts/card/card-top') ?>
				</div>
				<div class="text-center position-relative mt-2">
                    <a href="<?= home_url('circle') ?>" class="c-button c-button--rounded c-button--green c-button--right">サークル一覧へ</a>
				</div>
			</div>
		</article>
		<article class="o-article">
			<div class="o-inner o-inner--sns">
				<h3 class="title-01 text-blue-2">活動レポート</h3>
                <?php get_template_part('template-parts/sns-widget') ?>
                <div class="text-center position-relative mt-2">
                    <a href="<?= home_url('report') ?>" class="c-button c-button--rounded c-button--blue c-button--right">more</a>
                </div>
			</div>
        </article>

<?php
get_footer();
