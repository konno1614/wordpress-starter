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
				<h2 class="c-policy__title">ライセンスポリシー</h2>
				<div class="c-policy__block">
					<h3 class="c-policy__sec-title">商標権について</h3>
					<ul class="c-policy__list">
						<li class="c-policy__item c-policy__item--icon-none">
							<span>1</span>. 当サイトに掲載されている商標に関する商標権は、弁理士　渡部仁（登録番号：15515）（以下「当方」という。）に帰属します。<br>
							当方は、「将星国際特許事務所」、双三つ星のロゴマーク、「最後まで諦めない情熱家弁理士」、「情熱家弁理士」、「情熱弁理士」、「鎌倉ブランディングサイクル」、「鎌倉ブランディング」、「あなたのブランドパートナー」、「あなたのブランドエキスパート」、「七人の士」、「商標レコメンドシステム」、「鎌倉日和」、「商標未来図」、「商標未来図・鑑」が当方の登録商標又は商標であることを明示します。<br>
							ただし、ここに列記していない他の商標について権利を放棄するものではありません。
							</li>
						<li class="c-policy__item c-policy__item--icon-none">
							<span>2.</span> 当方商標を、当方の許諾を得ずに、ダウンロード、印刷その他の方法による複製、変更その他の改変（表示の削除を含む。）、譲渡、引き渡し、展示、送信、放送、広告、他のウェブサイトや印刷物等への転用、営利目的での利用は、当方の商標権を侵害する行為となる場合があります。
						</li>
						<li class="c-policy__item c-policy__item--icon-none">
							<span>3.</span> 当方商標は、商標権で保護されている場合のほか、著作権その他の知的財産権等で重複して保護されている場合があり、この場合、各法律に定められた範囲において当方商標の使用が制限されます。
						</li>
						<li class="c-policy__item c-policy__item--icon-none">
							<span>4.</span> 当方は、当方商標が当方の重要な知的財産の１つであると考えています。<br>
							したがって、当方は、商標法、不正競争防止法その他の法律に基づき、当方商標の独占的な使用を確保するために適切なあらゆる措置を採るものとします。
						</li>
						<li class="c-policy__item c-policy__item--icon-none">
							<span>5.</span> 当サイトのトップページに掲載されている商標は、弊所お客様の登録商標であり、各社から許諾を受けて掲載しています。<br>これらの商標を許諾を得ずにダウンロード、印刷その他の方法による複製、変更その他の改変（表示の削除を含む。）、譲渡、引き渡し、展示、送信、放送、広告、他のウェブサイトや印刷物等への転用、営利目的での利用は、商標権を侵害する行為となる場合があります。
						</li>
					</ul>
				</div>
				<div class="c-policy__block">
					<h3 class="c-policy__sec-title">著作権について</h3>
					<ul class="c-policy__list">
						<li class="c-policy__item c-policy__item--icon-none">
							<span>1</span>. 当サイトに掲載されている文章、画像、動画、音楽、プログラムその他の著作物に関する著作権及び当方が送信する電子メールの内容に関する著作権は、当方に帰属します。
						</li>
						<li class="c-policy__item c-policy__item--icon-none">
							<span>2</span>. 当方著作物を、当方の許諾を得ずに、ダウンロード、印刷その他の方法による複製、変更その他の改変（表示の削除を含む。）、上演、演奏、上映、送信、放送、送信可能化、口述、展示、頒布、譲渡、貸与、翻訳その他の翻案、他のウェブサイトや印刷物等への転用、営利目的での利用は、当方の著作権又は著作者人格権を侵害する行為となる場合があります。
						</li>
						<li class="c-policy__item c-policy__item--icon-none">
							<span>3</span>. 当方著作物は、著作権で保護されている場合のほか、商標権その他の知的財産権等で重複して保護されている場合があり、この場合、各法律に定められた範囲において当方著作物の利用が制限されます。
						</li>
						<li class="c-policy__item c-policy__item--icon-none">
							<span>4</span>. 当方は、当方著作物が当方の重要な知的財産の１つであると考えています。<br>したがって、当方は、著作権法その他の法律に基づき、当方著作物の独占的な利用を確保するために適切なあらゆる措置を採るものとします。
						</li>
					</ul>
				</div>
				<div class="c-policy__block">
					<h3 class="c-policy__sec-title">その他の知的財産権について</h3>
					<p>特許権、実用新案権、意匠権その他の知的財産権についても、商標権及び著作権と同様の取り扱いとします。</p>
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
