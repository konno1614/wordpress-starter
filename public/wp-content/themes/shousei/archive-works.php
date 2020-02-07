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

<div class="c-works">
	<div class="c-works__inner">
		<div class="o-shape o-shape--page-top"></div>
		<section class="c-works__section">
			<div class="o-inner">
				<h2 class="c-works__title">WORKS</h2>
				<p class="c-works__text">鎌倉での実績No.1！湘南エリアを中心にサポートさせていただいているブランドをご紹介します。</p>
				<div class="c-works__brand-list">
					<h3>BRAND LIST</h3>
					<?php if (have_posts()) : ?>
						<ul class="c-works__list">
							<?php
								$args = [
									'post_type'      => 'works',
									'posts_per_page' => 15
								];
								$posts = get_posts($args) ?>
								<?php foreach ($posts as $post) : ?>
							<li class="c-works__item">
								<a class="modal-open" data-href="<?= get_permalink($post->ID) ?>">
									<div class="c-works__brand-logo">
										<?php
											if(has_post_thumbnail()):
												echo get_the_post_thumbnail($post->ID);
											else:
										?>
											<img class="" src="<?= get_theme_file_uri('img/common/eye-catch.png'); ?>" alt="">
										<?php endif; ?>
									</div>
									<h4 class="c-works__brand-name">
										<span><?= $post->post_title ?></span>
									</h4>
									<?php if( get_post_meta($post->ID, 'shousei_works_brand_number', true)): ?>
									<p class="c-works__brand-number">商標登録第<?= get_post_meta($post->ID, 'shousei_works_brand_number', true) ?>号</p>
									<?php endif; ?>
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
						<div class="c-works__pagenation">
							<?php
							the_posts_pagination([
								'prev_text'           => '',
								'next_text'           => '',
								'screen_reader_text'  => '',
							]);
							?>
						</div>
					<?php else: ?>
						<p>BLAND LISTはありません。</p>
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
