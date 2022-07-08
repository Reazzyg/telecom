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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'telecom' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Mre8H@uNP/uK1;}|$DnGg<i>DZ5iLn3nyW{5*._hiebA0 4@lSo`MbCGqt,^8@B~' );
define( 'SECURE_AUTH_KEY',  'U_0B9[~P[~bGyv!pkR-l$QSh<nSPnU@O-7%o1G.~IMZBe^^V-omS0cJYNi [7v%a' );
define( 'LOGGED_IN_KEY',    '.QvV4#RO}1]U]^[4 zL:]0V;Jh2;MvaCl$/ZvDJm<7=L976_&-w!{w/hR5!u#03i' );
define( 'NONCE_KEY',        'u2W*&:?qNWf1,W/*)^M;2>Mx+Xb/{&Pr%oa&lk,Urh>APB8;4VBh09`^%_Ps*[)V' );
define( 'AUTH_SALT',        ' omaBNW0akuN(Wj43sL^fbC5ndQ: B,}>f&,,tGJ%rT]CZmW&]Kxcw[%oW&q/BJi' );
define( 'SECURE_AUTH_SALT', 'ktCpe~SgLWPX(k*Qf|K;_7!fj_hSDu0W[QOgchC9v.[!r=VT$A%=cKUI[z:K(5H&' );
define( 'LOGGED_IN_SALT',   'H8scpd8W0k:iD:R dZJO8-bxQ-S<673lX}ZivcUyF^f;bSv!Eu!G5E!*YZ3~ouhY' );
define( 'NONCE_SALT',       'UBDRXP]gr_|=%,LgM?p3gHQD29xiS;,q6A]azVq1q8dA6c 7JZF5DeQ(@dB^N]D%' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
