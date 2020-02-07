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

<div class="c-trademark">
	<div class="c-trademark__inner">
		<div class="o-shape o-shape--page-top "></div>
		<section class="c-trademark__section">
			<div class="o-inner">
				<h2 class="c-trademark__title">商標について</h2>
				<h3 class="c-trademark__sub-title">将来もずっと安心<br>あなたの事業の未来を守る<br class="pc-none">商標登録</h3>
				<p class="c-trademark__text">商標権とは、商品やサービス、会社名等に対し、使用を独占できる権利です。そして、登録商標と紛らわしい他人の使用を排除することができます。<br>逆に言えば、事業を行っているのに商標登録をしていない場合、先に登録を受けた第三者から使用中止を求められるリスクもあるということです。<br>将星国際特許事務所は、皆様の大切な事業を守り、育てていくための未来を見据えた商標登録をサポートさせていただきます。</p>
				<div class="c-trademark__characteristic">
					<h4 class="c-trademark__sec-title">
						将星国際特許事務所の特徴
					</h4>
					<div class="c-trademark__circle-list">
						<div class="c-trademark__circle-item c-trademark__circle-item--yellow">
							<p class="c-trademark__circle-text">鎌倉の実績<br>NO.1を達成！</p>
						</div>
						<div class="c-trademark__circle-item c-trademark__circle-item--orange">
							<p class="c-trademark__circle-text">詳しく<br>わかりやすい<br>説明</p>
						</div>
						<div class="c-trademark__circle-item c-trademark__circle-item--yellow">
							<p class="c-trademark__circle-text">難しいと<br>断られた商標にも<br>対応可能な<br>ノウハウ</p>
						</div>
						<div class="c-trademark__circle-item c-trademark__circle-item--orange">
							<p class="c-trademark__circle-text">事業の将来を<br>見据えた提案</p>
						</div>
						<div class="c-trademark__circle-item c-trademark__circle-item--yellow">
							<p class="c-trademark__circle-text">取るだけで<br>終わらせません！<br>ブランディング<br>サポート</p>
						</div>
					</div>
					<div class="c-trademark__to-links">
						<div class="c-trademark__to-link c-trademark__to-link--lecture">
							<a href="<?php echo esc_url( home_url( '/works' ) ); ?>">
								商標の実績はこちら
							</a>
						</div>
						<div class="c-trademark__to-link c-trademark__to-link--voice">
							<a href="<?php echo esc_url( home_url( '/interview_category/trademark/' ) ); ?>">
								お客様の声はこちら
							</a>
						</div>
					</div>
				</div>
				<div class="c-trademark__price">
					<h4 class="c-trademark__sec-title">
						料金表
					</h4>
					<h5 class="c-trademark__price-title">1区分5年<span>（税別）</span></h5>
					<div class="c-trademark__price-flex">
						<div class="c-trademark__table">
							<table>
								<tr>
									<th rowspan="3">出願時</th>
									<td>商標調査</td>
									<td>無料　<span>※1</span></td>
								</tr>
								<tr>
									<td>出願手数料</td>
									<td>30,0000円　<span>※2</span></td>
								</tr>
								<tr>
									<td>出願印紙代</td>
									<td>12,000円</td>
								</tr>
								<tr>
									<th rowspan="3">登録時</th>
									<td>成功報酬</td>
									<td>30,000円　<span>※3</span></td>
								</tr>
								<tr>
									<td>登録手数料</td>
									<td>20,0000円</td>
								</tr>
								<tr>
									<td>登録印紙代</td>
									<td>16,400円</td>
								</tr>
							</table>
						</div>
						<div class="c-trademark__caution">
							<h5>特許庁から拒絶理由通知が発行され、応答する場合には、別途65,000円（税別）の費用が発生します。</h5>
							<p><span>※1</span>：商標調査について、出願を断念した場合は、出願手数料と同額の調査手数料をご負担いただきます。</p>
							<p><span>※2</span>：2区分以上の場合、別途区分加算手数料が発生します。</p>
							<p><span>※3</span>：登録査定を受けた場合は、お客様都合で登録しない場合でも、成功報酬をお支払いいただきます。</p>
						</div>
					</div>
				</div>
				<div class="c-trademark__flow">
					<h4 class="c-trademark__sec-title">
						商標権取得までの流れ
					</h4>
					<div class="c-trademark__flow-list">
						<div class="c-trademark__flow-item">
							<div class="c-trademark__box">
								相談
							</div>
							<p class="c-trademark__box-text">お客様の事業計画をふまえて、指定区分を検討いたします。</p>
						</div>
						<div class="c-trademark__flow-item">
							<div class="c-trademark__box">
								見積書・<br class="pc-none">契約書
							</div>
							<p class="c-trademark__box-text">契約書にご捺印・ご返送いただきましたら正式受任とさせていただきます。</p>
						</div>
						<div class="c-trademark__flow-item">
							<div class="c-trademark__box">
								商標調査<br class="pc-none">報告書
							</div>
							<p class="c-trademark__box-text">同一又は類似の先行出願が無いか、識別性があるか調査し、登録可能性を4段階評価でご報告します。</p>
						</div>
						<div class="c-trademark__flow-item">
							<div class="c-trademark__box">
								出願指示
							</div>
							<p class="c-trademark__box-text">調査報告書の評価をもとに出願のご判断をお願いします。</p>
						</div>
						<div class="c-trademark__flow-item">
							<div class="c-trademark__box">
								出願手続き
							</div>
						</div>
						<div class="c-trademark__flow-item">
							<div class="c-trademark__box c-trademark__box--dark">
								出願費用<br class="pc-none">お支払い
							</div>
						</div>
						<div class="c-trademark__flow-item">
							<div class="c-trademark__box">
								特許庁での<br class="pc-none">審査
							</div>
							<p class="c-trademark__box-text">特許庁で審査が行われます（11～14か月）</p>
						</div>
						<div class="c-trademark__flow-item">
							<div class="c-trademark__box c-trademark__box--double">
								拒絶理由通知に対する中間応答
							</div>
						</div>
						<div class="c-trademark__flow-item">
							<div class="c-trademark--box-in">
								<div class="c-trademark__box">
									登録<br class="pc-none">査定
								</div>
								<div class="c-trademark__box c-trademark__box--light">
									拒絶<br class="pc-none">査定
								</div>
							</div>
							<p class="c-trademark__box-text">拒絶理由が解消されれば登録査定となります。</p>
						</div>
						<div class="c-trademark__flow-item">
							<div class="c-trademark__box">
								登録料納付・権利化
							</div>
							<p class="c-trademark__box-text">登録査定後、所定の期間内に登録料を納付することで、商標権が発生します。</p>
						</div>
						<div class="c-trademark__flow-item">
							<div class="c-trademark__box c-trademark__box--dark c-trademark__box--last">
								登録費用<br class="pc-none">お支払い
							</div>
						</div>
					</div>
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
