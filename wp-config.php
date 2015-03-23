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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wp_mrconsulting');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1$S$,VfsLQM/]P|<9^FC%+] 3k%hu.6U3}oh,nA$IUL=8?.iTRv`<J94$f[&DQ?`');
define('SECURE_AUTH_KEY',  '{1!oQxqx~P|*/g-sH;:>Yx)!ebVEC+P+eDBI~=8tUL)G1L~:sN)KlK nz}eY|_Wa');
define('LOGGED_IN_KEY',    'Mn1|qJtb^J|7y2vO+w[@h!e|w58lE`FnT%lN,L>q+)}~r(E}@]f9z-pm%cj;*PP_');
define('NONCE_KEY',        '3a<:Blm;Y+{[T7UC-%7hP,&D+q}+c>A:?b}<+q=RX|!6V~AGfQUjv%D}u!WN-E8i');
define('AUTH_SALT',        'V:5ds#citj*NO_[gmL{`?9||W:rT1nvLf~j1+ks{49>nj1R,iFvv^6]DZZdjLbOS');
define('SECURE_AUTH_SALT', 'JfK!+66<:`9siw(175?E;{kt60~iiew7,#&4-8f+Qem5B+|sLDsx:MDWKGG[ !-d');
define('LOGGED_IN_SALT',   'Ah9-.)+uR%Yb 7LOVI>N2Z?:>/$;_+|IHH=0JX,*<tPZJ;m5xT} &2,n*lzwAn)`');
define('NONCE_SALT',       'CC)FN|Z_bDN,)^q9?|Yh&&TcO$4UjyuJoZ`EUN<+: `p9Aq 6mqr`kkE(yTbs+/+');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
