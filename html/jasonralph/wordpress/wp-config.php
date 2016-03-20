<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jasonralph');

/** MySQL database username */
define('DB_USER', 'jasonralph');

/** MySQL database password */
define('DB_PASSWORD', '$zenplex1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qw{4,1B1tu5O[b]@W#d[hkP1$I^;AP>]i?Nkf9a;QZP@|BFUWqHWT0f~w(dP!X1;');
define('SECURE_AUTH_KEY',  '9,j.*l~f;qV@N`avlO3KA^}lu[qPzHN,K)nB8hz>:sP-=+9a)aj8^r6^DunUbHHt');
define('LOGGED_IN_KEY',    'LK}zo0SoNB] >?Oy<9,mE*kHhg{F}05TMu1E,p1.B*IbkZg@+x/*eLi^; E{yE}3');
define('NONCE_KEY',        'a5SpT4!xWO)]WklvU]!&%+&}6Pq)BTE+lQ3 y)Q&uwq)TPv_Gvl[KqXJIyA>)v|&');
define('AUTH_SALT',        'tno_b$e-%h9{7e>2M`rq[?tc0>2q9$U44tAE$$9UC8q)NO8Y`*xK?VbyK{H;T[i]');
define('SECURE_AUTH_SALT', '2^__v*LA,.UvZp2sJD5+y{*S/vP}F?q.>M}}<sq<2k+^=jy`8j)19BgmA.??*1B*');
define('LOGGED_IN_SALT',   ';E%TVeU4Vz]&0Y;6g:N#DkB_/%0RsC<xtK2L;Gt9W_w,=ayNba<KrZp@BZ+ahTj4');
define('NONCE_SALT',       'kYseWs7?6ibwA|aJ9YfgQ<EsI25a):$0`D]&aT7,$<0+D@VQ[z*su#O<R`2NemEH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Added to fix admin page 20160229 */
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
   $_SERVER['HTTPS']='on';


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


define('FTP_CONTENT_DIR', '/var/www/html/jasonralph/wordpress/wp-content/');


if ( isset( $_SERVER['HTTP_CF_VISITOR'] ) && strpos( $_SERVER['HTTP_CF_VISITOR'], 'https' ) !== false ) {
        $_SERVER['HTTPS'] = 'on';
}

$_SERVER['SERVER_PORT'] = 443;
