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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/customers/2/2/9/marinopardo.com/httpd.www/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'marinopardo_com');

/** MySQL database username */
define('DB_USER', 'marinopardo_com');

/** MySQL database password */
define('DB_PASSWORD', 'StMPRjMz');

/** MySQL hostname */
define('DB_HOST', 'marinopardo.com.mysql');

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
define('AUTH_KEY',         'rj$w[[I7n_?x@J~OEivi7@#z-6T6+a0X');
define('SECURE_AUTH_KEY',  'V)?CtYb~Zhv(vlP&X{e#c-R/?83a[isD');
define('LOGGED_IN_KEY',    'ImBi^8<bB_@tpJO<*!<3q7yv9Sy7/NBa');
define('NONCE_KEY',        'H7HvTpC9DT-/VPrW}ZjQ80LTkeUN;q8G');
define('AUTH_SALT',        ';=zlliP%>XPBrDb*rh.qn01_JJ)<|Tgb');
define('SECURE_AUTH_SALT', 'I0J}J5i!toWwzz5-Sr87#F-aaZgG8|q:');
define('LOGGED_IN_SALT',   'zhw)a}^1t|cPMO2ZT72Cy*0;/A](Qp][');
define('NONCE_SALT',       'p:=IOWMN(q8P@gfTl@Q0P/>0PLhTQq+O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '0_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'es_ES');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/** 
 *Prevent file editing from wp-admin
 *Just set to false if you want to edit templates and plugins from wp-admin  
 */
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');