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
define( 'DB_NAME', 'wordpressBrief' );

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
define( 'AUTH_KEY',         'd])Qe%`iQ)H!Gk8~^#Fu!i7X4)2#BF8kcfjdNTACOehI.pNxBEJJ;B;_;|PN*6 &' );
define( 'SECURE_AUTH_KEY',  'RgD 5)%f`_0|#xtuMBGR@u^ZMk7/<va4)a`6W@Bd>n$aOA BLXB-U0M4f,:wOU$/' );
define( 'LOGGED_IN_KEY',    ':0MzLo:|6IHzF-}^B0B(?$W!OC[?KS`5SWCyw[Qg}W?J@D2x EQ?*9g6H$|~t+_=' );
define( 'NONCE_KEY',        '224WF}CU&[QCDW?85xLE%[*{U51S>B|estSljxmLz2frkvmlsPgr/NlACLEqxcM4' );
define( 'AUTH_SALT',        'y7nE^ro]];ykmilq@NoE6+kR9(Z_peJ6uBd1xdv0F|i~2E9pp$w9zbM?vH8-3?nb' );
define( 'SECURE_AUTH_SALT', 'zMkgwhQx|1dR@7?4:8`3.9?<lv2eEw &{$tlqP_q;@/D{8[ra?{^y?tnj+]>ZT*w' );
define( 'LOGGED_IN_SALT',   '1[EJa^<C9 |/,@hhl^Iz2]DU_+OBI#j-eK%_ZFicAg,@2S}J~D=<!nsP9;+dl]L*' );
define( 'NONCE_SALT',       '/!3}<(*RK2pw`x2=+lZk^=CYJ;G()Uv/#-,C=g[,6,$7jspf^uc)=yeddk9?p9I,' );

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
