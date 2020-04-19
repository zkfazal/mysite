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
define( 'DB_NAME', 'mysite_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't:xnJWS`z1-m9Y>w1IlzO7cD.j+=Gis.3~apK`Cc%2jNda_8HWiP-i4U~MJ2Txb|' );
define( 'SECURE_AUTH_KEY',  'kURr#5?v1QC]1-mUS^6tlw?V!H=cX-My}C;qi5Ue huT>MU2i-Eka,gm<&8Hw6B/' );
define( 'LOGGED_IN_KEY',    'Ro1OI;]KFol(5FkW+/dgyx%zK/Qq/Rm! =I`P/DGLP^V+QVI-JR<O.-3@_2`8J2t' );
define( 'NONCE_KEY',        'J]+47RxDzI@>CZci*G-+/(:o.PZ,FY+|/ GTF oNMg.&C/tW1 Vkc>eMVS)eINH+' );
define( 'AUTH_SALT',        'gD7lP5P4rGU#r _SAS1=%m0N qsSJ|6 rRDa{<GHK^B.p;8#Q(vF&Xh8&Ai`G;SR' );
define( 'SECURE_AUTH_SALT', '#jS2+ Xs4zP})EtX#?zc_t<[U0.06?hDbBDw}hwOhUz5.?CmT5C0reff d9ja+Ii' );
define( 'LOGGED_IN_SALT',   '4Q8qq*iaEO&AsGslWGV0vIxxZ>XaW)/ZT>?1n=(zb,0>>m]l/&Wyl#Qy04*=u;Bm' );
define( 'NONCE_SALT',       'e}bD ;z1I~Z;]R3Xe(e%uGEfR%zZX4yiS!y/39D$8v|5C((MBf,*</P%(1@c98hK' );

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
