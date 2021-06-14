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
define( 'DB_NAME', 'wordpress_theme_creation_101' );

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
define( 'AUTH_KEY',         'ejWF.O3iuO5dtja4<#XFMS)|EeDjD+KN:v?EHU4VZ]PYW-% .|lB*xgGK%ACbLz>' );
define( 'SECURE_AUTH_KEY',  'ZSF)r`7Zz^V[z4;H8ngx&43z2Y9m8H|v--#ym[@2aKF3{a3,[+iqJ-(sh<HRH-OH' );
define( 'LOGGED_IN_KEY',    ':2_(wSE/Y1/@+=?t,o4cc,$;>kQU1Hl|!S`kkN#E(;}{bf@@jKPI!My?o ~rfqeV' );
define( 'NONCE_KEY',        'SxloAXj9pc*[v0 9?v{E`^3^|buWV|iAcA!lM9TK a/6rN|wHLc9a~_ZQ`J$(djB' );
define( 'AUTH_SALT',        'hghT+3;oEx&|8#?G[dHrmddR9}tF, O^ZB.ijp1CZn]*524?q2`=PX--Nv$BwC2b' );
define( 'SECURE_AUTH_SALT', 'lcf|}ru&j3v_~86sB_B;xeAZkPQ~5EP;32U`-{5|IA[c9$R$:GB;MBLJ_YHNQOGN' );
define( 'LOGGED_IN_SALT',   '}=Lb1!CR}-yy(55,g_(@.VU~+^l|mNrq%M{Euv6N5vgd1+L,1nB:G=PgRbTKVO7P' );
define( 'NONCE_SALT',       '[_aptH%*c~*PYLo[h33G5Md&>w^UXF,;}EsW=u`OXnc&Uj..b5(_&@[{,E[`]62V' );

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
