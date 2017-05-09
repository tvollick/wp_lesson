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
define('DB_NAME', getenv('SANDBOX_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('SANDBOX_DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('SANDBOX_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('SANDBOX_DB_HOST'));

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
define('AUTH_KEY',         'UP[`Ot3YYujl O{7E. dDr:G< 1O}WNC!QWdidV-;ZEag0;,UO>B88V$W~L(d[BE');
define('SECURE_AUTH_KEY',  'r5dO9H@uq<p`htD+D!6~OW/=,abYv(a4%R;GO|{eWHys1(G:i4~[~qqKR_#7UdwO');
define('LOGGED_IN_KEY',    'f%l(Y6~V7jm?u1O&o:BZ-pnq1#jjYs}hVw<LiXD,;*L7|?LhVwMX/g]N5q4,<oR!');
define('NONCE_KEY',        'E;dz&K]1@7~uqOY%LmY)>IO/@hk=u8P&14$s<pKNsY%(3uDIky7frzHZ`FW.YftO');
define('AUTH_SALT',        '%@?ZM+)t<&1BEw]p>Ob@*LAjk* n%Ne5FnKHv=(Kg7DoHy%%K7-+bSLU+_,,XXl-');
define('SECURE_AUTH_SALT', '8 nQyVz-6.q3s`xp7x|nqqs%.N!|NuOQ^I+R!!#QGBG,T>@(c_*WAjeoATQna9=u');
define('LOGGED_IN_SALT',   'P?e8b^|jO,Txl{&3_:`:.(4:TdRu=t53-v)@p;BT):Vtv]uIN,_^[$H;L*<huX/8');
define('NONCE_SALT',       '*bTUtDvtt~<5=QC5fT6]`bwVWG,nOq4PtPODCNl?cg!fVo6Ag8z$~D-71{RYk^:2');

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
