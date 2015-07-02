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
define('DB_NAME', 'getglossyblog');

/** MySQL database username */
define('DB_USER', 'getglossyblog');

/** MySQL database password */
define('DB_PASSWORD', 'GlossyG3t#');

/** MySQL hostname */
define('DB_HOST', 'getglossyblog.db.9135259.hostedresource.com');

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
define('AUTH_KEY',         'gUuTEK6uBut `S:td,JO/zn(;jaI^7;45t/|`-Gi+:N44?<,#7{TVS~yQz-9A!!m');
define('SECURE_AUTH_KEY',  '*`G@8/0IxF%FDD!wC&gk`[kO(gZ=_<ZWWfzEhUjO4$8+||vNG^3d;RBu9w6]7 w4');
define('LOGGED_IN_KEY',    ']?7>!;l4+B+UbLR=AAK-mLm`;isQQfVD7VpVT/<~G>AflAFZ%EJ4;}c9>W|?lU2L');
define('NONCE_KEY',        'rj-AC-9 w%I|XY&K-QhaKN{r/iZ DwgrGzr*:dG|t%=qKK Xz]1AW]yMWqsJ/~WL');
define('AUTH_SALT',        '0Po?y~i,OK%~Q^k_N-B}t*9~-ba||v;h, iRB]q`PMvo5?c`Wu`FW!;Pcos`3P__');
define('SECURE_AUTH_SALT', 'sHbx6a|=|-w.C*k^$LpYS{mngQ@`a`PH9G7^l23OGmS,l|J7<;h^-xG]u=UBbwN4');
define('LOGGED_IN_SALT',   'K)q;GP]G-18s7+tSSJ@l?}|vT4!W8aG!<rU|$NP-H>L~Fjls0A6;l<6W&xqC&wKb');
define('NONCE_SALT',       '*{)q*9b WWr|{ph3;*`u=O/7Y39?f1$2:0tz<D9zIJ{QTf++9e]3%53uyrT>hXzH');

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
