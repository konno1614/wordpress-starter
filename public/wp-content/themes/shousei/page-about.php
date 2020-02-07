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

<div class="c-about">
	<div class="c-about__inner">
		<div class="o-shape o-shape--page-top "></div>
		<section class="c-about__section">
			<div class="o-inner">
				<h2 class="c-about__title">事務所案内</h2>
				<p class="c-about__text">若宮大路沿いに面した窓から光が差し込む明るいオフィスです。スタッフは鎌倉・湘南が大好きで、この土地の活性化につながる仕事にやりがいと誇りを持っています。ぜひお気軽にご相談ください。</p>
				<div class="c-about__to-mission">
					<a href="<?php echo esc_url( home_url( '/mission' ) ); ?>">
						将星国際特許事務所の理念
					</a>
				</div>
				<?php get_template_part('template-parts/member/member-list') ?>
				<div class="c-about__overview">
					<h3>OFFICE</h3>
					<div class="c-about__flex">
						<div class="c-about__slider">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="<?= get_theme_file_uri('img/slider/slider01.png'); ?>" alt="Slider01">
									</div>
									<div class="swiper-slide">
										<img src="<?= get_theme_file_uri('img/slider/slider02.png'); ?>" alt="Slider02">
									</div>
									<div class="swiper-slide">
										<img src="<?= get_theme_file_uri('img/slider/slider03.png'); ?>" alt="Slider03">
									</div>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
						<div class="c-about__table">
							<table class="table01">
								<tr>
									<th>設立</th>
									<td>2009年1月19日</td>
								</tr>
								<tr>
									<th>代表者</th>
									<td>弁理士：渡部 仁（登録番号：15515）</td>
								</tr>
								<tr>
									<th>所在地</th>
									<td>〒248-0006<br>神奈川県鎌倉市小町2-11-14 山中MRビル3F</td>
								</tr>
								<tr>
									<th>TEL / FAX</th>
									<td>0467-73-8540　/　0467-73-8541</td>
								</tr>
								<tr>
									<th>E-MAIL</th>
									<td>info@shousei.com</td>
								</tr>
								<tr>
									<th>公式ブログ</th>
									<td><a href="https://blog.goo.ne.jp/h-watabe" target="_blank">弁理士 渡部 仁 特許・商標・知財ブログ</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="c-about__access">
					<h3>ACCESS</h3>
					<div class="c-about__flex c-about__flex--bottom">
						<div class="c-about__image">
							<img src="<?= get_theme_file_uri('img/about/access-image.png'); ?>" alt="将星国際特許事務所">
						</div>
						<div class="c-about__table">
							<p><img src="<?= get_theme_file_uri('img/about/logo-access.png'); ?>" alt="将星国際特許事務所"></p>
							<table class="table02">
								<tr>
									<th>電車でお越しの場合</th>
									<td>JR「鎌倉駅（東口）」より徒歩4分<br>若宮大路沿い、三井のリハウスのあるビルの3階になります。</td>
								</tr>
								<tr>
									<th>車でお越しの場合</th>
									<td>「若宮大路駐車場」（提携駐車場）<br>「小町通りパーキング」（提携駐車場）<br><span>※お車でお越しの場合は、その旨お申し付けください。</span></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="c-about__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3255.4061900447255!2d139.55056471608566!3d35.32073355726383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601845c1b4b4d7f7%3A0xcee2655ac086d1e3!2z5bCG5pif5Zu96Zqb54m56Kix5LqL5YuZ5omA!5e0!3m2!1sja!2sjp!4v1576808752715!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
			<!-- <div class="o-shape o-shape--block"></div> -->
		</section>
		<?php get_template_part('template-parts/banner') ?>
		<?php get_template_part('template-parts/contact') ?>
	</div>
</div>

<?php get_template_part('template-parts/side-bar') ?>
<?php get_template_part('template-parts/contact-button') ?>

<?php
get_footer();
