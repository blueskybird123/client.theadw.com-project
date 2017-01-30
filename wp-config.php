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
define('DB_NAME', 'theadw_client');

/** MySQL database username */
define('DB_USER', 'theadw');

/** MySQL database password */
define('DB_PASSWORD', '54f3k33p1ng');

/** MySQL hostname */
define('DB_HOST', 'mysql.client.theadw.com');

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
define('AUTH_KEY',         'AY#sA5bgU@o/jRb&CTF9OpdqICO"e5dg;/k#9KrhAJxGxdVBQpXIHBRstijt9NAU');
define('SECURE_AUTH_KEY',  ':R_56/v1PpWk+MjoLR$$v@2WwJ2|s!BowL$RIOkISAX@X%4jHlRm8Upsj?FW1p(7');
define('LOGGED_IN_KEY',    'Yi(9%clLLi!1Lh?R_UUSSB:6|wN5YrM%F/vntj5K:atG5pc)nW0Y075ld|Cqt1LB');
define('NONCE_KEY',        'D5+~^HMPJ4%n|%!Znj%Z~x#yJ|8:t#7&i))60cqJUYdCbE&^Wd"jTRq/&^O9I!0B');
define('AUTH_SALT',        'wb_~WL((Ui^+E5OJ0!%"(Mg`@$2Vpn/)JG^*"zjU`D`Z2qK%KHlZv|rVji/8$`~*');
define('SECURE_AUTH_SALT', '/Dh&*_Qj1E24l3p+sUz8X/b$H1%yY!8H`VPM*j:^5T?3^W_9(b;~?DGbn7;X/STj');
define('LOGGED_IN_SALT',   '~OzWNf4WW)Cni8zD&pBG#$?;E?:M#utf5h8E)#$!p)a|C8oWPKY4&u4kat0@6aKw');
define('NONCE_SALT',       'Oi81y@Yn(yQLf$3ghD#27RN)0cOIGuAiety+zpq&ny&hB5fL^!E|/v&fh9JCOUZs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ziw6qg_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

