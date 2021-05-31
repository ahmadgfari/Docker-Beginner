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
define('DB_NAME', 'dbwpkuasai');

/** MySQL database username */
define('DB_USER', 'cilsykuasaiuser');

/** MySQL database password */
define('DB_PASSWORD', 'cilsykuasaipassword');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '.Yq/)88XKyfEX,lN:t#>8m{N|W)oQ8W~kbsw}5}-E=4@@EyW6gHccGZCZ(4uh@o_');
define('SECURE_AUTH_KEY',  'Iq+)^P^A463>!8-!,rRwps#%b-@N68S*xAHKXy<E9sS_nmZY-ogW=TU0D]?|A&R7');
define('LOGGED_IN_KEY',    'fB(0j`yQ9r{F:ekv2UcUM/#>PHMCwyPZ+XL,B~Kq;.sz=3W$<YRK2=w~)8s7.OKc');
define('NONCE_KEY',        'BHe+<FT>Zr3O1cg!Fd!8`yY#QB<BJ[CJ_UqI,4WZONo3>(hqs/x8:VL1aQQ,Z1;!');
define('AUTH_SALT',        'J 0wFrwIAf83W00P|4&<<W:lpUUvRpeP_V#KksRTP^=?AdNe|-<gF06cvi}8yr<8');
define('SECURE_AUTH_SALT', 'q.@a/CoQ< 2jA;L46Nk4c0Wlbhwv+~rWdz!&zy+jdb9}K|gaXzl/r2/mYvDk[+aF');
define('LOGGED_IN_SALT',   'i0#i3F7i`d{2|QXgOcW.]JHF^)~6zbZ^P~2dbGKmp^$Ic}dX{:,v]i+ Wh~_[^$r');
define('NONCE_SALT',       'g/Ofs+gmv.Q?K &>WR!]_JCL;DB]m0n`0exdpru:mCaQpQXZ%hE&TGgA:<?#i!_ ');

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
