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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if(strstr($_SERVER['SERVER_NAME'], 'infinityrealestate.local')) {

define( 'DB_NAME', 'infinity_realestate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
} else{

	/** The name of the database for WordPress */
	
	define( 'DB_NAME', 'dbeo6tqkhu90yq' );
	
	/** MySQL database username */
	define( 'DB_USER', 'unew2hddenfj9' );
	
	/** MySQL database password */
	define( 'DB_PASSWORD', 'pwtiri9pbgm9' );
	
	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
	
	/** Database charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8mb4' );
	
	/** The database collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );
}


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
define( 'AUTH_KEY',         'u..YJkpg-v_[)Nm|/:x|fDcJ`%N} SsJ_GwDK-XJ%yQBE AxJq`9:I>5smbyb`MQ' );
define( 'SECURE_AUTH_KEY',  '&ie*n%@S)pm K<c+XCM+4`M O;oe@oaR[glwe~8r)J,EAMrTyW {0w{Z4M_tvk4:' );
define( 'LOGGED_IN_KEY',    'WS*%1Z11nUn:bJ{KCPjx_uI7C+2C$?x5ea%$[ck&h5j_j28H.E3pn%.y479MVD $' );
define( 'NONCE_KEY',        '3fB1jSNi06Lmj(;X(Rmo.tJ N]XF3C0~XLZ&ffX5>rJWoiem/Imxp<f1Z;}Rp31$' );
define( 'AUTH_SALT',        '|K3V@k!J!H#^Io!?yljP1vxB`@. yG~WzFnW1lVkbORzxO{=diKsGZ2K8I+1`h&~' );
define( 'SECURE_AUTH_SALT', 'aS);2KZ!g?0r0(Iu<bLC}~pt,Gw>.BMWr&abwu jFYbgM]KC>0bVzV^TAxD#P`t^' );
define( 'LOGGED_IN_SALT',   'K*=[6>95=#2k$v?r$N>k_$$zsAYbt!8R|0Xq&S4}CGDoaV(/?!2gD?CN&mylr3)o' );
define( 'NONCE_SALT',       '1wbM,vfmNI0(tzP#P(=W$s#AtqGVw)F1vM{msYwWC3I,tt4bKia5N|.i?vZ@<~.2' );

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
