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
define( 'DB_NAME', 'prueba_tecnica' );

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
define( 'AUTH_KEY',         '=s9,sT*Y(qGf&$t-p2t1q8B1Ryo;pqDV>CT43yI<YEVF:hXRb9jkfPH~^e^*:Xe,' );
define( 'SECURE_AUTH_KEY',  '_3KVG=E$JAs{dS*(&GN:SW&H={`qOp0ZSBH0v.it6O32JiAK4Q1PlzWZH%Z)5Wt+' );
define( 'LOGGED_IN_KEY',    '-(]2PWh[n[3[}6Hhez3B^~oP7BSCmV*qq)?*S;/J}$(~Ze%jQ<+{YB,sEM<#^})M' );
define( 'NONCE_KEY',        'Dsy-B<EY7{yajbcensJZ`Htk@C_}dH9, ^cI.-B5zGTeFIq^:e#7c?4vT2v}1h#G' );
define( 'AUTH_SALT',        'h+#sSW1e<K-z(B=*0q,:xLY=/?GDR?zmc. ]`ySx$:brlH_`@~!K&PN.>G=zAf$G' );
define( 'SECURE_AUTH_SALT', '%%VTGDrb7DyYr1wE{NJHQ61EB8;(Ae-}R[+Oa`k;^_L.sN]G=F[4YsH/hcKr*>[,' );
define( 'LOGGED_IN_SALT',   '<36BD;x6Gb2GQ_=Ez}z,qqIP2S@$b|.;Rf(r/D,wGJ5~8]`jbw(ln2J{!W;`g-3H' );
define( 'NONCE_SALT',       ';@&~XBApMGm1?R {XR>l7FY%2OUCG-mP0iw]=M;%E^4p<uVAh#kv%cz7-<U~puIL' );

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
define('FS_METHOD', 'direct');
