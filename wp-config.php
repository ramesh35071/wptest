<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptest_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J;5EL%MvtP`4U+uuLf{-F|n&3>h,!4)9n|*ynCh5jCVJrD5M;Z(jZX%L}D;e+`dy' );
define( 'SECURE_AUTH_KEY',  'lo]8X&W}mH}%`*^7]?>IGwruw!EJa7[l6D:|DBw.vZ4!J_pa`BeYp(2rt6DXXw^T' );
define( 'LOGGED_IN_KEY',    '1@s8z/t)|5# k.69yV$3#YTl!?>^DB4;xp(hSanq0gskE`>$ujJ`+3y~d,LqyEPT' );
define( 'NONCE_KEY',        '/HcCYG+FuvBx!A#IiJaM7xy;B#O:E{L1xO3o6Tx^~(}D@Vw%]|*GciMr]*EO5%1Z' );
define( 'AUTH_SALT',        'v)0Jb.CXuq.y!O?ZKS*ZdN;)a!zx=(?|Koj]P)w0+R?p*)uV^Pn-oUpr(dyt!,q2' );
define( 'SECURE_AUTH_SALT', 'fPd5n@3{t2%HC9~LEj`YoX=&O~67d/UjG[SMTyPoX@<Y/@Q?[PZ%XOR`5<N^S@]r' );
define( 'LOGGED_IN_SALT',   'TXqytHN_b}BJTqnT1xdn/4,iEq!tRxx@Zig}aW<!;AxkUPJ}O[F$Z1;Fb;du5QVu' );
define( 'NONCE_SALT',       '!7,5JQ+58hCOpo&He)Rf:q7d~Z}uO4:Tg_Spm?LK?r/C+sEp0dZ/ <+Y7|(:Q3Y#' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
