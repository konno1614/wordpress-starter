<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="o-inner--720 news-detail">
                <div class="news-detail__time">
                    <time datetime="<?= the_time('Y/n/j（D）') ?>"><?= the_time('Y/n/j（D）') ?></time>
                </div>
                <h3 class="title-03"><?= the_title() ?></h3>
                <div class="news-detail__img-wrapper">
                    <?php
                    $news_img = SCF::get('news_img');
                    $news_img = wp_get_attachment_image_src($news_img,'full');
                    $imgUrl = esc_url($news_img[0]);
                    ?>
                    <div class="news-detail__img">
                    <?php if (!empty($imgUrl)): ?>
                        <img src="<?php echo $imgUrl; ?>">
                    <?php else: ?>
                        <img src="<?php echo get_theme_file_uri('img/common/thumbnail.jpg'); ?>">
                    <?php endif; ?>
                    </div>
                </div>
                <?php
                $news_text = SCF::get('news_text');
                ?>
                <p class="news-detail__main-text"><?php echo nl2br($news_text); ?></p>
                <?php
                $news_group = SCF::get('news_group');
                foreach ($news_group as $field_name => $field_value ) {
                    ?>
                    <div class="news-detail__contents">
                        <h4 class="news-detail__headline"><?php echo $field_value['news_group-headline']; ?></h4>
                        <p class="news-detail__text"><?php echo nl2br($field_value['news_group-text']); ?></p>
                    </div>
                <?php
                }
                ?>
                <div class="text-center position-relative mt-3">
                    <a href="<?= home_url('news') ?>" class="c-button c-button--rounded c-button--left">一覧へ戻る</a>
                </div>
            </div>
            <?php endwhile; endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
