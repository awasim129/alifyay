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
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'al_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD','Alifyay786');

/** MySQL hostname */
define('DB_HOST', 'dbalifyay.cvdboqwppsft.ap-south-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3HVbOv,r83C}5!p1.m EI+w.>HsI#Rr|i7].t!o6f,-+33: Ag>:1k+2}/1*S<.3');
define('SECURE_AUTH_KEY',  'rf^W|a-v$4Vej!Tlk@LkAbXj)-ci1,nj !MJ+R8p%1ZzMLNsoT3Xr:rM$(,_<Y*,');
define('LOGGED_IN_KEY',    '*jy>0p7V1&tBN0[C$;7q~NKfa]?Ys?}%Aur||]J_ Ux0>EEZoaRd`Ap$7,2c=~S(');
define('NONCE_KEY',        'h^fo-Ux.NWto4nE|Z~FGmyk+I(#!{!x?*rpBxHRs3Pm_-0>!$N^6v%yG5H|25^|v');
define('AUTH_SALT',        '|wmhk@_FG/ti*||6im?k+cjU$i. <S}Jim83[3k;AA<8M7BybR{|kGiX>NE-d27+');
define('SECURE_AUTH_SALT', 'Ry:nP||?=|v(0B08G47&6m*u Hdnojw!jX-/G>D]B??.f7045]gq|/Rre<Qu%NU|');
define('LOGGED_IN_SALT',   'e|~3Pv_,OveUoK_Wc?Qb+2wqb}`4evt0Q2APQ{cHUAhSe4K,g^BmAkM>gT181S[+');
define('NONCE_SALT',       'O[#kd^7bZ~ ]}{qHVv?OU&et|<`qz q))S NbjV}yByb0A0.RJ$K:Lw&IcJAFGG<');
#**#@-*/

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
