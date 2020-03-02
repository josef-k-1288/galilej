<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k>eIri{Y6cU2EJlD$V*?ghvCT:=):u[_(86:,g5BM{vi:3Q(w51CY8r85+I-i$vt' );
define( 'SECURE_AUTH_KEY',  '@>hU@kLm< *7ywarsJBSuCi+SkM|NqLQJS)}wv@9Y+ u82G.svKZ<E)|9nm!w]:_' );
define( 'LOGGED_IN_KEY',    'u3S7{5 ?`nHX?/Xhp{#y=0}2B:<[bZMUWDmHzIBS6#Sm!A&I7*KC->egNF<T)gq`' );
define( 'NONCE_KEY',        'Nvu,6z<Y7T(WB*>^+x7k]Yd w1{hrWgk,:3OY%cjsye+t?c#w0EQzo P^MjtjE-q' );
define( 'AUTH_SALT',        'nmI7ArKBv5[]VfpswS.$x/=QK}P3Ce#;~q03-}_5b{$?3k^slh,SQ@(z/Ry?,Jb+' );
define( 'SECURE_AUTH_SALT', '&lrB~i.F[<=@alG~Dr^|Vf4r}D$[+,80s8zA-tohK!I}CtMqgQI+O@zeP=Y#u!;Z' );
define( 'LOGGED_IN_SALT',   '-%a)O@fvEq%2nhIGi-|qb3r}(.g<V90{6/#6XuoFy73:gU+D2deT<W}-K)b5]k|<' );
define( 'NONCE_SALT',       '!PcVy1]bImr?< {a]CMgcx%$ **w)!?ma.nUZ;}[QDj]p>`OnFO~u+6>2+eMHFK:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
