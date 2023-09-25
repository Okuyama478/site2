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
define( 'DB_NAME', 'okuyam40_novo' );

/** MySQL database username */
define( 'DB_USER', 'okuyam40_amaro' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sahara1976*' );

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
define( 'AUTH_KEY',         '1iyzy15aatujimuvqppkcfoemcopbnbunddw3jndn6kcheu7tqs0teawlsa1uh5v' );
define( 'SECURE_AUTH_KEY',  'uacdde7b8sij25ys0qwc6hb1y1iq7umjbpugm0etblk3mjqalhrznw5zq8nfmiva' );
define( 'LOGGED_IN_KEY',    'qovv1sv7xy0dbwck0pkdxsomnb2xfbh0nlakok0eqlfqykgw6pysanmlyxr8gw3m' );
define( 'NONCE_KEY',        'sgnrnlqvfyztqojmaaps6jsjtrikepk3mlameqffodqpecl60rg7t9b4cogv1wdz' );
define( 'AUTH_SALT',        'ebboi0wbpjxcmdu4a0rufvltl6kpfhpx6xkxbnojzkxoapixfd8cz2x16qirtqiu' );
define( 'SECURE_AUTH_SALT', 'mibzazl995nxittka0e9fcflar9scu97ue2wumxbdm0pfo5wwnwrbbfxrtz95l9w' );
define( 'LOGGED_IN_SALT',   '9sje4k35tdtwxecgxglgeqkzlssj1gm19hukuj1lntdmlwbwjmi8seigwmsodoqz' );
define( 'NONCE_SALT',       'oncqeisugsagg9ttl3oezpxbivoqv1cevyksc42g1vvvj3ca7jonup4jz4yeos2s' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdj_';

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
