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
define( 'DB_NAME', 'sih2' );

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
define( 'AUTH_KEY',         'k-]3u?J;f:GV>7A>Zm3|#u;My/OrvHjQWMht-tMznDt4ZNPGd-)bT7K,!1U[=rX>' );
define( 'SECURE_AUTH_KEY',  '8b9e]g<|E50OkT=~/Drsa1SVlHV/SY (yKV^Qm;]gCEswA,OzrhMNw_&w^U!%W&a' );
define( 'LOGGED_IN_KEY',    'vCbME7N^,[]5<4[G,^Re,[>)%PT/;7Apji7ndd?c|i0:J-&!!;]>6o3KhkD3+qH$' );
define( 'NONCE_KEY',        'aG*h#+ib2:+D/Jjn<f|S?XO}Yy-?#&hrzv}ey^&l3i00zf(WBw;e2=:2p;@2e<sp' );
define( 'AUTH_SALT',        'z`K$Nc&d`$x+MmrA8zZAv#mv)I%o^23~b;ZDfyzG:g)]:,Uk[{I=P,363.~idzSE' );
define( 'SECURE_AUTH_SALT', '.^)}=9Os]BmC{btPd}n%b/o:=GBC=q3tbXWLn/?$Zq/8E!U;~c!k>K%s,kttT9.%' );
define( 'LOGGED_IN_SALT',   '/i8I$a.&(v>X-aOlp],E:~~bku^rJ~D(y|-y)AwiL4S{@:JQEd}{2b/(:ch|SY`!' );
define( 'NONCE_SALT',       '7a@IQUkRMUN:p1lZ9a!5cf?J[EzgV8F}`(UWIyql2z*(saR6H1F2q_DZ}.<MyK(z' );

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
