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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chefs_restaurant' );

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
define( 'AUTH_KEY',         'Mi#mj#c2p&GB4w;g!mU?E;>t+rn.R@DQlW_I+ZK-xI{(&(n&IyrbG}Z.A|4h(~YT' );
define( 'SECURE_AUTH_KEY',  '~,<JAzu;zzA.PQO;T* =;^ig>`nZSe%u.k1nA=Q*]/0]F5?JH2=0rvKziII!p;?n' );
define( 'LOGGED_IN_KEY',    '{c8()-we(NOSm}yb$P-RB.9U$AkvZT2s617~-+t[v3SH9dQs+aH|Xg~~]-I1P$!m' );
define( 'NONCE_KEY',        'B?S1/}xY[ M|L07kR+gDA>dcEi~?JjTF(7=-4!A8PXbIQgW3kBK:J/uhbKDh}/))' );
define( 'AUTH_SALT',        'ugA#})/y=1Y[qjseCl,ZfhHjn)uE)|!T4f)*]/VdRaqrg__d77l{%-?7di>1(/3U' );
define( 'SECURE_AUTH_SALT', 'L6oVgV4DTci X+O{g%sQGjs%fl$P@7,`rE2XEKapE.%/Jf96TkWiM`$L*+Ur0zsa' );
define( 'LOGGED_IN_SALT',   'Xl-;c$C2yRz ]6We,TY5]V+]!W)wbfg7GcUIwfS f*4SMN&-_,j%o9h(%*byexvM' );
define( 'NONCE_SALT',       'I:H|^cXf_$f&x-Jn<bA~3b_}tm=-3aP qGPY(4G;zog#7n?x^jrn>it<CmcF>LS%' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
