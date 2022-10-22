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
define( 'DB_NAME', 'boothreport' );

/** Database username */
define( 'DB_USER', 'boothreport_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '`|n!ccd|hQt;30FTwL1Ur$t1o|Zstr}~#8<Am]&F4mGiU|wH<q#n9g{!@?u,&}Q$' );
define( 'SECURE_AUTH_KEY',  'h5wwY>F;s6@k>CUV9x{g6o.6gSu9CGMe8c4QhM~A|qfH.qZHS[38C`Tf09M>kAG6' );
define( 'LOGGED_IN_KEY',    'jQ?$JXf9&.AC4WO3n[_kxm$vdtb!ojQX^J`i;TCJ(f:gVFw_,<SL wSF^%4xD(y#' );
define( 'NONCE_KEY',        'yUVOht5Y6wV-g|_K w2ZarkcA1CjdZRwt5.t.O;P_2X,GcQ+5:Vh1Kd_tmr&(/3c' );
define( 'AUTH_SALT',        'N@g-e&mOjjK;AL|Bv1ULE<^BP^My2-|xo ;Dc&XtB#u:Pf2hwqGrl?<rpT8@=#0k' );
define( 'SECURE_AUTH_SALT', '1+afD;/<;OqVk/}+Nr4+]Lu9nKv}e{~8}!zYW]hG6g=a_a7JRK%SOJ]ygV^ $< s' );
define( 'LOGGED_IN_SALT',   'yF0i09KG@d:QL-RO%L1N0~/Y({G#`;i!s%/j9Yd5VAD>SW0IR=&L/DAHhoR5Jgm*' );
define( 'NONCE_SALT',       'U`D0/7|G2|Tk,)cu:Lk8zs RSAyrv)4asF8]_nC UeZ:&$iqw3bsIy(Cm.W,Hqer' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_4034966';

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
