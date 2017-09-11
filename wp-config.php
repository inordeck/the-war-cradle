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
define('DB_NAME', 'wp_war_cradle');

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
define('AUTH_KEY',         'B&>]C-^c)_!(v1Yn+RwV]IgLT5}L5@cDk,gco7[0Es%R*,tR[siqD>ixF^;y {Z)');
define('SECURE_AUTH_KEY',  '7sg/i3u3CIzgtDf6;JJLh%(YpVB:$VvcYB*7_@tD8R$h2%_G&!9af)K~eHJB7Mno');
define('LOGGED_IN_KEY',    ')~n#ZX&r.6Gl !%-0;}aJNm9gY8^;YoxJbU>NmrHeE`.k.lYW-vm;uuP+;BfQ/6A');
define('NONCE_KEY',        'cAu6k>vcVm;Xl,3/Wo6+6wuyO3`-&z8G8Ide^D.0(x_$m0-/G<D:+F6EIkYXtb21');
define('AUTH_SALT',        'f.LAR;MJ7Vc<lQ*gMl[mK},eohcU.@+`)E&]YU-=z|CJK.{AZ@$LZ$>;u+OY Y-l');
define('SECURE_AUTH_SALT', 'RT6lCE4Xl$qh#%S&e]9=dBJulMml)mfVP)YHT[#<hKS}0Uy:J@vqhk{wfo3Ecbea');
define('LOGGED_IN_SALT',   '7LzRP<e{(!#533*c~;XfIaLi3bI1[zdG>`E(xvh|7i$>uNY)^6 +iZK8uaaS+m;[');
define('NONCE_SALT',       'nIgU<>63y#]g57F<:6y_:(Tm]rL>/=AazfEAx,pH~WfW?$Hh]3zP :%zElbrU-l%');

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
