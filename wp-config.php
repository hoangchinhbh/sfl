<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'sfl');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'cuncon');

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
define('AUTH_KEY',         '2;|m3i/PoC/]}QKBK$ 8ta|UC|4!`IS,qN~LC`%(>$X+vz$ye<,d-+zn 0+E!ycF');
define('SECURE_AUTH_KEY',  '#zCp|us=eMl~ TaSDgp8xNc@M-tU]IWf:/jfFzW45H*v9,o0]:6#i<T6Zi2<iGU_');
define('LOGGED_IN_KEY',    'ncs|8s4op3RSoS(x)XokLX,&XuVGXN$+36yd_cg3mrpgo}$T)XU8ojZZa9P]RlCK');
define('NONCE_KEY',        'fbvs2jQ<+*8-ri~~STj~7[FM0;6MHT:dk5))Aww~(;E:7Q<ET-M&ql*] i,<Dh;z');
define('AUTH_SALT',        'S&.=FK_C>U=i7=sn/Mna<}BRK{zd-OtXu%w8XRkiMQ16V@Z*zul~@Ag_D*)E4R%H');
define('SECURE_AUTH_SALT', ')S5& sGA4uMQlx[Y5TqYEV9xKZDBoj=cGL=v+ZXs{zYX8YB7qMqE`/n%fb3f$IXj');
define('LOGGED_IN_SALT',   'l :VrJx5=7r<7R~jK(NH]4`eDm>6`$7c2IH 6>1Kc&y$ >H_IIDO]!S:vI3hkC (');
define('NONCE_SALT',       '.2jjVx6DTYdm&N<9x@-m[JG1Jd1q#-KI-2U_=i=P8(iKk<~e6KtFw)iY!$H8>6?J');

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
