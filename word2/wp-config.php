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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '7G7~VO&UwoqQh4HC={ic62+Iqdl9=DIjcl{8}U1FKGBMsJiYZaWYtn N)E}`a[^#' );
define( 'SECURE_AUTH_KEY',  '^ET<;%eq*O[vxnKwM9y^lG*P9=lv||wFnIEGX_{Ba%DT`Zb2##m*(CER-q^+ItsK' );
define( 'LOGGED_IN_KEY',    'N]2!ncln)e0:_A]E1dQ_Wx3[!e5k>J?*x-@{cDrwnD`YxQfu/+*R]j&C<}{.>Jc<' );
define( 'NONCE_KEY',        'V@, q10wWoF]& Fg!#97IBk6lKoH3&H.q@(FA_0XkFWFb$I:{>6kUc`,Z=YO|[X[' );
define( 'AUTH_SALT',        'MlJkr{:qO.p<zszEKxbkhK%D2//tCH.QIvtZzP31Uz~;74l(&P4P83HL&8cgxs|T' );
define( 'SECURE_AUTH_SALT', ']GXJ>uvDzBf:[f#&j#I&+o0}*v9mgyJ~/W$}25pV3a9zx{+t-$U7d7z+DJF14~9X' );
define( 'LOGGED_IN_SALT',   'RB)9r5 Q:Q@[K4f/Kre6IgkQx8V<oz!&eL36gNK&H?HZRriHL_*) t{Ed<xc#I-`' );
define( 'NONCE_SALT',       'NtVy&E~Z@O?8Mg|5W@Kmcl^[EPk|gjaqNOmk4M%MB.sujO-}Tm<6>j  ]SM]X][+' );

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
