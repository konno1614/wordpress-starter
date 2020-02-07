<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shousei
 */

get_header();
?>

<div class="c-top">
	<section class="c-top__section c-top__main">
		<div class="o-shape o-shape--main"></div>
		<div class="o-inner c-top__main-inner">
			<div class="c-top__main-flex">
				<div class="c-top__main-text">
					<h2 class="title">
						鎌倉<span>の</span>伝統<span>と</span>革新<span>を</span>、<br class="new-line_sp">知財でサポートする
					</h2>
					<p class="text">
						鎌倉にたずさわる方々の、<br class="new-line_sp">営み、喜び、誇りを守り育て、<br class="new-line_sp"><br class="new-line_pc">そして次の世代につないでいきたい<br class="new-line_sp"><br class="new-line_pc">鎌倉が魅力ある鎌倉であり続けることを、<br class="new-line_sp">知的財産の側面から実現します
					</p>
				</div>
				<div class="c-top__main-logo">
					<img src="<?= get_theme_file_uri('img/top/logos.png'); ?>" alt="LOGO">
				</div>
			</div>
		</div>
	</section>
	<section class="c-top__section c-top__topics">
		<div class="o-inner">
			<div class="c-top__head">
				<h2 class="c-top__title">TOPICS</h2>
				<a class="c-top__page-link" href="<?= home_url('topics') ?>">一覧を見る</a>
			</div>
			<ul class="c-top__topics-list">
				<?php
					$args = [
						'post_type'      => 'topics',
						'posts_per_page' => 5
					];
					$posts = get_posts($args) ?>
					<?php foreach ($posts as $post) : ?>
					<?php get_template_part('template-parts/topics/topics-item') ?>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
	<?php get_template_part('template-parts/interview/interview-list') ?>
	<section class="c-top__section c-top__faq">
		<div class="o-shape o-shape--top"></div>
		<div class="o-shape--body">
			<div class="o-inner c-top__faq-inner">
				<div class="c-top__head">
					<h2 class="c-top__title">FAQ</h2>
					<a class="c-top__page-link" href="<?= home_url('faq') ?>">一覧を見る</a>
				</div>
				<ul class="c-top__faq-list">
					<?php
						$args = [
							'post_type'      => 'faq',
							'posts_per_page' => 6
						];
						$posts = get_posts($args) ?>
						<?php foreach ($posts as $post) : ?>
					<li class="c-top__faq-item">
						<h3 class="c-top__faq-title">
							<span class="question">Q</span>
							<span class="title">
							<?php
								$faq_title = $post->post_title;
								$limit = 52;
								if(mb_strlen($faq_title) > $limit) {
									$title = mb_substr($faq_title,0,$limit);
									echo $title. … ;
								} else {
									echo $post->post_title;
								}
							?>
							</span>
						</h3>
						<p class="c-top__faq-text">
							<?php
								$faq_text = $post->post_content;
								$limit = 65;
								if(mb_strlen($faq_text) > $limit) {
									$title = mb_substr($faq_text,0,$limit);
									echo $title. … ;
								} else {
									echo nl2br($post->post_content);
								}
							?>
						</p>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="o-shape o-shape--under o-shape--under_top-faq"></div>
	</section>
	<?php get_template_part('template-parts/banner') ?>
	<?php get_template_part('template-parts/contact') ?>
</div>

<?php get_template_part('template-parts/side-bar') ?>
<?php get_template_part('template-parts/contact-button') ?>

<?php
get_footer();
