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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^]Ml(g3MnVV<Xgm_4bc_m}!RH2z^u<w[)`[0-**k!pt~S rpvSI:}q`~`5W<9RXi' );
define( 'SECURE_AUTH_KEY',  'Gi@$tPmiXSq.)3t5%5xyl]P44MZ=B}D^|jzFo|K&N0{fwPn$*p,_r3_U!eA?u5 3' );
define( 'LOGGED_IN_KEY',    '~?(SP&1|m$/g>pRoBsXW*3(0+^rD50:?:yLZ1C:[=X@V<H.LzmWFh#H?s!1G6ot[' );
define( 'NONCE_KEY',        ' @c%-:PZU?,8Pb%E]Cm~-3#*UMKtsf&l;iR>{H:CNv_H;vx0XhJ#<^[xR..d`U!/' );
define( 'AUTH_SALT',        'kclye[)`C/4U(A(G~a|K?=cn-(!|4T8fid8qc5MGl@A:.~HabY[x.;VtF6=!367M' );
define( 'SECURE_AUTH_SALT', 'MH#^*)mbY?=yp^j:~k`O)tW|U=@f -O<r}hX6n>Tr|35p3b&O/eVo<rprC:3uClk' );
define( 'LOGGED_IN_SALT',   'eEi_J;,{PQ^%E@Kuz+Gj4P0W1($8N:5(2TprzYMn)*)7b#/IsS]u=.Sv0C0@v)_v' );
define( 'NONCE_SALT',       'l2C/^=e%W>ab)<a @(P[.iJ8Gn*3s$c^5<s#OttEu~oln!-n~1MCvUU8Y6*Bdp/X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
