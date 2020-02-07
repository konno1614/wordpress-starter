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

<div class="c-faq">
	<div class="c-faq__inner">
		<div class="o-shape o-shape--page-top "></div>
		<section class="c-faq__section">
			<div class="o-inner">
				<h2 class="c-faq__title">FAQ</h2>
				<p class="c-faq__text">よくある質問で解決しない場合は、お気軽にお問い合わせください。</p>
				<ul class="c-faq__list">
					<?php if (have_posts()) : ?>
						<?php
							$args = [
								'post_type'      => 'faq',
								'posts_per_page' => -1
							];
							$posts = get_posts($args) ?>
							<?php foreach ($posts as $post) :?>
								<li class="c-faq__item">
									<h3 class="c-faq__question">
										<span class="question">Q</span>
										<span class="title">
											<?= $post->post_title ?>
										</span>
									</h3>
									<p class="c-faq__answer"><?= nl2br(esc_html($post->post_content)) ?></p>
								</li>
							<?php endforeach; ?>
					<?php else: ?>
						<p>FAQはありません。</p>
					<?php endif; ?>
				</ul>
			</div>
			<!-- liが多くなれば表示可能
			<div class="o-shape o-shape--block"></div> -->
		</section>
		<?php get_template_part('template-parts/banner') ?>
		<?php get_template_part('template-parts/contact') ?>
	</div>
</div>

<?php get_template_part('template-parts/side-bar') ?>
<?php get_template_part('template-parts/contact-button') ?>

<?php
get_footer();
