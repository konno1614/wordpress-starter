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

<div class="c-patent">
	<div class="c-patent__inner">
		<div class="o-shape o-shape--page-top "></div>
		<section class="c-patent__section">
			<div class="o-inner">
				<h2 class="c-patent__title">特許について</h2>
				<h3 class="c-patent__sub-title">技術を守るだけではない　<br class="pc-none">事業の利益を生む特許を</h3>
				<p class="c-patent__text">事業において、特許を取得すること自体が目的ではなく、活用することで利益を向上させることが本来の目的であるはずです。<br>将星国際特許事務所では、皆様の事業内容やターゲットとする市場をしっかりと理解したうえで、それに合った戦略をご提案し、強い権利化を実現します。</p>
				<div class="c-patent__characteristic">
					<h4 class="c-patent__sec-title">
						将星国際特許事務所の特徴
					</h4>
					<div class="c-patent__square-list">
						<div class="c-patent__square-item c-patent__square-item--blue">
							<p class="c-patent__square-text">全国で知財の<br>講演を行っている<br>弁理士 渡部仁</p>
						</div>
						<div class="c-patent__square-item c-patent__square-item--dark-blue">
							<p class="c-patent__square-text">特許を活用し<br>利益を向上させる<br>”戦略”の提案</p>
						</div>
						<div class="c-patent__square-item c-patent__square-item--blue">
							<p class="c-patent__square-text">IOTをはじめとした<br>高い専門性と<br>１５００件を超える<br>特許出願の実績</p>
						</div>
						<div class="c-patent__square-item c-patent__square-item--dark-blue">
							<p class="c-patent__square-text">４００件を超える<br>アイデア発掘の実績</p>
						</div>
					</div>
					<div class="c-patent__to-links">
						<div class="c-patent__to-link c-patent__to-link--lecture">
							<a href="<?php echo esc_url( home_url( '/topics_category/lecture/' ) ); ?>">
								講演予定・講演詳細はこちら
							</a>
						</div>
						<div class="c-patent__to-link c-patent__to-link--voice">
							<a href="<?php echo esc_url( home_url( '/interview_category/patent/' ) ); ?>">
								お客様の声はこちら
							</a>
						</div>
					</div>
				</div>
				<div class="c-patent__price">
					<h4 class="c-patent__sec-title">
						料金表
					</h4>
					<h5 class="c-patent__price-title">請求項１つ、明細書５頁、<br class="pc-none">図面３枚の場合<span>（税別）</span></h5>
					<div class="c-patent__price-flex">
						<div class="c-patent__table">
							<table>
								<tr>
									<th rowspan="2">出願時</th>
									<td>出願手数料</td>
									<td>239,200円　<span>※1</span></td>
								</tr>
								<tr>
									<td>出願印紙代</td>
									<td>14,000円</td>
								</tr>
								<tr>
									<th rowspan="2">審査請求時</th>
									<td>審査請求手数料</td>
									<td>10,000円</td>
								</tr>
								<tr>
									<td>審査請求印紙代</td>
									<td>122,000円</td>
								</tr>
								<tr>
									<th rowspan="3">登録時</th>
									<td>成功報酬</td>
									<td>100,000円　<br class="pc-none"><span>※1 ※2</span></td>
								</tr>
								<tr>
									<td>登録手数料</td>
									<td>20,0000円</td>
								</tr>
								<tr>
									<td>登録印紙代</td>
									<td>6,900円</td>
								</tr>
							</table>
						</div>
						<div class="c-patent__caution">
							<h5>特許庁から拒絶理由通知が発行され、応答する場合には、別途120,000円（税別、頁数に応じて増減）の費用が発生します。</h5>
							<p><span>※1</span>：実際の請求項数、頁数等に応じて増減します。</p>
							<p><span>※2</span>：特許査定を受けた場合は、お客様都合で登録しない場合でも、成功報酬をお支払いいただきます。</p>
						</div>
					</div>
				</div>
				<div class="c-patent__flow">
					<h4 class="c-patent__sec-title">
						特許権取得までの流れ
					</h4>
					<div class="c-patent__flow-list">
						<div class="c-patent__flow-item">
							<div class="c-patent__box">
								相談
							</div>
							<p class="c-patent__box-text">発明の内容、事業計画をヒアリングさせていただきます。</p>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent__box c-patent__box--dark">
								見積書・契約書・着手金のお支払い
							</div>
							<p class="c-patent__box-text">ご依頼いただける場合には、契約書にご捺印・ご返送いただき、着手金をお支払いいただきます。</p>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent__box">
								出願書類の<br class="pc-none">作成
							</div>
							<p class="c-patent__box-text">出願書類を作成し、お客様にご確認いただきます。意見交換をしながら完成させます。</p>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent__box">
								出願指示
							</div>
							<p class="c-patent__box-text">最終的な出願のご判断はお客様にしていただきます。</p>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent__box">
								出願手続き
							</div>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent__box c-patent__box--dark">
								出願費用<br class="pc-none">お支払い
							</div>
							<p class="c-patent__box-text">出願費用から、着手金を差し引いた金額をお支払いいただきます。</p>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent__box">
								審査請求（＋早期審査請求）
							</div>
							<p class="c-patent__box-text">出願日から3年以内に審査請求を行う必要があります。<br>早期審査には別途料金がかかりますが、通常1年かかる審査期間が2～3カ月に短縮されます。</p>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent__box">
								特許庁での<br class="pc-none">審査
							</div>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent__box c-patent__box--double">
								拒絶理由通知に対する中間応答
							</div>
							<p class="c-patent__box-text">特許庁から拒絶理由通知が届いた場合でも、意見を述べたり出願内容を補正することができます。</p>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent--box-in">
								<div class="c-patent__box">
									登録<br class="pc-none">査定
								</div>
								<div class="c-patent__box c-patent__box--light">
									拒絶<br class="pc-none">査定
								</div>
							</div>
							<p class="c-patent__box-text">拒絶理由が解消されれば登録査定となります。</p>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent__box">
								特許料納付・権利化
							</div>
							<p class="c-patent__box-text">特許査定後、所定の期間内に特許料を納付することで、特許権が発生します。</p>
						</div>
						<div class="c-patent__flow-item">
							<div class="c-patent__box c-patent__box--dark c-patent__box--last">
								特許費用<br class="pc-none">お支払い
							</div>
						</div>
					</div>
				</div>
				<div class="c-patent__field">
					<h4 class="c-patent__sec-title">
						特許の主な技術分野
					</h4>
					<div class="c-patent__table-wrapper">
						<table>
							<tr>
								<th>情報処理</th>
								<td>IoT、AI、ブロックチェーン、フィンテック、ICT、IT、ビジネスモデル、ソフトウェア、ネットワーク、ウェブシステム、データベース、情報検索、画像処理、MPEG、音声認識、SSO、認証システム、データ圧縮、浮動小数点演算、コンパイラ、GA、最適化アルゴリズム、コンテンツのレイアウト・配信、OSコア、メモリ管理、JAVA、XML、物体認識、ロボットの感情表現、回路パターン設計支援、回路シミュレータ、在庫引当管理</td>
							</tr>
							<tr>
								<th>通信</th>
								<td>5G、4G、LTE、Wi-Fi、携帯電話、無線基地局、交換機、無線通信、スペクトラム拡散通信、GPS、暗号化通信、誤り訂正、アクセス制御、分散処理、P2P</td>
							</tr>
							<tr>
								<th>制御</th>
								<td>遊技機の遊技制御、プリンタ等の印刷制御、液晶・プロジェクタ等の表示制御、ロボットの移動制御・感情制御、液晶駆動制御、モータ制御、エンジン制御、自動ドアの開閉制御</td>
							</tr>
							<tr>
								<th>電気・電子</th>
								<td>アナログ回路、デジタル回路、半導体基板、プリント基板、ＲＦＩＤ、画像信号処理回路、液晶駆動回路、音声信号処理回路、プロセッサ演算回路、Ａ／Ｄ変換器、表面弾性波コンボルバ、光増幅器、ホール素子、電流センサ、レゾルバコンバータ</td>
							</tr>
							<tr>
								<th>機械</th>
								<td>移動型ロボット、レゾルバ、モータ、軸受、リニアガイド、圧電アクチュエータ、遠心分離機、半導体の露光装置、駐輪装置、陳列棚</td>
							</tr>
						</table>
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
