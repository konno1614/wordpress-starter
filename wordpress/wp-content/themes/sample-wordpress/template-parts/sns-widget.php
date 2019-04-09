<div classs="sns-area">
    <div class="sns-area__top">
        <div>
            <h6 class="sns-area__title">Twitter</h6>
            <div class="sns-area__timeline">
                <a class="twitter-timeline" data-width="450" data-height="350" href="https://twitter.com/kayac_inc?ref_src=twsrc%5Etfw">Tweets by kayac_inc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div>
            <h6 class="sns-area__title">Facebook</h6>
            <div class="sns-area__timeline">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKayacJapan&tabs=timeline&width=450&height=350&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2057607177858405" width="450" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
    </div>
    <div class="sns-area sns-area__bottom">
        <div class="o-inner--small">
            <h6 class="sns-area__title">Instagram</h6>
            <div class="sns-area__post">
            <?php
            $cols = wp_is_mobile() ? '2' : '4';
            $shortcode = "[instagram-feed num=8 cols={$cols} showheader=false showbutton=false showfollow=false]";
            if ( has_shortcode( $shortcode, 'instagram-feed' ) ) {
                echo do_shortcode($shortcode);
            }
            ?>
            </div>
        </div>
    </div>
</div>
