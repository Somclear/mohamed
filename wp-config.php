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
define( 'DB_NAME', 'moha_db' );

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
define( 'AUTH_KEY',         '*j# ,Nrx%`B5ny5EN93hxH0pGZ=g$bh1![Rzv-9 !b<yi*Epj757rFl;Wz.]0M(K' );
define( 'SECURE_AUTH_KEY',  ',M=MDhPC$`I>}=FYSr<?Itt(0I+uG[Hq[=aNE7tFP,-u #C,4:]/gHSNfl.ixDHZ' );
define( 'LOGGED_IN_KEY',    'Q^,:GZ(0HExM1aV)ZJ$H:^L!:;_3pBQ-b=I(gMK]?1iR+l[9xJ5Mu1DTFpM,fH,I' );
define( 'NONCE_KEY',        'M@5Ys^_=R#M}h!^ndNj.[/zg22t<H?X3W42Hgva&`Uhd,+d#<N2|%0|1_hSj/EwE' );
define( 'AUTH_SALT',        ' {%3l9lQ4Wcl2hw<25!4<3[1:`YLzLoaT8U*d,h*;-lf:`z5{QV 210`$vOhe2;`' );
define( 'SECURE_AUTH_SALT', 'MwqBAVasLf*+ @B+TL]_*OB[;=u*!TO@cQLQ9#tA5Hd8H;{@&a#x=i|PCQ+|o(^$' );
define( 'LOGGED_IN_SALT',   '^>su5)<ka=JzLG _bU`a>0>x/.:Wn|ZEfvY7s.;gsQ04Bjg-s,CQB6>W+Q9uiz_G' );
define( 'NONCE_SALT',       'YTd:YfM7lU[g.63KWG]<nX}lYdy_8R,Qr[g;RQuiAu _)s4ng:sM~.Hu5^BaM54]' );

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
