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
define('DB_NAME', 'worddb');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '192.168.1.24');

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
define('AUTH_KEY',         'R:O0!6<J1MH: /[bNurx~~%-t*NrGLgc8`,6S.ptH;C}&VnGWEdi%`!y5G:k4<b1');
define('SECURE_AUTH_KEY',  '!gQPB5~^%}l 2@sBGR[ >7<y?-{qQ;/yq]I5_~NN0F=)7u6YVLxdCn~84|Wf@X6D');
define('LOGGED_IN_KEY',    'S*w)hr1<@j_06V*OCa}PX2-WVIRKs~G=!.an.!)C+[5k%7?[^.n78eM+a4e=,!Ys');
define('NONCE_KEY',        ')w; NanhP]N_!ls]3RqHbW1cXu)*isgBXvfHy4]bEK0Vv/{}3x}?m0{9|}<z$#o_');
define('AUTH_SALT',        'MBm-%E[9,o92LFCTi==`j$^_Ikq8Ei{,jiOIICuUz>XL9G<?CAiOvN(kT8cctpTy');
define('SECURE_AUTH_SALT', '%0_?uhT/h_<1c]?,*wr`Sq,c>*f9@v0:xr=_{w 9as:%uD?zX;v:qz/Tgjbs M|:');
define('LOGGED_IN_SALT',   'KK*-!e,M-yHNq1tR.~5~Jn]dy1[C/BB4G/P<sb2t7`f6ujPIe]i:R:S}[7OE) @I');
define('NONCE_SALT',       '>=v(HA|i^L9y(#FVBi`3Lq@N{.Y09s8-bu%%c3]FJHf)UK5D2PxAcNFbjxf>RDFd');

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
