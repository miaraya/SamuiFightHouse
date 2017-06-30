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
define('AUTH_KEY',         'EHXnQoVM*s*FGhx2SD}CrcElF]N,f;YSo7je`3eP?:/2&lv|[c|o;Hv`d-aspu`7');
define('SECURE_AUTH_KEY',  '%nVvRPV@?~feS5+^+Q6H%^c,Iz1E&B<>L3A$4W_/g[)svt*0fF(:uG$P $w:alrV');
define('LOGGED_IN_KEY',    'UmW,zI,*V]lKT?<6<V[(9X:v4CNpxwN__[K[Ww@KM_a>4y,ujINy@<}rUV_hlc1t');
define('NONCE_KEY',        '&^UK4y~Q*~uBQQ[.*&>pr<ds[J,BkDcK}HUyqeSK@5.S]sSI)/PWC{<QM`X%2wsy');
define('AUTH_SALT',        '$wGZphpR2[k:`eL_z3a2?C<TR}v)U3J>}a~w7|>K.7,x2}t9/$/54U#%$%FaD~7m');
define('SECURE_AUTH_SALT', 'kM,+|Y3D0%Ry<%kr|1xt8uI+$ .EekY<H SkW~Ua=oH?Mli,sGcC|T<0}bX6Q,om');
define('LOGGED_IN_SALT',   'oVE8452Is-GTzTX^sOLDt.3A[0rMZG&x2I1n`LqYiXIi}g5k.)OKJPv<$Yxk|iEz');
define('NONCE_SALT',       'gN T afu&<(HJsDhN:(;Xyj~lb6p(Vl@;E;d&ptmX1MzQU8>Tczeu53Si>QC(2uJ');

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
