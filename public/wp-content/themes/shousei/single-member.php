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

<div class="c-member-single">
	<div class="c-member-single__inner">
		<div class="o-shape o-shape--page-top o-shape--page-top-member"></div>
		<section class="c-member-single__section">
			<div class="o-inner">
				<h2 class="c-member-single__title">事務所メンバー紹介</h2>
				<ul class="c-member-single__other">
					<?php
						$currentID = $post->ID;
						global $post;
						$args = array(
							'numberposts' => -1,
							'post_type' => 'member',
						);
					?>
					<?php $MemberPosts = get_posts($args); if($MemberPosts) : ?>
						<?php foreach($MemberPosts as $post) : setup_postdata($post); ?>
							<li class="<?php if( $currentID === $post->ID ) echo "current"; ?>">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</li>
						<?php endforeach; ?>
					<?php else : ?>
					<?php endif; wp_reset_postdata(); ?>
				</ul>
				<div class="c-member-single__top">
					<div class="c-member-single__thumbnail">
						<?php
							if(has_post_thumbnail()):
								echo get_the_post_thumbnail($post->ID);
							else:
						?>
							<img src="<?= get_theme_file_uri('img/common/eye-catch.png'); ?>" alt="メンバーサンプル画像">
						<?php endif; ?>
					</div>
					<div class="c-member-single__info">
						<h3 class="c-member-single__name">
							<?= $post->post_title ?>
						</h3>
						<p class="c-member-single__furigana">
							<?= get_post_meta($post->ID, 'shousei_furigana', true) ?>
						</p>
						<div class="c-member-single__box">
							<h4>資格</h4>
							<p>
								<?= nl2br(get_post_meta($post->ID, 'shousei_qualification', true)) ?>
							</p>
						</div>
						<div class="c-member-single__box">
							<h4>専門分野</h4>
							<p>
								<?= nl2br(get_post_meta($post->ID, 'shousei_field', true)) ?>
							</p>
						</div>
					</div>
				</div>
				<div class="c-member-single__middle">
					<h4>メッセージ</h4>
					<p class="c-faq__text">
						<?= nl2br(esc_html($post->post_content)) ?>
					</p>
				</div>
				<div class="c-member-single__bottom">
					<table>
						<tr>
							<th>学歴</th>
							<td>
								<?= nl2br(get_post_meta($post->ID, 'shousei_education', true)) ?>
							</td>
						</tr>
						<tr>
							<th>所属</th>
							<td>
								<?= nl2br(get_post_meta($post->ID, 'shousei_belongs', true)) ?>
							</td>
						</tr>
						<tr>
							<th>講師</th>
							<td>
								<?= get_post_meta($post->ID, 'shousei_instructor', true) ?>
							</td>
						</tr>
						<tr>
							<th>経歴</th>
							<td>
								<?= get_post_meta($post->ID, 'shousei_career', true) ?>
							</td>
						</tr>
					</table>
				</div>
				<div class="c-member-single__back">
					<a href="<?php echo esc_url( home_url( '/about' ) ); ?>">事務所案内に戻る</a>
				</div>
			</div>
		</section>
		<?php get_template_part('template-parts/banner') ?>
		<?php get_template_part('template-parts/contact') ?>
	</div>
</div>

<?php get_template_part('template-parts/side-bar') ?>
<?php get_template_part('template-parts/contact-button') ?>

<?php
get_footer();

