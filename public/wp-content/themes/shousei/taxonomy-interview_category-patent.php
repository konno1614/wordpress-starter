
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

<div class="c-interview">
	<div class="c-interview__inner">
		<div class="o-shape o-shape--page-top"></div>
		<section class="c-interview__section">
			<div class="o-inner">
				<h2 class="c-interview__title">INTERVIEW</h2>
				<p class="c-interview__text">INTERVIEWについての説明文がはいります、鎌倉に携わる人が、鎌倉のアイデンティティをもって活躍しライフワークを楽しめるとともに鎌倉が魅力ある鎌倉であり続けることを知的財産の側面から実現する鎌倉に携わる人が、鎌倉のアイデンティティをもって活躍しライフワークを楽しめるとともに鎌倉が魅力ある鎌倉であり続けることを知的財産の側面から実現する</p>
				<div class="c-interview__interview-list">
					<h3>INTERVIEW LIST</h3>
					<?php get_template_part('template-parts/interview/interview-category') ?>
					<?php if (have_posts()) : ?>
						<ul class="c-interview__list">
							<?php
								$args = [
									'post_type'      => 'interview',
									'posts_per_page' => 15,
									'tax_query' => array(
										array(
											'taxonomy' => 'interview_category',
											'field' => 'slug',
											'terms' => 'patent',
										)
									)
								];
								$posts = get_posts($args) ?>
								<?php foreach ($posts as $post) :
							?>
							<?php get_template_part('template-parts/interview/interview-item') ?>
							<?php endforeach; ?>
						</ul>
						<?php get_template_part('template-parts/interview/interview-pagenation') ?>
					<?php else: ?>
						<p>INTERVIEW LISTはありません。。。。。</p>
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
