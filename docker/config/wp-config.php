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
define('DB_NAME', 'wordpress_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wordpress_user');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'passw0rd');

/** MySQL のホスト名 */
define('DB_HOST', 'sample-wordpress-db');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '*XW<1qU,L@n#*TZRL1]j{1Vh|~}+u(DwLh=vds_=`ic<7iqQZ[2UvB/]6Oc/kXdh');
define('SECURE_AUTH_KEY',  'NE)`0QL6B|MlrSrqG3pAk6`%^FR2-lZZJcC*1]*jqm&p2-k|jx$LTAYj-RJ0@j2_');
define('LOGGED_IN_KEY',    '-d(#0|uV=mPQ9+8yG*5Gct$TWV2%i$oC>|V|+|d2YM(qw4$Vk1&H:Vp`NZb A:!c');
define('NONCE_KEY',        '=#[>2a0(oA!GtLGP7,d$B83sd#+FCY@z[XmE(Th[f#V:lAL!lCXCkjenLvgDV$fL');
define('AUTH_SALT',        '&^GJYO!+p3VUF!-qMM<V-BN^u#H|a#RAm8Q6^}+aA%NJ^M1Mdcj}7Dj_nH@*A-IY');
define('SECURE_AUTH_SALT', 'mYmiD.o{j|^42Q}ZKXU+-~R@$i`[}|F8#@VKh}Et]gdG0^P3&b<8^&h(<}|9Oul|');
define('LOGGED_IN_SALT',   'aLn^p/dKGF[}qL:V+?vV|?w^CR_9(]P)OyD(1rOp-4wGT>`J@=Gmq}>zJARG1jS-');
define('NONCE_SALT',       'j @/,ke/O2*LAMIu2~]64V/}CPEbO]:Iqob!y4.-b_9BVW_89+1!$c*lKjb[iCPH');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
