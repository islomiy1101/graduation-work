<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'meddb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '<qCB-&LZzX}U6a+.-y|@h#O]6,.EF$`t-(~.XN{Yn%+fF/B~i%g$|9U7+Rrx{{;o');
define('SECURE_AUTH_KEY',  'EfpFg-N8?)889#C$FvT/,]Bj[Bw&AUOJjo>8A5A|H2qi%SJKwc|$V.ZLD[Na&XYy');
define('LOGGED_IN_KEY',    '<FqZHo88|T(J CEy~(:Af8rwds,4_btLM71:TD]8g5@us|`j~u{q85_M*)F=n>SQ');
define('NONCE_KEY',        'a:~hg6nTO^+1+*P:y*Tbx&fA-+(j2iE`-?.U5~AtodM5t(kEfM}p3(x|iSb.yQ8g');
define('AUTH_SALT',        'h:=YsClS||f/uHT_TSDCMP:&Wl&0|}%h,`v>yHPY/FfwU s8m+J;*=0`t<|JY=ZB');
define('SECURE_AUTH_SALT', ':uOGzLX _sziEw~!tYI7tNQH&R<&rH%*#WW*Ck0Kv~GvTD hI,-,b<y!}|MFG-=e');
define('LOGGED_IN_SALT',   'f#zy?+vM(y<<$sd]j]7Bi^FZOm4 _+8U+r^4(hKC$ex))n- 0c5-2dUILf+UoC9N');
define('NONCE_SALT',       '`Q@T&3ndMvrAa>;Jzj)*2cUa6FB.6aRL$Wd <.e`4!(4A4MiNslYL-b5]Pf{^)Ca');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define (‘WPLANG’, ‘uz_UZ’);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
