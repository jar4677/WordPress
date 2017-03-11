<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_db');

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
define('AUTH_KEY',         '.Kk96h%w|0%! c<Ff?wg;%Ta[cx=%TA# `uK0tclS#oW4o&z*aWwgTL|uv` Qztz');
define('SECURE_AUTH_KEY',  'NR.rR8g8sy1D9ah}0f{?Xv+];qx}}h3SVnsg6N WS$-kKjBF[p;geD_mJL?ZR%!u');
define('LOGGED_IN_KEY',    '5>7B29{1|jX9zA!U(9-y^5fMo&yW^$XXBE$eA%$rtYh>j*/X$#xlP2|3_QWqW_,u');
define('NONCE_KEY',        'IV%;U[2B![,+QzVi[4!)(Rr39A{.:=Bpg/aDfe&1Y=<9ym_Ze-a8gK3^ypjEquS|');
define('AUTH_SALT',        'VZZzSHLd^JOILux,>+wObN*eLX[SxDe*BK<G:5zj#Yr&m+!P<|hH-u>Evk|j3CTe');
define('SECURE_AUTH_SALT', 'oRv`s<Dziho$BuB?+=)1U@S}k])$I4]d)EZ53Z?Aq>2;grdiT|(;?n &I()V=U;L');
define('LOGGED_IN_SALT',   'Fk[p,%}s KBKH]lAzHDz>eY}$_nX/CDr=-4iRhx:C+ BT}MC9BVCkKO8u]Q;PNou');
define('NONCE_SALT',       'F?ht!gW#1pYo/nb+d7##L1*.kIt.%HTNlE4ieFU9(FxAf[W]_*sxOS0yu]I-p-vQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
