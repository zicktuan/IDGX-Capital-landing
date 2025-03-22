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
define( 'DB_NAME', 'idg-landing-event-s1' );

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
define( 'AUTH_KEY',         '@%b2I<5zG.*;{ECd?7g>8<IV^ 3VG**uE9anS E@[IF}1o@}G5Zx-tsP::BI68pK' );
define( 'SECURE_AUTH_KEY',  '?.X=E+iX%O%]tVgi{SK8Ea^tHj=QA [B5$C?cVR=T`tTNr_1/!]beLjWf|U=g}$1' );
define( 'LOGGED_IN_KEY',    ';$d`yT4NY?-MOk`QEBl*{]nlM94S:fA@_9CiGHO7s{`DH2P-_IM;bTDzKwUegO{D' );
define( 'NONCE_KEY',        '*Ou`JfZb4gOnRrl%AF!S$dkN-FT8U-=?d-_0tbnbMQ5lUu T89@dw>OfnNL02Njz' );
define( 'AUTH_SALT',        'j>)(aB;*E-T3t3Pg5&H&[}* m2F!dc^7WvzZ0+JS7u#y[-4u0@x5,JS,@vWq&j_v' );
define( 'SECURE_AUTH_SALT', 'gO~q@1)L-*~$74),^09Z^Bk>VGjls6S(k~bcc3PSlZBJd!.=<W>Sihbm=fz`|~hd' );
define( 'LOGGED_IN_SALT',   'E[K&n3/|B_]Bp4=*wOAJ^82!C4pVp#{QROS+<1@<W!$~}W[k*14/7kM?%F5LJ&^7' );
define( 'NONCE_SALT',       '!Oc1!qb~.<&}WS6i%Kc Xqt@uR<}e[ru<G!,a>+>O=h=eosh`V^sB=Der9.(PJP>' );

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
