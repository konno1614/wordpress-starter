<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

get_header();
?>

<div class="c-topics-single">
	<div class="c-topics-single__inner">
		<div class="o-shape o-shape--page-top"></div>
		<section class="c-topics-single__section">
			<div class="o-inner">
				<h2 class="c-topics-single__title">TOPICS</h2>
				<article class="c-topics-single__article">
					<div class="c-topics-single__head">
						<time class="c-topics-single__time"><?= get_the_date('Y.m.d', $post) ?></time>
						<?php $terms = get_the_terms($post->ID, 'topics_category');
							foreach ((array)$terms as $term) : ?>
								<?php if ($term->parent === 0) :
						?>
						<div class="c-topics-single__category <?php echo strtolower($term->slug); ?>">
							<?php echo strtoupper($term->name); ?>
						</div>
						<?php endif; ?>
						<?php endforeach; ?>
					</div>
					<div class="c-topics-single__body">
						<h3 class="c-topics-single__article-title">
							<?= $post->post_title ?>
						</h3>
						<div class="c-topics-single__article-contents">
							<?= $post->post_content ?>
						</div>
					</div>
					<div class="c-topics-single__foot">
						<?php
							$next_post = get_next_post();
							$previous_post = get_previous_post();
						?>
						<?php if ($previous_post) : ?>
							<div class="c-topics-single__prev c-topics-single__foot-item">
								<a href="<?= get_permalink($previous_post->ID) ?>">
									PREV
								</a>
							</div>
						<?php else: ?>
							<div class="c-topics-single__none"></div>
						<?php endif; ?>
						<div class="c-topics-single__back c-topics-single__foot-item">
							<a href="<?= home_url('topics') ?>">一覧に戻る</a>
						</div>
						<?php if ($next_post) : ?>
							<div class="c-topics-single__next c-topics-single__foot-item">
								<a href="<?= get_permalink($next_post->ID) ?>">
									NEXT
								</a>
							</div>
						<?php else: ?>
							<div class="c-topics-single__none"></div>
						<?php endif; ?>
					</div>
				</article>
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

