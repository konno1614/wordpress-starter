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
    <div class="o-inner--720 guide">
        <h3 class="title-03 guide__title"><span class="guide__green">お</span>申し込みまでの流れ</h3>
        <div class="guide__wrap">
            <div class="guide__flex">
                <div class="guide__flex--left guide__bg">
                    <h4 class="guide__headline guide__headline--01">受けたいコースを選ぶ</h4>
                    <p class="guide__sentence">まちの大学の3学部から受けたいコースをチェックしよう</p>
                    <div class="text-center position-relative mt-2">
                        <a class="c-button c-button--guide c-button--guide-01" href="<?= home_url('course') ?>">学部案内へ</a>
                    </div>
                </div>
                <p class="guide__flex--center">or</p>
                <div class="guide__flex--right guide__bg">
                    <h4 class="guide__headline guide__headline--02">参加したいサークル活動を選ぶ</h4>
                    <p class="guide__sentence">まちの大学のサークル活動一覧からチェックしよう</p>
                    <div class="text-center position-relative mt-2">
                        <a class="c-button c-button--guide c-button--guide-02" href="<?= home_url('circle') ?>">サークル一覧へ</a>
                    </div>
                </div>
            </div>
            <div class="guide__bg">
                <h4 class="guide__headline guide__headline--03">開催時間、曜日、会場、フィールドワーク日程を要チェック！</h4>
                <p>クラスごとに開催条件が異なるので、詳細情報まで事前に確認してみましょう。</p>
            </div>
            <div class="guide__bg">
                <h4 class="guide__headline guide__headline--04">申し込み手続きをする</h4>
                <p class="guide__sentence">申し込みフォームでご希望のコース or サークルを選び、クレジット情報など費用項目を入力し、申し込みを行ってください。決済完了までお待ちください。</p>
                <div class="text-center position-relative mt-2">
                    <a class="c-button c-button--guide c-button--guide-03" href="#">お申し込み手続きへ</a>
                </div>
            </div>
            <div class="guide__bg">
                <h4 class="guide__headline guide__headline--05">申し込み完了メールを確認する</h4>
                <p>申し込みを確認次第、事務局から申し込み完了メールが届きます。申し込み鉄ぢきはこれで完了です。</p>
            </div>
            <p class="guide__done text-center position-relative">完了！！</p>
        </div>
    </div>
</section><!-- #primary -->

<?php
get_footer();
