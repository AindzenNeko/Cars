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
define( 'DB_NAME', 'geniuscourses-cars' );

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
define( 'AUTH_KEY',         'D~9~*zwpFvtz_EzvW3Jk}A$ IV Q;V++!S`ae3n&CQZ[=eW9i6egg=}}TChAKY ,' );
define( 'SECURE_AUTH_KEY',  '~dm[.#{$1_wET,#NjYzOoc6tzuuoklE$865 /7k66IBNn}Wni,3T^,GE3lBl)r#:' );
define( 'LOGGED_IN_KEY',    'C8m=ziaH3X ruawU7(6d4 R:E+Ys5X#gR75Pw&:FLucnK,k;ZXtu!SDvSVqZex*h' );
define( 'NONCE_KEY',        'tX4R~x`0>cyO[^TIjyP_c,sG6)g(s2yT0`DR~5B4bGE%%L: gVXK/?~sX.6vR,ph' );
define( 'AUTH_SALT',        'Zz@S9/Rz* ;?@N#|TwB1Vy50#2v(D_pUMaV[$rV|%P>lO `7;GQponDV6]ZFc25M' );
define( 'SECURE_AUTH_SALT', 'v(S8RhyO)p&c_toCaIzrD~b5v2-[uy{%_12-p^Nd9Jy|:?oBw/@j:r#l=M#mJ:.I' );
define( 'LOGGED_IN_SALT',   '0~zBDepM4<7dX^DeZ]p[2&]?b41A7;@&xfog&stT.EEUzA8m8$W6H*zafHlBh8:T' );
define( 'NONCE_SALT',       '}s5,Za:*-g_0y>C<:I>Y@/fsD@A9_bp1fT~8|SZ=)n:K(Q|[1Tte/kUH<^<<lzY=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'geniuscourses_';

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
