<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shousei
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="o-footer">
		<div class="o-footer__inner">
			<?php get_template_part('template-parts/nav/pc-nav') ?>
			<div class="o-footer__flex">
				<div class="o-footer__logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?= get_theme_file_uri('img/header/logo_vertical.png'); ?>" alt="将星国際特許事務所"></a>
				</div>
				<ul class="o-footer__sns-list">
					<li class="o-footer__sns-item">
						<a href="https://www.facebook.com/shousei.pat/" target="_blank"><img src="<?= get_theme_file_uri('img/footer/icon-facebook.png'); ?>" alt="facebook"></a>
					</li>
					<li class="o-footer__sns-item">
						<a href="https://www.instagram.com/shousei_pat/" target="_blank"><img src="<?= get_theme_file_uri('img/footer/icon-instagram.png'); ?>" alt="instagram"></a>
					</li>
				</ul>
				<ul class="o-footer__link-list">
					<li class="o-footer__link-item">
						<a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">
							プライバシーポリシー
						</a>
					</li>
					<li class="o-footer__link-item">
						<a href="<?php echo esc_url( home_url( '/license-policy' ) ); ?>">
							ライセンスポリシー
						</a>
					</li>
				</ul>
			</div>
			<p class="o-footer__copyright">&copy; 2019 将星国際特許事務所</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
</body>
</html>
