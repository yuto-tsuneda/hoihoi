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
define( 'AUTH_KEY',          'R!X@R?+q(lr;`is=,;}0v/1w-t3@o-1J/;1YqkNGPYbD`~^rm*B~rj[)~,pb:I/+' );
define( 'SECURE_AUTH_KEY',   '@RQz:V+-Jvi&IbHBys!it*Rz|q-HVK_m(Vd:c9aq7XZnoyYX>XhKn>d1;c%~D3/`' );
define( 'LOGGED_IN_KEY',     'nq?S&dzNtGt!S6,@&EN^<x[Ek0cJE.IJB3cqJAbHlHhY@<`i?UE*a:%^l4@pX0H`' );
define( 'NONCE_KEY',         '1evY-t?~e|vW(Vx*vsw8>Gn7Enx{GhI,9q 59*r$ J5,$SYAj qoQ<-M$$>LWue[' );
define( 'AUTH_SALT',         '`L-]fhFJP%e/tq%1SscvCC.uRBkEpYI[eily4~Fhshp_V<Jc~ (FH@D@P%hq%RGw' );
define( 'SECURE_AUTH_SALT',  'b62xAy>9Zw/g(-emZS(() $aXNTNL[vg-_)cpSxDV`Qh(H[9+0ETr!<0c/yzbkVJ' );
define( 'LOGGED_IN_SALT',    'nYJo<gSnOowwI`i|ahQpK0v3hOGeB=,KV %`O7DawP1>~7rkyofX4hk|]h} 1f%h' );
define( 'NONCE_SALT',        'i6,)@3YT(Bw,oN()#pYY2}3f{<(*2U>(`Xaj6D*gg#r_vH!k%Fu$G`k)ZOWp%@?+' );
define( 'WP_CACHE_KEY_SALT', '1}$Us GS$*/Hk5{WmWt2GTfr`vMB3&a_!nBiiA)NRTt#L7.{&$[aHmii(Z@9<?ss' );


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
