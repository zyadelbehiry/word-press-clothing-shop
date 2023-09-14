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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'clothing_store' );

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
define( 'AUTH_KEY',         '!-/X6}Kgc7-qY 0llM;Kb|(7i ,Q74SvPL9WT4c1OWuJEVL?a!rLzKj8?L--m04j' );
define( 'SECURE_AUTH_KEY',  'm.v8-{LWU@TidZ%grswCu!su G^TR434^IVH^x@HeP7`4.)rC=0Ei/a!zfDP!C9c' );
define( 'LOGGED_IN_KEY',    '_gH/g.dk:?|]Mb>|*V(u?<|etsg9?:zP1x<vf1%??)yOWgi9`BU03QRBG-H*9QjL' );
define( 'NONCE_KEY',        'tx7%EjIx0uDyC|~Bi:X|],b5CP5b. ;+?bU:w)@b3Prl*p&.#*}T}1Ip8PJ7s3Ca' );
define( 'AUTH_SALT',        'SQ$JaAX5d.5y!W|$?^wNhwvaQ{NA8|GN5N]~1pb|Tw>F|<ihg%Rx(f3KntTQd{S%' );
define( 'SECURE_AUTH_SALT', '^``zMt+/LeL8u55pD]R>Hb{sk>j#z~k08~UD/5.PF5!HI!1d1dnKMRT<sLKAR;12' );
define( 'LOGGED_IN_SALT',   'z?c9>O}l6zZsWkEws{7A,>]sJy9#I,5Nn%cC#nqC{7,%Jn/LVDw8Y7T}O{cd)F7g' );
define( 'NONCE_SALT',       'XfO>~dq^uo8u||p*Nyjbqz2c{UQO7E)Kd=Uh:6~i3$Lr%;//~5 NF%rXS{I8A!L=' );

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
