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
define('DB_NAME', 'thqc_db');

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
define('AUTH_KEY',         'Jm=o_fZT$6U`NOip*7yUxNhF1Hd#&Dy#-vy+cA9#i,Gs&TI^uSp~+hUn-pG18{8u');
define('SECURE_AUTH_KEY',  '>y?8(ngCQsNgwSDNVBS`!g3_tgqEQi_Kp|v:b#2`Tgjg*- ()nZEW{D_bv%S2JR.');
define('LOGGED_IN_KEY',    'E7(j<lUqbRN5hNCf+sAc;hG.[r[oDE/-)+ <&LC`]8c3l+)#ohu<PT(K}b-r A@i');
define('NONCE_KEY',        'R%BtHQ75/MC.UBS~xE6GQo)&+|b+a}NAqp+q:aaT?>/:-5k  DNf)X[+;;g$l@s7');
define('AUTH_SALT',        'X,J]2%dSYF#o=B&BF~r?8>3 L~?&Hh9!x_1ZX?o`0G90n*>d5yUG~*zPI-/0U>c/');
define('SECURE_AUTH_SALT', 'guXMslm=8)ECJ^~f-Vrgi3&X:,SybZtgNT@Q||1v~{d.c0*||>:J|oefl_N8-vZ/');
define('LOGGED_IN_SALT',   '7l>iNA1{Up`+,bP:+4e;+u(7~ar.kyPE:ticm YD02fjfAi]]N}(@OpZ#BDEW6{D');
define('NONCE_SALT',       ')ekA^@]c+u63YOl6bsAL{K}eV|iCUa7|bOJ~(zeJ<wZ(hh*7mik(U(svaf9CIIG2');

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
