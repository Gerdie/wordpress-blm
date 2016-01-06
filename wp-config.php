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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/mariamoy1/Sites/wordpress-blm/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'big-little-m');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', 'root');


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
define('AUTH_KEY',         'ps>:_nRgFs/sjf-Mn@/Vl,}EQV3s~u(%Svy_+)vZ8;/?.ie+<uG,8q2 1w<)|:V0');

define('SECURE_AUTH_KEY',  'Un~9o6;iP n-*NRbSM^[g_[.A$xt-t2HHnD-8ep{,p/TxS!&vf.:g=*JKQ+s<bU3');

define('LOGGED_IN_KEY',    ']th|m~1.S^&__bVrbF S`ld*$+#1-jepJNT`LOQQ[*[GWsn)3|q_k3JJx0o;Vb~E');

define('NONCE_KEY',        '[lPi>()f#3&U~r-EBxO=hCn,CpJ1NTpQ ?.te=bz h 4k]M:#k@Olt*)i 92L:|u');

define('AUTH_SALT',        'J0UjZC#&93P{gL]VhNAfnjoC@I8d^v -Fo !o#p6K3I*zE&^q?4M9]q! 7WuUqT ');

define('SECURE_AUTH_SALT', 'LG_y0),jyn7oo*~,b**FtEk [Le|#Z>l_WrtrQ2K)~+vMo=^_vp[[%/;P7>g~m*Q');

define('LOGGED_IN_SALT',   '++Jd}_j]RmrVyA+/Rp>#qv /o9^1kw)pDQjR9l:)85aQXI<1;x~pb`u$:rs*p07P');

define('NONCE_SALT',       '(dfc+> XJ+qx@#|!yDZ+Z=:Z-c=|?H,2N3Hbs+@b<ZC,p{rc=5*?5QjNrO$U1fz0');


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
