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

<div class="c-interview">
	<div class="c-interview__inner">
		<div class="o-shape o-shape--page-top"></div>
		<section class="c-interview__section">
			<div class="o-inner">
				<h2 class="c-interview__title">INTERVIEW</h2>
				<p class="c-interview__text">お客様からの言葉が私たちの原動力。気軽にご相談いただけるような、お客様との距離が近い特許事務所を目指しています。</p>
				<div class="c-interview__interview-list">
					<h3>INTERVIEW</h3>
					<?php get_template_part('template-parts/interview/interview-category') ?>
					<?php if (have_posts()) : ?>
						<ul class="c-interview__list">
							<?php
								$args = [
									'post_type'      => 'interview',
									'posts_per_page' => 15
								];
								$posts = get_posts($args) ?>
								<?php foreach ($posts as $post) : ?>
							<?php get_template_part('template-parts/interview/interview-item') ?>
							<?php endforeach; ?>
						</ul>
						<?php get_template_part('template-parts/interview/interview-pagenation') ?>
					<?php else: ?>
						<p>INTERVIEW LISTはありません。</p>
					<?php endif; ?>
				</div>
			</div>
			<!-- ブランドリストが多くなれば表示可能
			<div class="o-shape o-shape--block"></div> -->
		</section>
	</div>
	<?php get_template_part('template-parts/banner') ?>
	<?php get_template_part('template-parts/contact') ?>
</div>

<?php get_template_part('template-parts/side-bar') ?>
<?php get_template_part('template-parts/contact-button') ?>

<?php
get_footer();
