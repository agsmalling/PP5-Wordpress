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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'xJr3dzuGd4M_=oKXhaO!$m+Y:2V27}H3#bHO8:sEtiYF#T,R`xC;Y7H~ZJm}`b6$');
define('SECURE_AUTH_KEY',  '%ioca?>&h/$-cGqCv]liD#[uX1l7 >zE.y84]=?i28l>j&inR)F{A`32&wZ2/qX/');
define('LOGGED_IN_KEY',    'l3@1E%-7zn:6K ?GT.[mR><+#2vKH,wLa>&f8E&4<6E_T6m-gs;`kihEd/-Dy6oR');
define('NONCE_KEY',        'n-|`h9r>2z|`5)s6sXogJ1nv~e{Xtx/}.&1<#?Fqy&&15W,knZR_Ap:`DgHcnkLU');
define('AUTH_SALT',        '?5V`V8C3&x?7=A4{z^NQ_Ex5iKxVl>BdGX#MKt{Lw3Kmeg>21 5MOA?5[oU 7$K*');
define('SECURE_AUTH_SALT', 'W87U)Y}qr`VSi--xLp}oy~+K|RmGh8i_X0E*xOR(g7_q<M&WubGX;3_Xkru-xN,/');
define('LOGGED_IN_SALT',   'xK9*=WT:O7}7{izjhS ?I,RF,XQi&?K-,Hb3>i}nO@36YqCh3.aqaX-]CD*3G#%m');
define('NONCE_SALT',       '(%piV;rw|Q`mx!/CI%3!k}<F<l)I/`=ck}G}2jH@HGU6#AJ&g6uX&DX`ulO;<f)~');

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