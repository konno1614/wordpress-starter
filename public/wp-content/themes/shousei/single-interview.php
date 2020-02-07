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

<div class="c-interview-single">
	<div class="c-interview-single__inner">
		<div class="o-shape o-shape--page-top o-shape--page-top-interview-single"></div>
		<section class="c-interview-single__section">
			<div class="o-inner">
				<h2 class="c-interview-single__title">INTERVIEW</h2>
				<p class="c-interview-single__text">お客様からの言葉が私たちの原動力。気軽にご相談いただけるような、お客様との距離が近い特許事務所を目指しています。</p>
			</div>
			<div class="c-interview-single__interview-box">
				<div class="o-inner">
					<div class="c-interview-single__interview-head">
						<h3 class="c-interview-single__interview-sec-title">INTERVIEW</h3>
						<time class="c-interview-single__interview-time"><?= get_the_date('Y.m.d', $post) ?></time>
					</div>
					<div class="c-interview-single__interview-top">
						<h4 class="c-interview-single__interview-title">
							<?= nl2br(get_post_meta($post->ID, 'shousei_interview_title', true)) ?>
						</h4>
						<div class="c-interview-single__interview-main-image">
							<img src="<?= get_post_meta($post->ID, 'shousei_interview_main_image', true) ?>">
						</div>
						<h5 class="c-interview-single__interview-user">
							<span><?= get_post_meta($post->ID, 'shousei_interview_user_company', true) ?></span>
							<span><?= get_post_meta($post->ID, 'shousei_interview_user_position', true) ?></span>
							<span><?= get_post_meta($post->ID, 'shousei_interview_user', true) ?></span>
						</h5>
					</div>
				</div>
				<div class="c-interview-single__interview-shape-area">
					<div class="o-shape o-shape--top"></div>
					<div class="c-interview-single__interview-body o-shape--body">
						<div class="o-inner o-inner--interview-interview">
							<p class="c-interview-single__interview-intro">
								<?= nl2br(get_post_meta($post->ID, 'shousei_interview_intro', true)) ?>
							</p>
							<?php
								$interview_contents = get_post_meta( get_the_ID(), 'shousei_interview_contents', true );
								foreach($interview_contents as $interview_content) {
							?>
							<div class="c-interview-single__interview-faq">
								<p class="c-interview-single__interview-faq-question"><?php echo $interview_content['shousei_interview_question']; ?></p>
								<p class="c-interview-single__interview-faq-answer"><?php echo $interview_content['shousei_interview_answer']; ?></p>
								<?php
									$interview_file = $interview_content['shousei_interview_file'];
								?>
								<?php if(!empty($interview_file)):?>
								<div class="c-interview-single__interview-faq-file"><img src="<?php echo $interview_content['shousei_interview_file']; ?>" alt="インタビュー画像"></div>
								<?php endif;?>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="o-shape o-shape--under"></div>
				</div>
			</div>
		</section>
	</div>
	<?php get_template_part('template-parts/interview/interview-list') ?>
	<?php get_template_part('template-parts/banner') ?>
	<?php get_template_part('template-parts/contact') ?>
</div>

<?php get_template_part('template-parts/side-bar') ?>
<?php get_template_part('template-parts/contact-button') ?>

<?php
get_footer();

