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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Oe.zV#C|zGX^If/RFydHquq^D)]/@}>.e56Aj<5WF$fT]rx:o{#wlT4B;0Wovj]k' );
define( 'SECURE_AUTH_KEY',   '4m>?uiiu7d>>tp6F;pm>Zq!I=!N%F&t[:rEM@MHfc2D`n|#r2gP%RK)kjG{S@SDV' );
define( 'LOGGED_IN_KEY',     'jBL{EQm@NJld8;?gXD8$BDZG 8*3,&2;}L3*[g{gJO@t)V# an^_rN$mn`Yk+9#6' );
define( 'NONCE_KEY',         '3(isO:UwOU.`A4t]tQ|=8u`>1z]LHEnilQ2dPAq<TdPU]~[_e6a.+3MIYgNFA Cx' );
define( 'AUTH_SALT',         '4NEc@4@9CjR6. JQbQ3=j3Z0s/p^+Bb/dCc`Z:(.o0`myJs#8_p@oBK<gz5#,;#v' );
define( 'SECURE_AUTH_SALT',  '<(q`o*7{g61NVTX@0JAg5BWbeA3TeP=sPmKDTR{,|y@]1s%*CY)f`vY ;yBD3k5<' );
define( 'LOGGED_IN_SALT',    'KtE7BQ9`n8P}2&yn;Jl^nc5}UoJqX_:xN7]G=F3f!fIYpvlKT:PF}Ltb8+S3LU5c' );
define( 'NONCE_SALT',        'Q,y!IuQOE)j 2]Cyg;Uk0jDW+G-ggrCP35SaII:F9h6HjMWRO.Luf-{A/`<_F-nC' );
define( 'WP_CACHE_KEY_SALT', '>%s0O=EJ*8G0!o}+(2A9:sN#$[QOYp>g>WL##Zav&%CK@m|ycpw8QsZ;]:f;#&5L' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
