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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'afdhalattire' );

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
define( 'AUTH_KEY',         '~EV.+K?dG-fLsm^,?k3]eQITt+;U|AKLVXF7eMx!Yb$Z06qnh5G.<yLB&]0:m8qW' );
define( 'SECURE_AUTH_KEY',  'AF`9P)mMQC{xJvP;kWdO5;d(4YY(v4vvm.SSBYKLEaF33#LONrMZrPQ8|(.cT01.' );
define( 'LOGGED_IN_KEY',    'OJ3-#(RcUR743mw;x@Pj-Q?*kQ;4$f= ,Q`i|k-i4$8+VMQ*d*j01;7n@,p!922G' );
define( 'NONCE_KEY',        'K;I`d9/]w8-rY{9xz,[#<[2G&;#H9i^LiogzLj:#;h:df -*{AX*@sLz0.f/ hk0' );
define( 'AUTH_SALT',        '*_rouJoL!$Qo{$A)S;vR]q^,xihw]D1^I[7QhwVwyMB3`bwH@bZ0Dv/2DrQJdy!b' );
define( 'SECURE_AUTH_SALT', '>fMU&9;1{/ORk=!E5?czr?wBt;px6HySXHQ 90VR!AK0ZhTjBU?2U9RP3pH:;Jon' );
define( 'LOGGED_IN_SALT',   'Kfk4 uv7/{ 53g7%}4V:d9=Io4GVeK5@nDl`!mk1|D[l;9gzqr=5=%J^qK80Y`7s' );
define( 'NONCE_SALT',       '`_xkmr1].%{ga*GD/gvODX1C*IO^Iq2~ hoc)IUf7RxQD|ZHac*,z_VJc)forzQ{' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
