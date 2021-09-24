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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'fCHSiZ/#`U4z7{+n)OUrlE!9~{9uq65*,fA*IL/3=}tjeXxe[F/T?l/F]vZiTU: ' );
define( 'SECURE_AUTH_KEY',  '.uAFuA{plfb;)uEs!#YB6(d N7U#{ 7W23oH//Ffw.LN+?U#Ug^:$e1my1}.T#:[' );
define( 'LOGGED_IN_KEY',    's]u+hyg&69GD[8b~F2lp6V$6dE#Ay6!~T)6qDBf9ABKZY/5x:[9,Ld<W%*JW8Py=' );
define( 'NONCE_KEY',        'IZT<wG.Q80@?a7Z5P57y,U~FvQ.[5~Z=wB,jna=yL 8R-jFQzZVCn:Zep9DQMzkv' );
define( 'AUTH_SALT',        '.gz,{>p)MnV&ku%h1-Wjo&lJD%V;+~4?sDjD%Qe +c[b?!Ty?~H>TvFRAdE[(>~K' );
define( 'SECURE_AUTH_SALT', 'M:%<;gc:=@^&dOk&=kROw8G?UROt?;9MHyArdZkGv|ndr@l?? xuZSc<-N%^endT' );
define( 'LOGGED_IN_SALT',   'zRfP7 e>^ $~]<`Tk *Yn1?qex(.uK{,JN}0Ko(78ybY!T #tjp/!Uv@>rRnfpvR' );
define( 'NONCE_SALT',       '-_Ig$cd#YmrOm?a^R2RxgK<K/wGi[:B@)hO1<}s/Vf$Yb9Q~O^]:g0 X(.k#(|)=' );

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
