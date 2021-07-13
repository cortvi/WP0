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
define( 'DB_NAME', 'wp0' );

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
define( 'AUTH_KEY',         '(]HqBk}W0pjiQ+eG:T-`}&xgG_;X9 +O[7lN</?I+8~R$PI-+K#ZN!_!3?h3l)-S' );
define( 'SECURE_AUTH_KEY',  'A]UlDxY4Z@Yr_$N?tYc#7V+%H%:duo* E;c:JZ0.Xo[sCm86>cRo]VRZIK_*8w=m' );
define( 'LOGGED_IN_KEY',    'fl**Sh-%v:NkjvGX)mP+B^qPQEn[H(*;|%eo3xE1+ER`eZ8O.ng)pMpv-/W~B0z^' );
define( 'NONCE_KEY',        'h6H_%MOFV5h>E#Tlkuz}n2Qg?FU^$xKP#1R8(ocU_A0K$5~NWo{,fiye.<1I(&`u' );
define( 'AUTH_SALT',        'oshs*ptFE5@A;ym/h@!aGIOSK+?EN,aJ3IIQC>&[fD8<ioH+,R+_rAosHjy2/{,S' );
define( 'SECURE_AUTH_SALT', 'ZPs0D969w]|mg_9l?#tLI 09}S#)Y)kg9z<65+]/$h,<[CinWIndIyHRrRg3nj>n' );
define( 'LOGGED_IN_SALT',   '`5qCww:VOepL7iC4Su[3lc[{tM0r&w+I,gXe-qIiBj5p`*Vx,%&-;QrD2K/CwP,_' );
define( 'NONCE_SALT',       'C%|Fpu}kox~xRgo!Uifz}e|@uoF!7C}`RaRlNT.38d[bb@U2VLiZe`zu|jGI%(oU' );

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

define( 'WP_HOME', 'http://localhost/wp0' );
define( 'WP_SITEURL', 'http://localhost/wp0' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
