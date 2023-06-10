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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coba_wp' );

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
define( 'AUTH_KEY',         'lPn8XN.ILC?PME^6eJ+zTwEM,?1c:= #m1^D$$2>wOrq/vfzJxPa[#G9Qy_QnsJp' );
define( 'SECURE_AUTH_KEY',  'drF]QmR?}tDt>Qrw .^Lq#>{Pq6j4,4C2J/Ha/5Fv^1go!X?xZZ+D0vG nga{I]K' );
define( 'LOGGED_IN_KEY',    '+c3oyO/Mj%a4$k 8mz)`|.N^&w*FNTmF,fM.MPZ~FsnX4KyOvjwkD.`,WNXT@ X^' );
define( 'NONCE_KEY',        'Rt#w,v9[NbRx8AnWxjc8t{<A|NVf(+T|><es&_8KUi$3)@3vD<Jr`XNX;z2AH/7(' );
define( 'AUTH_SALT',        ' +/4=b6EQ$YJ-H$,ehRm^jM!z-}(Vh!,9AQ%xe-{%9D172IJ:@Lxov{NwVD-U[dr' );
define( 'SECURE_AUTH_SALT', '5t+?jeiYvyT@g!:SzrqJ=2(uZB*:x]@,{8]crte%/qi;rO/pj6K6^S WX|G~3+ F' );
define( 'LOGGED_IN_SALT',   'qz/8_~[_s{WBEKnY<.e7}GBgJZ7(DrsnwhemV>x@YAuO/mwSggK9;-j<zdx%#kS`' );
define( 'NONCE_SALT',       'Z=]IsO+=Pg<RPA@i0OR8<2Ku`JY}Dyw9v64zx}1Mt @]]e|B]<UAAt]ht5Yi fEq' );

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
