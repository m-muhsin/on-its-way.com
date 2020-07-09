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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Allow installing from site server. */
define('FS_METHOD','direct');

/** Turn on degbug. */
// define('WP_DEBUG',true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8CbA:0)-p8Q^-Z4 K5mQ0,?N!7w@,}*WD.{ /hj~8z}VAZO1-wi@{1gooT8/Exq4' );
define( 'SECURE_AUTH_KEY',  'E]vogoT,+N-@;cfB$KcpX!2.B{v,cR6;8|ycP()eAm+Q[k-6.n/tVXV{qLI%sOy,' );
define( 'LOGGED_IN_KEY',    'c$QU%vblzR=x_uPn nZ.7k-^$P5KF=Y]!89m=AHJxn!dmv=l&K@`D%x^PfGbG^1b' );
define( 'NONCE_KEY',        '@RqBJ)S<[aM0<ib4Q|IwwHM7aWgn!zi+eeFsVhaRjEZsyqRCYG[*vBQ=rqqTiB-P' );
define( 'AUTH_SALT',        ':4^3U$;d*M!-zKDS<o0}o[G9Lm7#)3Kctb# :eyb:vCaP2;T^<@es^[&v2l{^1YK' );
define( 'SECURE_AUTH_SALT', 'Qq~j9xFw&ZTFB+Rg+A*Nd5tnP}F#/yEKCewRucNVuQ}+bCFH7cDDM_yX&|G/r#UQ' );
define( 'LOGGED_IN_SALT',   'M1A+GB~Gd@,zD?;^ngwFLidqr:eF9@*G?/(IpK9)L~F0Aw0n?iS{?Naez3:tR$xH' );
define( 'NONCE_SALT',       'gkU85E:%m2fDv*OXZ:]<^y#8-)@+4wD;^bf=Z[_52+=[wsTfPDk@)X9WKonzQg<!' );

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
