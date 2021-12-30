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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/users/0/noor.jp-designurara/web/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'LAA1382650-qamgei');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA1382650');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '8eZZsZJT');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql139.phy.lolipop.lan');

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
define('AUTH_KEY', 'eE"`7VilnLp33-Kp;da-ZNHZH";fBK,n6}idVde!^n^Tk4_d`yu^Zco@"<7S-p<n');
define('SECURE_AUTH_KEY', '?+#t3T5[/h8$U!3S,fmY9j9Q:=X!PX{}"@jfN-XvFp#5#m$geRHPDSd/qv]uS}!j');
define('LOGGED_IN_KEY', 'V.h,wuSxI8(}_F42<s(X!#/|Gd~YZe&43U,<V;YOH{3#*iaPOalv0c4n118SKe]p');
define('NONCE_KEY', '%,[}XE;covxNNz|e2PNEpOup<I:mjF`:WH){U6T^I5~9G*vf)#4X-!G)U[RX+[EJ');
define('AUTH_SALT', 'q$H-ioNqHbaBmP4p<)jiR@7B"),`*L)At;6A^9e6l6a,n7Q{g[HH7N`1@kB?#*xp');
define('SECURE_AUTH_SALT', 'WZxSb1"?E/g9l1_u#w#p<eokRD??gnLy2#.54Kwc7u;DpxlK$Zcbt=wYAsgL[HK2');
define('LOGGED_IN_SALT', '.v4`PF1P)++?Hyd@#y56fG$VcbC(W?#nY_m#LI9k9<0efOJ*yOy/PI753a!@%a8[');
define('NONCE_SALT', '|o2(GD/_Vo>m:{K@y)QhyWp9gs7]Zwj[bvTK_1JE>Oh%MNa3NlBkRtMfz/R?VcvE');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20211226225320_';

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

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
