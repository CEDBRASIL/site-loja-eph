<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u339613701_eFxBS' );

/** Database username */
define( 'DB_USER', 'u339613701_uEerm' );

/** Database password */
define( 'DB_PASSWORD', 'hG01A8xDC6' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'cuFiJ5#A3#>iSo4&6mt7#OC2~a|bEeXaVGP|Q%26Zu>7=3bC26uR /+fW{%[(yMN' );
define( 'SECURE_AUTH_KEY',   'QbFI:_5;,r7*5B%b}bl2bPzDV7!}vDbmPmmq>*ORKXna/3?E4P#_|`k)icp1({l&' );
define( 'LOGGED_IN_KEY',     'k^*.9?FFR&j$]QV!58k@q;Rg_^*PO@|f&=myMwj6vJ:UNK 5b61DsOOGgmD/Rwt2' );
define( 'NONCE_KEY',         'eNqp6n?Iy/ug4F5~0O(-#|f)O$?& 7.yb53NQ(}dho,ofd+=[N#.G3S,Tf)(nm<,' );
define( 'AUTH_SALT',         'fhF7@n3Sar_A~3rXB1^-Y#lV]+35D-+`)?Du0XsxTrW)8`C.}$>oS:9cIe`~K+@,' );
define( 'SECURE_AUTH_SALT',  '-B!Q+MrI]9Q~vP5*f?N6vPQCeDW@fc 8poa,+xRVemc&ryVu[%WRmBhy!E|hkI(p' );
define( 'LOGGED_IN_SALT',    '&mM7% q!#g)`e~TYFN}xDJA,Sb^Gf<$SyJ?Z_5TC|P{DF[L!Am6cz|J1~BoT[70L' );
define( 'NONCE_SALT',        'N{2&]-tL#)GWP@v=bww;pEohMdH&LlXG4NBt>ey5QoUzz`^8VSN!HePoAu%Fp$Y~' );
define( 'WP_CACHE_KEY_SALT', 'Zrb<#]t^7rYzhn5Z>Ugc,++Rq9yErW KJz9_lyK%{.p3#W6*8l{*F!%F)ixQ)I:i' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '27b597311044014f8daadb4bc1192113' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
