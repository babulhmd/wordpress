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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lzk&s_g+8$gc9i~ur?iZHXsA,i^GtOgDz=+0qM,@Bk}^gm0yW#_e9+>l+lz%S9t@');
define('SECURE_AUTH_KEY',  'q4b:$6)J|Kf-vl;ej@Ng@~ [U#1qJDX#p7LuM@qESO]P9g`7iY}C-sd &3s)TG5)');
define('LOGGED_IN_KEY',    'Cul,5Zj^FA+_2y6m66F;hd58{:;rzx~}hv#p7$(p %uEAB)}47tR(q*:j]8QEXs<');
define('NONCE_KEY',        'B0dsUms=x*w`^0lVzQ_BH5$X2-?$uohaCL|s9@t`YP)^[}?4v+h~brzF;n0XBGL&');
define('AUTH_SALT',        '@?&UTBMxOvyvW/*]FIc5c>j^Lk;)~k!PP/l) ]|<Z;_bPkM=,e9PGDamgp[L6b^;');
define('SECURE_AUTH_SALT', 'sLjuFgdvgZi]E:]~g-1_IZr`44-ZrQK<XOez(8eA{WxW#fGGk<|{MsGDpcGK3<>S');
define('LOGGED_IN_SALT',   '2o.Gw!:0~=ZE>}%3FFrw?Fms4X4r/NVE53zU;o>a95=A=Vt0_+ -]`wZT~c}?KBy');
define('NONCE_SALT',       '_6Ui[|a-l<5g3dp&Is>d9S3dKyLfkN0SH%*nd)T`{3!BdDp}5bu0y-F&-.KlAxO!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
