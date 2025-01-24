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
define( 'DB_NAME', 'iawp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '% [JQW/?K47`Ede,)6j>L0&pnXJdxBYeYiY%5kGlxGZ%Se}bN$=6}Mpm3VIsB{cU' );
define( 'SECURE_AUTH_KEY',  'U6wmIhO+!&ylKC:, j:~V?QD6;XcCK6^4R:hrXkC?fNb~>cr)qU{!l|O O1{dSV0' );
define( 'LOGGED_IN_KEY',    'c[bX?p=}$ zk311,]RbW|6jMo@^ p7_J/NJS9w.o,p(o?gv+BMP4[GT=p@Man79Q' );
define( 'NONCE_KEY',        'wx!h{IngBrnGpPQu8,7snI`,{2*T]cg!0X8(o|e~Ha*:p9#*=(X1CJ(qktu]f:&n' );
define( 'AUTH_SALT',        ']b #kGSOU2/%Jxd?vO4LihR@sgTfa^Ik3AodnT0c]nzU_^7^84t^!3ZIv+t1,jL&' );
define( 'SECURE_AUTH_SALT', 'v6cgV^]PEJk*^I%iEIX*wJ11f`Fi<~+Bt6iO~rs`tq!cw^J^aUCl2^tV<<kTo`8/' );
define( 'LOGGED_IN_SALT',   '[70kfmIBA D)*DO)7}g/4<Ge1|O^ 4h-wZP1~=>t|H[iCO9hYx XuTUB9mTJA[AI' );
define( 'NONCE_SALT',       'b<XjDs^N24s4ob 3cbF<;%9(4[Scqnh-L9/0]+AjyXJ;)Q/0U^FS s$fz,yuf/Mn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
