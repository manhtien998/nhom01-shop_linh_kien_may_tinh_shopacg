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
define( 'DB_NAME', 'nhom1tmdt_shopacg' );

/** MySQL database username */
define( 'DB_USER', 'nhom1tmdt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tmdr@nhom1#' );

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
define( 'AUTH_KEY',         'tI#)X.MB0te3Ft=wV8ODx3K=Em#75:rSN#nI%D-*F{e)m>`Ezo%YR(,EfW<vN[XG' );
define( 'SECURE_AUTH_KEY',  'e%@,[_zzW5JD2!Mm>/(<&+B?Kq@Rl0~ti=k? &]6IQyQpw5X]DPWl{{BU[~6Br}c' );
define( 'LOGGED_IN_KEY',    'P3Pm-}y#%NgO jfh.B )D^,|-bV{3.s.g}P(;7;c_-_?)>&,Yx0CHcE4s6:}+1d-' );
define( 'NONCE_KEY',        'XQ`R^Ui``>(&h9:[#k1RBV}z8PzcXKQ4]R>*SE*=#8]x<q8r:,s;b_eQK=`u:K(~' );
define( 'AUTH_SALT',        ']dh7;MZynu5&xb+[x0U}5x{Y(/toL 6!E=zpXw5sQw7{0h(}n$O)ah%Adh7kW!UA' );
define( 'SECURE_AUTH_SALT', 'k#w17UQ2yTmC_?B)Zhxd$p<k+A~hRP5R)tNOR*E-Y]`YSr0xah%=F{=Y2}e?8O|a' );
define( 'LOGGED_IN_SALT',   'O|F)d|cs-u`S7)Wq|-T?<;&TmBS8nST^kNz0cc^R&@hp;Ub/M,G._3v=-JGWgPy+' );
define( 'NONCE_SALT',       'X:AAxCh|@<pt3>SWc.;uHO=@O2!tHsnykg#]I$@3CYXRI$){EARF5CU$XosD,,#s' );

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

