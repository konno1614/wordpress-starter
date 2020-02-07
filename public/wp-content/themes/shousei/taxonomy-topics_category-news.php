
<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shousei
 */

get_header();
?>

<div class="c-topics">
	<div class="c-topics__inner">
		<div class="o-shape o-shape--page-top"></div>
		<section class="c-topics__section">
			<div class="o-inner">
				<h2 class="c-topics__title">TOPICS</h2>
				<?php get_template_part('template-parts/topics/topics-category') ?>
				<?php if (have_posts()) : ?>
					<ul class="c-top__topics-list c-topics__list">
						<?php
							$args = [
								'post_type'      => 'topics',
								'posts_per_page' => -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'topics_category',
										'field' => 'slug',
										'terms' => 'news',
									)
								)
							];
							$posts = get_posts($args) ?>
							<?php foreach ($posts as $post) : ?>
							<?php get_template_part('template-parts/topics/topics-item') ?>
						<?php endforeach; ?>
					</ul>
					<?php get_template_part('template-parts/topics/topics-pagenation') ?>
				<?php else: ?>
					<p>TOPICSはありません。</p>
				<?php endif; ?>
			</div>
		</section>
	</div>
	<?php get_template_part('template-parts/banner') ?>
	<?php get_template_part('template-parts/contact') ?>
</div>

<?php get_template_part('template-parts/side-bar') ?>
<?php get_template_part('template-parts/contact-button') ?>

<?php
get_footer();
