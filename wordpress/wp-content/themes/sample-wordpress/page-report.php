<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage sample-wordpress
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
        <div class="o-inner report">
            <div classs="sns-area">
                <div class="sns-area__top">
                    <div>
                        <h3 class="report__title"><span class="report__green">T</span>witter</h3>
                        <div class="sns-area__timeline">
                            <a class="twitter-timeline" data-width="450" data-height="350" href="https://twitter.com/kayac_inc?ref_src=twsrc%5Etfw">Tweets by kayac_inc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                    <div>
                        <h3 class="report__title"><span class="report__green">F</span>acebook</h3>
                        <div class="sns-area__timeline">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKayacJapan&tabs=timeline&width=450&height=350&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2057607177858405" width="450" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                    </div>
                </div>
                <div class="sns-area sns-area__bottom report__bottom">
                    <h3 class="report__title"><span class="report__green">I</span>nstagram</h3>
                    <div class="sns-area__post">
                    <?php
                    $cols = wp_is_mobile() ? '2' : '3';
                    $shortcode = "[instagram-feed num=8 cols={$cols} showheader=false showbutton=false showfollow=false]";
                    if ( has_shortcode( $shortcode, 'instagram-feed' ) ) {
                        echo do_shortcode($shortcode);
                    }
                    ?>
                    </div>
                </div>
                <div class="text-center position-relative mt-2">
                    <a href="<?= SNS::instagram ?>" class="c-button c-button--rounded c-button--purple c-button--right" target="_blank">more</a>
                </div>
            </div>
        </div>
	</section><!-- #primary -->

<?php
get_footer();
