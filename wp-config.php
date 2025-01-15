<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anastasia' );

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

define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );

define( 'SUBDOMAIN_INSTALL', true );

define( 'DOMAIN_CURRENT_SITE', 'localhost' );

define( 'PATH_CURRENT_SITE', '/anastasia/' );

define( 'SITE_ID_CURRENT_SITE', 1 );

define( 'BLOG_ID_CURRENT_SITE', 1 );

define('COOKIE_DOMAIN', false);

// in production environment it is false
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );   
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
define( 'AUTH_KEY',         ';F=rCXEXJ1mUaEdm/rGA)Wy8v/sTkq2sSV5Iz81MSF!P_Ph|kKv5p{lVvU^o29%3' );
define( 'SECURE_AUTH_KEY',  'GWzAj d.}xz3D/i7E=BG&d$Rtr&OM}<AKBfF@nroR|0Z)<Pvy4uM%rJplLL-|!S:' );
define( 'LOGGED_IN_KEY',    '7.)1`:5x63#o7Q81>1gg^)i3; y+gTOIy-*.TTlp4@ZnI[kNWpGN~[R+U.u[#21b' );
define( 'NONCE_KEY',        'zDwk.Bxm(VgLu|.4Oh|QdF-3[.iwz)[Ls!.b`lK&&(i;:PT+1de `7KXO.ke{&xq' );
define( 'AUTH_SALT',        '*!)Ue5T9)1`yD}WQKF|d@]xg.4$49uE<yqUw3V1L[?DeTbl#x29(_>ot/VB)?[}u' );
define( 'SECURE_AUTH_SALT', 'c>Uyt7T5[me$nIU5)p+ml9IIWc/,>*95(2G%L$?V{vM@^KL%6Co1zu8<WC!%:bcG' );
define( 'LOGGED_IN_SALT',   'uVP|q}C]vN[WVe1$.psIIUIMJZ*<V(hi,-DsO/#~K#k|-&t+J_E/<._q VzS7sW:' );
define( 'NONCE_SALT',       'MlrlHx-^T~i9q3Ps3#^-a??0d?N$*`OVV4%(<aCBA>doZ#7M7BiUn;n1|W==UrY6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
