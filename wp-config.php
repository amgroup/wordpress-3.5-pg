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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '>Be<R&Vu<|swNb=*fAE;,sd_$1aPwm%bZ-V-#torK-|#f5HzJ{b-t0IUnybz?U4z');
define('SECURE_AUTH_KEY',  ' -f>V;Dw#UQV|X&QC]G#1+2pq8`6}W7B[f+Dl5#/%zDFEy-u`2bZbu L)/.O$|tB');
define('LOGGED_IN_KEY',    '5E?C(k-GR,QGe7q E/<FC`D>|#6h%0i:h}7cRUlA2&N=0qE:Di!WH=JsOv`@8Yhv');
define('NONCE_KEY',        'S^v4X/%MBf`ml)Z$NMB6WU;>Tf7Wb$sgu++f+[q9Q(/0.s8{OE7}txU:I#cNSzxN');
define('AUTH_SALT',        't?$Lp@5s42 A+M-rt]V~59U7WfhM?`9+St(<|];--)5]p&3]b%P,z+|0RGe+1sZy');
define('SECURE_AUTH_SALT', 'l$ye(9yigKgZc3uIqR$?nG(tcI{9?F^rThixx5`L);bW,t=~X %3BGx>uZ lw!3m');
define('LOGGED_IN_SALT',   'S+Cer,Nn)6/N<,a0bh.i-+3=_fq-(yRS,TA#O/u3iFP6xhSA|qa|}Y /pe,@21Gw');
define('NONCE_SALT',       '@7<sh]gA>R#B~^e<@vLy+Nf<$Gg]0w?73yA?0N_oo*7+iOeL1-;Y>/G1<M]d|:t$');
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

define('WPLANG', 'ru_RU');
//define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG',false);
//define('WP_DEBUG',true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
