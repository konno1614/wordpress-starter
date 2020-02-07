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

<div class="c-works-single">
	<div class="c-works-single__inner">
		<section class="c-works-single__section">
			<div class="o-inner">
				<div class="c-works-single__user-box">
					<h3 class="c-works-single__brand-user">BRAND：<?= get_post_meta($post->ID, 'shousei_works_brand_user', true) ?></h3>
					<div class="c-works-single__user-area">
						<div class="c-works-single__user-area--left">
							<div class="c-works-single__brand-logo">
								<?php
									if(has_post_thumbnail()):
										echo get_the_post_thumbnail($post->ID);
									else:
								?>
									<img class="" src="<?= get_theme_file_uri('img/common/eye-catch.png'); ?>" alt="">
								<?php endif; ?>
							</div>
						</div>
						<div class="c-works-single__user-area--right">
							<h4 class="c-works-single__brand-name">
								<span><?= $post->post_title ?></span>
							</h4>
							<?php if( get_post_meta($post->ID, 'shousei_works_brand_number', true)): ?>
							<p class="c-works-single__brand-number">商標登録第<?= get_post_meta($post->ID, 'shousei_works_brand_number', true) ?>号</p>
							<?php endif; ?>
						</div>
					</div>
					<p class="c-works-single__text">
						<?php echo nl2br($post->post_content); ?>
					</p>
				</div>
			</div>
		</section>
	</div>
</div>

<?php
get_footer();

