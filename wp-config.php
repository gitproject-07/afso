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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'afso' );

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
define( 'AUTH_KEY',         'o*jh]Awf9cx/xGfym6MY)jwu_,(N|Ku|EQ<ezQq`FVyBo`0XH.&AQEWksq.6hNaV' );
define( 'SECURE_AUTH_KEY',  '8ciq;pI)7:J09_43{KriVLIX.1nxKJT4A`bg@sdt%s)x3+[#H^A;5loRuqo~fo/g' );
define( 'LOGGED_IN_KEY',    'XWJ;keX*!4=93*|4RL9_TQhIDL@Pbg2x/tuWENoV4[ln_N[oy*{&OLIblJR!)QX/' );
define( 'NONCE_KEY',        'P;14[sscY-Zf:BW  ?&5?V-eB&mR^]~F&7n|hCNR<^K=~sbQbU(Si0/hDq(j]`38' );
define( 'AUTH_SALT',        '*Ix6hE2@Xd:Spj;.{91+$;W<{.CR*BD[f=C!m=dqKv}-^A_8eK)k@%HHX6t7#hp]' );
define( 'SECURE_AUTH_SALT', ':2t 38d}ry+$v*:@x)!NbK5COIa$gB[X=Ud:laq={5QAhj~#O|$ae)q+T4HR]aT@' );
define( 'LOGGED_IN_SALT',   'KOVuqnkEOTLAbpO2wrX=cQgbS04)YDHZ2H6nhx!:JqT>?$9x2rmkwwp(nT#LC!jI' );
define( 'NONCE_SALT',       'eM`~nh5EDtS{l*|/HBcneQzc@xEV<g=/OD>6/}pE))Z7&&]rlc-0}5rIh(h&.Axw' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
