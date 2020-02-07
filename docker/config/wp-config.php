<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'starter_db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'starter_user' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'passw0rd' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'starter-db' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y|GM*x:UO_YdQ-3~`nHU=s6[/EPh<*:w(;Z]&;lg)IfdLG?EKw=faf_Dw D@Rd,T');
define('SECURE_AUTH_KEY',  'unbk$i4tu}kmT?Q=_iTigf[PeiTobz#e,^1[CE6Xyg`.RavOA .2YJBdCFPXY@wg');
define('LOGGED_IN_KEY',    '(6&QOOxcciD&pP)p! +cIp_f5UIc}ZWxd%Rz6Xf:@J%[9zl]yA@qCZz$8nPAS,}P');
define('NONCE_KEY',        'wYZu%lTSUP/y|oug?741,s6r,k tS2oO$8Ku$n%QjBIn*8;;NaVj%iS*xoKymOc*');
define('AUTH_SALT',        'sJ+j%-kQ=zdT);r4-6-e3}KJ@5K+2[7pb9J~*6PuN<[XEu^$O}|,Y#J`)1[5tc*Z');
define('SECURE_AUTH_SALT', 'tTk8a.&-y@bh/&{B@qN7gErMV0L>uJ7?+Lg|<|WIc;Q.<+MO+O),lWZ0TazZ59&*');
define('LOGGED_IN_SALT',   'bL<B[cm%GkhisHB`] +Si`X,UN8+99%_K:O`CQ5@V`>=x+r2u/mp%m|xK<?a|i^r');
define('NONCE_SALT',       '|F-v`ds!2lcP5--A-Azvg}i06e,o#k4@eIGnaV~|QP5d-5.W?v7ib`g1/<>Q?G^J');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// For starter
define('FORM_CONTACT_ID', 'CF5deeefe2d1071');
define('USE_MAIL_CATCHER', true);