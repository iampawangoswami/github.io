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
define( 'DB_NAME', 'pawan' );

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
define( 'AUTH_KEY',         'Vp8X;.Y5,/0^zK0EW.+f;U28SsRV)no#?BAS{CbXBXQYo4B`m]I]+52~pL-#O_fg' );
define( 'SECURE_AUTH_KEY',  'D0bZ5kmFUZ0L) YAA#4:tMUD.LNj~{h<3}$] c{?UB${v!E3h1Xk.&O{.Q@*0h#9' );
define( 'LOGGED_IN_KEY',    'nd%AnV$vifzJvusKQUr<}(->+Ec|! z`>F=i8$s&+Jo@>G(UPMW+OZWaGN+jiUi9' );
define( 'NONCE_KEY',        '<)p{b zA%HEgK0k(ohWhFz+jB?$ye- [t P#~g3MT*,%m6DDjnApV$:KCyJePp3$' );
define( 'AUTH_SALT',        '/|j,KJXx.RZ +!h(|sBX;(~VVshn(8:8K)qQsd2HSG`qGioEFKyj1$ ;i:&%ddmm' );
define( 'SECURE_AUTH_SALT', '}K{EJ;){I!17>`B;^%<<39:2)~EC|5LQ]6X.ukS?}CIiGB3%wJ?:;lK3=pzuaC{q' );
define( 'LOGGED_IN_SALT',   'k<p$EMC-&g/lT8Y=#X0}i=be| L+{$*UK#LQb{[Q9+_H5G;%R|U;>%w1>!mN$3lf' );
define( 'NONCE_SALT',       ';Ry8>sYdo7!JW%u!O:`PZ >Z//t_x=BDaw3pDl;83QbMm?=5QG~c&&vjehe=i3qr' );

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
