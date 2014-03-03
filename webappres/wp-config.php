<?php
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'TOCHANGE');

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
define('AUTH_KEY',         'jW5U+U&h{w?-xv/ZK<`k-@&1[=*K&E^HhxVwDqoTT8H&*X*`I-ll%a?I&.xgBb8Y');
define('SECURE_AUTH_KEY',  '[+,(CQZ*|^ksSd|Xru=C2L`n0=vOm>9R=L<y1~r|+.UZw9M;gnS8^4_2@(]+a;85');
define('LOGGED_IN_KEY',    '-@oiaHj4K]OWi7 Le$L%M}ZZCB^)8Zp+v[v=5;*zHS5=zt =r8]SQ?@@(KLq_b[S');
define('NONCE_KEY',        'iFuA!4JH%;{ ig}O Tk]Y[|[|6~:~Yuj]+aM(G4Ps/s/F~/D:vJ!7wkGFpGZt6Yj');
define('AUTH_SALT',        'XGc^9_c=_$/4ys#<UU1iMkQWiqJ>1`.>1Qv-<PxN2c@)tK!cp9_@XWTY~[5Q}tF[');
define('SECURE_AUTH_SALT', '!J0`tv,x8iU&1f-G,}D.{[9pIq[IJ.VK|S8iN|es/}=9~]<<_Q36)Q|q%a3=EE!L');
define('LOGGED_IN_SALT',   '_a)nccIeK]3+v.ua,1[2g_ -VkQl5OKKmk=:)c-)wJr:@Own@e]4zxREw>|$n.(9');
define('NONCE_SALT',       '9l|qZdV d2S!-Dk +lz5$eHzJ$2BL hiUf+6gZ9o?z4s*T:I!S0M1A2;W!|;(*]2');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
