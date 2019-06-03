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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

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
define('AUTH_KEY',         'W4i^hfW#%F^ZEwON(_}>?`AB`Z!hkNd73@tBYR$tv~(<j$FBOf+d+.pq^?$4WO|N');
define('SECURE_AUTH_KEY',  'kG(!%[aeN{WolP[c-=v*i5|+zY$r`zYt_$)N+Y$6_-kkoK>&r~?}Mdklu,9%DO=t');
define('LOGGED_IN_KEY',    'crL*UWDc|4-nNzGHUgxV3EmStaV%iinklE`!Ir4!0|:n2E>?bpM&YfyEp)+$vO/ ');
define('NONCE_KEY',        '9w<B,$v&4i7h1ZME53<$7T`iEl??HKkx}7~2=LOP(f5y<%k&Og&T3_w(<%b.d-Ii');
define('AUTH_SALT',        'n6[XK1$ vteMV 5K53^b_*v38YNW^9YM`^N]YCt4};QfEXmd/zh@ic.{O4qs.npA');
define('SECURE_AUTH_SALT', 'QX#G{&,ne%5 @t),M.!_j`BV|tMr@|}r)9y/p0R*~}g_YFjN=O/I8}q{_px@-VAS');
define('LOGGED_IN_SALT',   'OuoiZ7hzT;q`zl{sR,=Bp!mE0UY65r6zJ[eFZyAoF!%[rt>6{s6d>!SD5Xfz#II7');
define('NONCE_SALT',       'S4RQ;35W;.>]8_lE,cTHC)&AA/*lqFbW|<_eI_l3Z~]p$3B*Ap Df3oH>v]o(W L');

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
