<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage kayac-daigaku
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
        <div class="o-inner circle">
            <h3 class="title-02"><span class="circle__green">サ</span>ークル活動一覧</h3>
            <div class="circle__notes">
                <h4 class="mb-1 circle__headline">誰でもサークルを作れます！</h4>
                <h4 class="mb-2">まちの大学　サークル活動とは？<br>まちの大学が認定した課外授業を「サークル」circleとします</h4>
                <h4 class="mb-1 circle__headline">サークルへの参加方法は</h4>
                <ul class="mb-2 circle__list">
                    <li class="circle__item">１　サークル活動を行いたい人はサークルに登録（無料）してください。</li>
                    <li class="circle__item">２　エントリーシートに必要事項記入事務局にメール</li>
                    <li class="circle__item">３　事務局で内容がルール（３つの禁止事項と５つの約束）に適合しているか</li>
                    を判断します。
                    <li class="circle__item">４　事務局よりエントリー承認</li>
                    <li class="circle__item">５　手数料を振込み</li>
                    <li class="circle__item">６　エントリー完了</li>
                </ul>
                <h4 class="mb-1 circle__headline">ルール　　３つの禁止事項と５つの約束</h4>
                <h5 class="circle__headline--mini">【3つの禁止事項】</h5>
                <ul class="mb-2 circle__list">
                    <li class="circle__item">1.本サークル活動以外への勧誘（宗教、ネットワークビジネス等）</li>
                    <li class="circle__item">2.サークルで公開されているイベント以外への集金活動</li>
                    <li class="circle__item">3.部員への物販などの行為</li>
                </ul>
                <h5 class="circle__headline--mini">【５つの約束】</h5>
                <ul class="circle__list">
                    <li class="circle__item">1.他人のことを否定しない　自分の意見も否定しない</li>
                    <li class="circle__item">2.他の部員への中傷誹謗行為をしない</li>
                    <li class="circle__item">3.みんな平等　立場や肩書は脇に置く</li>
                    <li class="circle__item">4.守秘義務　安全な場所です</li>
                    <li class="circle__item">5.積極的に参加し、楽しむ</li>
                </ul>
            </div>
            <div class="row m-0">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('template-parts/card/card', 'circle') ?>
                <?php endwhile ?>
            </div>
            <?php if ( get_next_posts_link() && !is_show_all() ) : ?>
            <div class="text-center position-relative mt-2">
                <a href="<?= home_url('circle/?show_all=1#main')?>" class="c-button c-button--rounded c-button--blue c-button--right c-button--circle">more</a>
            </div>
            <?php endif; ?>
        </div>
	</section><!-- #primary -->

<?php
get_footer();
