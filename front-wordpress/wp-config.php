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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'KgSCZSQ|!{G^E+M8QP@fe;kov iu7hk=68HNMb;>KK3Q>F<nLicckL*&}|5Yao_.' );
define( 'SECURE_AUTH_KEY',   'qYH4&^qx_G(yg6.xFV^Jl75wX&o]],F#qf7Aq9Bg$),K$TN?(;/eO79U)?h=y|~Q' );
define( 'LOGGED_IN_KEY',     '_{y`KDb=LW;*5T}<%rU[ZQr<j>T#<@sF5.^][g_r6ne}a~i%t<U1=:R9M!wXAYBD' );
define( 'NONCE_KEY',         '%> yt)d-$Iw@6Y])0UmCb$l;1|3Cg9-7|QfVh*&F@8T<Vf bz],]g9Zggx6!1Vtw' );
define( 'AUTH_SALT',         'azDe-|a:H;zBwT77stL8r7xkrq&Bw](B-KncHR5bxq=nxQGquOJ](Gm;AXO]py]1' );
define( 'SECURE_AUTH_SALT',  'dI3wWC:|9L7V2#BB+W@r7:[u*1A$w%v?[ IGj+}l~ V0Qc{~<t ?8MIo~TB*~=0X' );
define( 'LOGGED_IN_SALT',    'fGKcJD>[R`[:Rd.%JXquWA3iNr0nkt5}rJ[gXr^:{kDl;5sm+*&#gY@s:RTdzr+Y' );
define( 'NONCE_SALT',        ' SfhQ=d, ,$,oZtDN/,0$-SF#1y;wUDtk]x@B7xzw,G;myXh5#Q59?($LHrwvJ~N' );
define( 'WP_CACHE_KEY_SALT', 'X@zV/O#-G-=$06s}{5Do*,5`o7ij.Ul+,7pwOxU4TxzbXQ,c2Tu-?3X|g2E4v3~O' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
