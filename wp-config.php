<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd49erspecial_com');

/** MySQL database username */
define('DB_USER', 'd49erspecialcom');

/** MySQL database password */
define('DB_PASSWORD', 'VE*4UGjq');

/** MySQL hostname */
define('DB_HOST', 'mysql.d49erspecial.com');

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
define('AUTH_KEY',         '/L$FH`#zt6rzjd6Mu&~VRb4o~x"fzWK52#|Iys57K?2|g$:`oWE`a8rb|?cZlS?w');
define('SECURE_AUTH_KEY',  'NERocBJ/"u&T(1&tA|@s|T?Jf~1p?RLG$qID470syceIS_WwGwuSKYspmh#l8A`/');
define('LOGGED_IN_KEY',    'd$cK@*!nCxP@k$gtx%Rwp_26E;5SeBRPHwx|!H2m3Tw3xoKI5?(u1Q6G#bwdLo3D');
define('NONCE_KEY',        '+jc2IyeA+Ep%^c~cI$_+($xNkJYa#as?L2GS@ZkbuJ#133Vga0a&Z@^Tj2nyTFu|');
define('AUTH_SALT',        '?!ts9K&%2fbk#U`tzj5lhB`@he`Jnz1~/P6tsNRuZDA6e?1(:FJ@B)Om/N!`F^GZ');
define('SECURE_AUTH_SALT', '6vcFy3LrDrpW$YkKbSLNFnQo7mBi5qV44%nt~38m"Q2%H!oGlDNZLeev"z;sZC)9');
define('LOGGED_IN_SALT',   '&$"OzW?Q@UoGmkUq"kG!Nh:Hg~Ca9^0aUV(GLj0C&jO0@B5F4k*2qs6^6Kf/7p;x');
define('NONCE_SALT',       'w4Aq~a*+xc"$?L3"RJ4(86@@~M?M"LZVz5V+Zq6McdB27(3AdZ_mL;_rl#dz5aw?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_cef92h_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'd49erspecial.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

