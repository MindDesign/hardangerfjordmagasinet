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
define( 'DB_NAME', 'hardangermagasinet' );

/** MySQL database username */
define( 'DB_USER', 'hardangermagasinet' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dmT-ro7-jall4' );

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
define( 'AUTH_KEY',         ')8yr n/hN`Qx).uc/E8]vvX,yvs8&{xgs79<,]O.G?9-io>Cv^lK HZ}YlM.I[o{' );
define( 'SECURE_AUTH_KEY',  '=g0/;R0bp,)M)5.v|0Rs:.W1$Vedd/_kA?C[o`$bbVSX;w05}ok w^X#c4~!4{4H' );
define( 'LOGGED_IN_KEY',    'T6ghB4X{7<G{R|R|HqSCkpk7;Am&h{ebvyt18>:zcPE(krz[p>MvAg4+l%r2$qnd' );
define( 'NONCE_KEY',        'SBmK#>FqGK+nsB:~-=[yuzRp(/l8&ZvL&!6#ia}y=* Hos%9O+AE)ra1Iv_5Tb#]' );
define( 'AUTH_SALT',        'ODfo0nw[j,7+^<3kTV3fv(2MoSMA8!.mt~%>1+5zBCIg>mw;oRp@teva=?g+TW)>' );
define( 'SECURE_AUTH_SALT', '9xP/,`W;`O?dP_HD~V`H--cnpjVkTb5xtG5kFonF%=,`e-<..+E0X;F)BIQ(7^o{' );
define( 'LOGGED_IN_SALT',   '<BV}*``l=lsDIzCX(Ik9=%}ZJXPYECLg60@O/c?QQ*M&`|Ie}p3?qkwIM6b)4yS<' );
define( 'NONCE_SALT',       'hxp$`#_Dv(qS*7WF~7$2-0yAU*Y1Iz5]U~pGSAv R+B[&VQGmeHvTIp:GAH<31?i' );

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
