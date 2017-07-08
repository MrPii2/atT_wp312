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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'gvy.s$4MN4ADvMT_;dEuD(mM_8Cpg>0Emi4.?MGR^{wIuVF0!!;2?)Pk]4[:gQq5');
define('SECURE_AUTH_KEY',  '+uOuQ(&<3Js`` u{ZhJ]WW$M}n<pD~}?+~3l+k;_VbmzQxY.0[x|Q9Xh6Z+.qyT<');
define('LOGGED_IN_KEY',    'L;:Tx-38ItL]pZaq5knAx.Xnt))~48`OAU(BE35!|UYv=Sfs7vtjj#V4k3QDPT^)');
define('NONCE_KEY',        'X^0l3R{eW<Q7ol&`V90>-TWJX9GNvd.,[.TjQ1V{s+@zRntrSx&.u2<h*bAt5Q35');
define('AUTH_SALT',        'XO_,?*Svt0|xDYT#w#3Jp-W!:}oh]X_wUtUm)vqV[0`3S;MX|0#!5InPc]| .@WA');
define('SECURE_AUTH_SALT', '/fq+1k2ml%0q0xq!=Ls}9+b7HK;S]^ZTz}({moyu:p-h^^HaPtI^{Fw38?%s5%sJ');
define('LOGGED_IN_SALT',   'nUw~o@f8~oN}&.phc-FW{(b;Vgo2V-+an[@ CSsL(UU?ir]/SW|/V9L6yh5+`ZKp');
define('NONCE_SALT',       'D:>qW33fKj--I96gW{-~xy8B @P;4h=&wlzf<]*1_Cn;?o$Nou~SvHDij>c+_ELt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp312_';

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
