
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
define('DB_NAME', 'vintageblog_db');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY', '-t1]I-GK/Wdz*}b-P)0p4k_$8W%M;!~$cW_Ig9h-tjg]|(IoXR<aRo7}zL[aa+<L');
define('SECURE_AUTH_KEY', 'q0v@i3D XN(V!q3nWt_om;2[P8Hk=!~a]J2+p/IqoX<sC$>#)bv_P$,Jt>QPGP}G');
define('LOGGED_IN_KEY', '@K^@4+k[R1i#WT1o%qX(aZOPz1d@EpQ.@oEJ:0w+.)|E?_[+|Dgh!g9wlGA(*U#E');
define('NONCE_KEY', '2[K+mGUKsr2#du8lsy3C`/5rfjZrM>WWW~St0IlIl)>ZvNfjg5/alwx>|ULGx[J3');
define('AUTH_SALT', 'X{RXvjUt+VG7S};&@((o.hzF0C<n;w`W^b?fuebKIZ`HIO-C+7W2vd&U|v==OyuL');
define('SECURE_AUTH_SALT', 'x7C_0f}I,tO6w_+7y%>/0;K~xjKD6`ZZVo#%.X]uP9fO_)P^^m?o@g3Zs,Lg--:-');
define('LOGGED_IN_SALT', 'k*GXK9w4aZ@FoV|Z%c0n}A+Xl|JWM:M~RSGtDD/NGkK5-<tWXok[Z;x@kR|/Tt|n');
define('NONCE_SALT', 'Bi_KLN!6M(B,}-Ay,ZC4FR|5?o+Z+`-q>FPP,-WzmVpD+F9@<{m{Qz1PcZtrY{K4');
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
