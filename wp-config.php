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
define( 'DB_NAME', 'sharunaportfolio_db' );

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
define( 'AUTH_KEY',         'c^2jUcEFnb@F8?|[r_:%qq%2n05~PH?QW4qUbV8=E0nX+*-&Q^Nd&9374ncvlp2r' );
define( 'SECURE_AUTH_KEY',  '(R]^4_|iLOlykWLHx0`:r{Pj*_RM9diFiks!Oe:^t{e+&]VyYZn_V Qw3p&}fW4_' );
define( 'LOGGED_IN_KEY',    'S?Pjqbs}]2o3gq~Zh)(A;0rT`bi!&BJ `<{ax_PY(~7QE7}UhFXki`<~2vfa]x(B' );
define( 'NONCE_KEY',        'l./z]c1YveHMa](Q@;<;a>|FTSVl5<Tuct ZEtT.Z7!Di `QSyWJ2;p ?x7F:Yfy' );
define( 'AUTH_SALT',        '1OuU#FatP&w:(41/ooCGsn!=S1-JZdWliYVF/V1=t* CN++(A}CP`Eot~#br6|HM' );
define( 'SECURE_AUTH_SALT', '$DUQHu mZGT*5(Z%{6r$GBP7PAJI&qa>c`UY75BFg!H!1?DQ#2@|PT[}{HJPLhzq' );
define( 'LOGGED_IN_SALT',   ']}5-c){-V}x.3{n??2<x|~H=1*-m?E{JBzmH/kF2BvEyZVNiuxh|fH%D/GH}Z3=K' );
define( 'NONCE_SALT',       'El&TbwNw&l];vX$&;,&<v zvpD%!wbXi3yr eHf>M@Wl~Hdfv7^`aKNrWW9SSl|b' );

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
