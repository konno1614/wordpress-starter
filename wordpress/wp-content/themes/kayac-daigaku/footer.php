<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
    </main>
	<footer class="o-footer bg-gray">
		<div class="o-inner">
			<div class="o-footer__logo">
				<a href="<?= home_url() ?>">
					<img src="<?= get_theme_file_uri('img/footer/footer-logo.png'); ?>" alt="まちの大学　KAMAKURA">
				</a>
			</div>
		</div>
		<div class="o-inner--wide">
			<div class="o-footer__link-area">
				<ul class="o-footer__nav-lists">
					<li class="o-footer__nav-list"><a class="o-footer__nav-item" href="<?= home_url('about') ?>">まちの大学について</a></li>
					<li class="o-footer__nav-list"><a class="o-footer__nav-item" href="<?= home_url('course') ?>">学部案内</a></li>
					<li class="o-footer__nav-list"><a class="o-footer__nav-item" href="<?= home_url('circle') ?>">サークル活動</a></li>
					<li class="o-footer__nav-list"><a class="o-footer__nav-item" href="<?= home_url('guide') ?>">ご利用案内</a></li>
					<li class="o-footer__nav-list"><a class="o-footer__nav-item" href="<?= home_url('contact/#question') ?>">よくある質問</a></li>
					<li class="o-footer__nav-list"><a class="o-footer__nav-item" href="<?= home_url('report') ?>">活動レポート</a></li>
					<li class="o-footer__nav-list"><a class="o-footer__nav-item" href="<?= home_url('rule') ?>">受講生規約</a></li>
					<li class="o-footer__nav-list"><a class="o-footer__nav-item" href="<?= home_url('rule/#privacy-policy') ?>">プライバシーポリシー</a></li>
					<li class="o-footer__nav-list"><a class="o-footer__nav-item" href="<?= home_url('contact') ?>">お問い合わせ</a></li>
				</ul>
			</div>
		</div>
		<div class="o-inner--small">
			<div class="o-footer__bannar-area">
				<ul class="o-footer__bannar-lists">
					<li class="o-footer__bannar-list">
						<a href="#" target="_blank"><img src="<?= get_theme_file_uri('img/footer/bannar.png'); ?>" alt=""></a>
					</li>
					<li class="o-footer__bannar-list">
						<a href="#" target="_blank"><img src="<?= get_theme_file_uri('img/footer/bannar.png'); ?>" alt=""></a>
					</li>
					<li class="o-footer__bannar-list">
						<a href="#" target="_blank"><img src="<?= get_theme_file_uri('img/footer/bannar.png'); ?>" alt=""></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="o-footer__copy">
			<small>© MACHI no Daigaku</small>
		</div>
	</footer>
<?php wp_footer(); ?>

</body>
</html>
