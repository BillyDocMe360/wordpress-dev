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
define( 'DB_NAME', 'testwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',          'H0MBRC6?eOV%@NByV~;24i+|zo8E>;y8)XQ^hmWpJW(dC.S?0/jR*WY`Pf?g.Pgz' );
define( 'SECURE_AUTH_KEY',   '%N~Jv[py<{x;>Jb/$gki0F:)IvZ[n-THsqqFI*4$d%-HX$5J+FJ]4S! ?Gk(V+;{' );
define( 'LOGGED_IN_KEY',     'O&v%F7])}j+*5/~7<EZtR={1|]I}-u9#%R{j|In cOQ9#_ :45oZsY[33=rtlcpH' );
define( 'NONCE_KEY',         'Ewl7w}%&knxiOJ1u8Bp<aD#N7#L]Ur/|ASaX2/rp:Yy(eTU=%w8r@>Aglj7rP6Th' );
define( 'AUTH_SALT',         'c8BC$)];vBK1dEiLqCa2QT^h?$|:-^20t!?dgS}&.SL%4S[a-X&,dAN#+}JUxRs3' );
define( 'SECURE_AUTH_SALT',  'H|i)7|.}0V,GN!$2j#^3=k96?$q&{`{7!3J@o-/JP6bC&Aj7!1RKIds(vg3W/%Tj' );
define( 'LOGGED_IN_SALT',    'JXwE.-3c&/qq>%96E73}NXFlo45cgwWq9m&=_=$}ptm{b{XBWdekayL Goa/Y9$r' );
define( 'NONCE_SALT',        ']UUTSXDG`>#`jkpEWqp_<[dYd3X:>?/O6HIq!cQ+Q~m[o wPexM</p,?)`mtZOyI' );
define( 'WP_CACHE_KEY_SALT', '0f`&h2bts7g#o{C2tNB`(_tLNV[hg#rr(k8AV6$u4T-RS|+BAa8-/o?.TwPbrE!]' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
