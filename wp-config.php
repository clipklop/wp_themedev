<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_theme_development');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '* +`xhq976h`3^|$noIb~9Vnqab<4 bZedfg$O^;c/H8|,f_f5/MaC<Ci&K4<+[V');
define('SECURE_AUTH_KEY',  '(/0?4|r~YEtAIg[!BY3@?7&tPw@59p5bv2uq_5J!ZY8J17da^6LrS.MX{)9)u$f^');
define('LOGGED_IN_KEY',    'safDp<Z8QXf1s+sV^0lej/ps4w<*[FRI,bvt<w(Wyxc)*JDD]~B-y1m}+Vy-D=3r');
define('NONCE_KEY',        'Mcm/E*ggG2PHf19TA*(k@nXSuhh5!rF9Conc+N~p id9ccGW4OREQ79?[nx)3{:c');
define('AUTH_SALT',        'n[G6.#4ZHi}P*h+d-cvQ7zA O1H(0ZDX 9nykibQrBK|Cq2J,)p,<d!u#IS1sf-q');
define('SECURE_AUTH_SALT', '&ZD;k:KFZ}Y]p>YK3a]x6:JqaLH3-}j}fS/Qr~tg|{fzE=|eQ&OIGC1AB{v+%-;C');
define('LOGGED_IN_SALT',   '9EFpSFcY:iiubdA0)I:Ro+9L2m@Dj6m6WPdm[C*D:uuOx{>F<#U[/?D4Yn:y8:9Q');
define('NONCE_SALT',       '~|a?+_Co,0]+6|ElUXY]E *}qab-jTV_-ou69WcsDVQv:%c;#!4Ym-j|zL,)Wtp=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpthdev_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
