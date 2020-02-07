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

<div class="c-policy">
	<div class="c-policy__inner">
		<div class="o-shape o-shape--page-top "></div>
		<section class="c-policy__section">
			<div class="o-inner">
				<h2 class="c-policy__title">プライバシーポリシー</h2>
				<p class="c-policy__text">当サイトでは、お客様の個人情報を保護するため、その取り扱いについては細心の注意を払っています。<br>本プライバシーポリシーでは、当事務所における個人情報の取り扱いについて説明しています。<br>当サイトのご利用にあたっては、本プライバシーポリシーの内容を十分ご理解、ご同意くださいますようお願いします。</p>
				<div class="c-policy__block">
					<h3 class="c-policy__sec-title">適用範囲</h3>
					<p class="c-policy__sec-text">本プライバシーポリシーは、当サイトを適用範囲とします。<br>当サイトは、他のウェブサイトへのリンクを紹介していますが、本プライバシーポリシーは、リンク先のサイトには適用されません。<br>リンク先のサイトのご利用にあたっては、リンク先のプライバシー保護に関する記載をご確認ください。</p>
				</div>
				<div class="c-policy__block">
					<h3 class="c-policy__sec-title">個人情報の利用目的</h3>
					<p>当サイトで収集したお客様の個人情報は、以下の目的にのみ利用します。</p>
					<ul class="c-policy__list">
						<li class="c-policy__item">お客様にサービスを提供するため</li>
						<li class="c-policy__item">お客様に新たなサービスに関する情報をお知らせするため</li>
						<li class="c-policy__item">お客様に合ったサービスや情報を提供するため</li>
						<li class="c-policy__item">お客様からの資料請求その他のご要望に対応するため</li>
						<li class="c-policy__item">当事務所のサービスについてお客様の満足度を把握するため</li>
						<li class="c-policy__item">必要に応じてお客様に連絡を行うため</li>
						<li class="c-policy__item">当事務所のマーケティング活動を行うため</li>
					</ul>
				</div>
				<div class="c-policy__block">
					<h3 class="c-policy__sec-title">個人情報の収集内容</h3>
					<p>当サイトで収集しているお客様の個人情報は、次のとおりです。</p>
					<ul class="c-policy__list">
						<li class="c-policy__item">氏名、会社名、部署・役職、住所、電話番号、FAX番号、Eメールアドレス</li>
						<li class="c-policy__item">その他（アンケート回答、ご意見、お問い合わせに必要な情報）</li>
					</ul>
				</div>
				<div class="c-policy__block">
					<h3 class="c-policy__sec-title">個人情報の管理</h3>
					<p class="c-policy__sec-text">お客様の個人情報は、適切な管理を行うとともに、漏洩防止のために最大限の注意を払っています。</p>
				</div>
				<div class="c-policy__block">
					<h3 class="c-policy__sec-title">個人情報の非開示</h3>
					<p class="c-policy__sec-text">当サイトで収集したお客様の個人情報は、法令等で定める場合を除き、第三者に開示、提供、販売、共有することはありません。</p>
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
