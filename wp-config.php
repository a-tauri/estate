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
define( 'DB_NAME', 'my_wp' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '*m/V!dd:F,xi72,{e||.V:R~o$c2dV<fkmnvo!MP5!sYw`5CQ8SkN^04Eb#`w6[w' );
define( 'SECURE_AUTH_KEY',  'J@?v>aMQ|6/[5Z4=ydl7%Q~v><)w%,l[N,O`UO4Xmi4KjJ>wh/K={ktAwEake2SX' );
define( 'LOGGED_IN_KEY',    '&B4=EI)y .E:Z-~|yO#;4hWtWMtK<|KfzSjMGf*$Qae|4cy3a._k;7)8l-1dp`Dj' );
define( 'NONCE_KEY',        'k)x;R~T{%:4?WKa,lu8><p4e5t(:!k4rn^8agI6xj}5TC{kA:.Z<x0$bEf7!2t<C' );
define( 'AUTH_SALT',        'qwc,m UdrL.FmN11-/U)@B55zAnM94Ul5-,g/S|m.#X5#21?YZGKd1nRxuGk^nQP' );
define( 'SECURE_AUTH_SALT', 'uY?WroD!Nk=ZP&@OG}r&Em}kEB9AMl=D]@-rk-fb6MVLU`#sMcFBV1dRA~[Mu~Jh' );
define( 'LOGGED_IN_SALT',   'Oy{> A>]<ODt$(mt{g_;zZ^`lQpel# 1;=}nu%u>~Mm>nsVNoGpd*T[zHpT*r{}2' );
define( 'NONCE_SALT',       '[0jle.x/dw~)=&VMPH1Lr$03t!2(r60t^ (EdN1JI:NngR=zvXm3E<xMbotG=zZC' );

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
