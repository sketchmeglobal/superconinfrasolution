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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ngo' );

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
define( 'AUTH_KEY',         'S*2ekBWEEmVZTKGH|(%<5+MW%#2D,@QK?KcfL|v{FQV%r~S,![,dm%9RL(ZH`k?n' );
define( 'SECURE_AUTH_KEY',  'Q2RvtHTN^V<q-87La.gkg%B297`(mfE53~7IY|SkwD.gJ_ENw=Sf9t&B70?75p8f' );
define( 'LOGGED_IN_KEY',    '$ <5PU*E%d/`ZhTq&*O(u1OG>4!6,gp8xGZzqWbrEXAhZ?tKq_nL@Cq!|WdS8ys#' );
define( 'NONCE_KEY',        'iUtWrO&]L4,GoNM(pV%Ei9Mfr$bv`e`A4_*ZWJ$nC&O@;4LT10ogb+6~v#P,JLu=' );
define( 'AUTH_SALT',        '&lIoub0#)0VXF<cJ0Q53<D2 lf|;xD0_+m(,ad3@SB`[),:Tyiw3t#UZ]edA!XaD' );
define( 'SECURE_AUTH_SALT', 'BAMCeJbs2`42@N^jf@0a@O_(-b xYtFUj_*wSZ=(zK&:$zjY>rH>re?e%nl{5_zw' );
define( 'LOGGED_IN_SALT',   'dS4bt(k1{q;C^=T%=/[Ubis0&N59T_3F T5U/@zxKG|VvK8QOKZO=+]m2y58a:! ' );
define( 'NONCE_SALT',       '(e@q7]w;D15x_8aMz|4%iqN{$_+&R,[`RDG<3x0jvz67#:LkW=>*~Bi^?z}QMV~G' );

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
