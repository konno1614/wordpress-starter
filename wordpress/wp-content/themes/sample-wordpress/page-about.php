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
        <div class="o-inner--720 about">
            <div class="about__head">
                <h3 class="about__title"><span class="about__green">ま</span>ちの大学で<br>わたしのおどろき、広げよう</h3>
                <p>まちの大学は、鎌倉に根ざしたコミニティスクールです。<br>「何を学ぶか」よりも、「誰と学ぶのか」を大切にしたいと考えています。世界中の最高の授業を自宅で受けることができる時代だからこそ、「誰と学ぶか」にこだわり、仲間とずっと面白がりながら学び続けられる仕組みとして学校の中に「まちの自習室」をつくっていきます。</p>
                <p>そして、どの人にも個性と強みがあるように、どのまちにも個性と強みがあります。これをまちに根ざした学校として、広げ深めていくことを目指します。まちの強みが、人の集いをつくり、そのことがさらなる強みに発展していく。これが積み重なることで、まちそのものが独自の知恵に溢れ、そこでつくる人、働く人、考える人のクリエイティビティが解放され発揮される、そんな循環をつくっていきたいと考えています。</p>
                <p>古い歴史のあるまち鎌倉で、かつて先人たちがそうであったように、みんなで実践できる知恵をつかみとっていく、そしてその知恵が大きな流れとなってこれからの私たちのあり方がより良いものになる。<br>これを目指す場所として「まちの大学」を開学します。</p>
            </div>
            <div class="about__middle">
                <h4 class="title-03 about__sub-title"><span class="about__green">大</span>学長のあいさつ</h4>
                <div class="about__flex">
                    <div class="about__middle--left">
                        <img src="<?= get_theme_file_uri('img/about/photo.png'); ?>" alt="大学長">
                    </div>
                    <div class="about__middle--right">
                        <span class="about__position">面白法人カヤック代表取締役CEO</span>
                        <h5 class="about__name">柳澤　大輔</h5>
                        <p class="about__sentence">皆さま、まちの大学に興味を持って頂きありがとうございます。<br>大学生の頃、還暦を過ぎたある方が、学生の頃に戻ったように勉強されていて「最近学ぶことが最高に楽しい」と言っていたのを今でも覚えています。当時は、学生だったので、ぴんときませんでした。ただ、不思議なもので、ぴんとこないことほど、逆に記憶に残っていて、４０代の後半を迎え、その心境が理解できるようになりました。そうなんです。学ぶことはきっと楽しいのです。そして、さらにもう１つこの年になってわかったことがあります。それは、誰と学ぶかも重要だということ。一緒に学ぶ仲間次第で楽しさも倍増します。ですから、まちの大学では、せっかくなので、そのあたりを意識して運営できるといいなと思っています。そして、もう１つ忘れてはならないこと。それは、何を学ぶか、誰と学ぶか、に続いて、どこで学ぶか？ということ。鎌倉にある学校ですので、鎌倉という地域の特性を生かすということ。それは地域に関わる人が学生になるということはもちろん、鎌倉のもともと持つ文化や強みを伸ばすような学科やコースを作るということ、そして鎌倉の企業とのコラボを増やしていくなど、まちに開かれた学校になることを目指しています。</p>
                        <p>講師をしてみたい、学長になりたい、こんなことを学びたい、まちの大学の運営に関わってみたい、どなたでも大歓迎ですので、興味がある方はどうぞお声をかけてください。<br>みなさまの人生がより豊かになれるお手伝いができれば幸いです。</p>
                    </div>
                </div>
            </div>
            <div class="about__bottom">
                <h4 class="title-03 about__sub-title"><span class="about__green">運</span>営のしくみ</h4>
                <div>
                    <picture>
                    <source media="(max-width:576px)" srcset="<?= get_theme_file_uri('img/about/about-img_sp.png'); ?>">
                    <img src="<?= get_theme_file_uri('img/about/photo.png'); ?>" alt="運営の仕組み">
                    </picture>
                </div>
            </div>
        </div>
	</section><!-- #primary -->

<?php
get_footer();
