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
define('DB_NAME', 'nutrition-dude');

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
define('AUTH_KEY',         'pCthk(7.Jdlw};;x*7E=4l|V:rS.diiP{,{d1?2zkg:+v;!T=lTn*DvaPKJ2xBL,');
define('SECURE_AUTH_KEY',  'vvVD:7s4gs4sbrExQ>]?*aF(}$<D|2n=*oM9p:<&A(__rT3/rd9`mub,+^G}<j8)');
define('LOGGED_IN_KEY',    'VH=7Lkr2P=8utbP0R)[?.`hX:T1J`mEN6=bw.qaaA:PKD6 YH(Sp[&@@P:cn+4@d');
define('NONCE_KEY',        'wQ`{QfT%WcoW`Xua?=>D;dW+m1z#mQ7o)he,>S;Y@,ETm>5R>k?S531(T&d1vH2d');
define('AUTH_SALT',        '21[m#F?D2$kGlfNL.)ec!p@nECN5P17Ovr;*mO~`xJ:P9JI!62/5:A+c]{a4@{JB');
define('SECURE_AUTH_SALT', 'Y^ubW~1{+|Ff,UU=oqY<d#87VjV^w}||`ApZn/Q~?VVb`/9nWTHg(?Dxu+;Oo-K$');
define('LOGGED_IN_SALT',   'A|u2,~!)i-Ei^U`~@`*+lhq%4o9>59Z;HEP-mK^!f-MFW%!p`8>w.k:/}zwJXq4B');
define('NONCE_SALT',       'o0]!movWdz`r*L]`wh4WLES}E>{Oy9<>,z#xvpbS-h3[^|B@-UHAh0,@ue|jOTNF');

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
