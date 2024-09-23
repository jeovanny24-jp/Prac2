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
define( 'DB_NAME', 'swp' );

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
define( 'AUTH_KEY',         'GJLt7T?(CtvH{J=x60}(2G%dO_B@UIy,-U]hqD$E|P/NM^.!&|QlQ6*O5(Q4RQVj' );
define( 'SECURE_AUTH_KEY',  'o y]{-.[Zqx/DS])Ug^+gE57^(8MY(E?bUj;IQJGyqeC-L:5?B<?W[*7GjDA2X*m' );
define( 'LOGGED_IN_KEY',    ':T<0c!}$iIbs_NPM%3B9scK{9KB M`L/1^ZM&@JDTBt;80C~-K{]mO7p|>kFnxmc' );
define( 'NONCE_KEY',        '6<SLrzYQYsZRt6Dy$q6:GuDThY9$0KFtJYlvQZvLI{8;c,O/0P, p_+awN;:]$TR' );
define( 'AUTH_SALT',        '$94]Kw(>^>CB!D9$Xm<80U+Da[RtLsE[oZ61 %&m&c|KSvRU9:2r>g1Am!h=rXr5' );
define( 'SECURE_AUTH_SALT', '(x4zQ3g5WPUx{n.7GVtD8m5 iK_qPH@`FOE^?^6Lc>5?y!YbP=ap(8?<?9l[H1G0' );
define( 'LOGGED_IN_SALT',   'hC}pu(1ehGZz2LpII(_^m#`{V9nnVFx{f-Z;mvH[OZXT;R%iyu_+rX/iE&4*D^w(' );
define( 'NONCE_SALT',       '!,P&iuG2%N1dr6wOaD$tW:d4J*jaDo8,>?tMb(k{Sa7rw`;dN+OD<Z}2jM(+F$|*' );

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
