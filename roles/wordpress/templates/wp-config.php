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
define('DB_NAME', '{{ wp_db }}');
/** MySQL database username */
define('DB_USER', '{{ aldo }}');
/** MySQL database password */
define('DB_PASSWORD', '{{ password01* }}');
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
define('AUTH_KEY',         'T.{O<j0wlA|*nP -}Yx}yc;C+O+,jBvuwtna6&gs~hbRtBS]C8?m#a?onRG+#v=Q');
define('SECURE_AUTH_KEY',  'O+:H)(cHS1gGL1,-(xB|<&piqOa1Tqvt2 y&_TO3ciT }:(ILYGhW)x(1_^6+rZC');
define('LOGGED_IN_KEY',    'a0Li8IB(|>m-dD/7vOgHl?/}}lV`]sP/n??/eyLz|f|BLp,xSDs1W3$O;Rm9HGW+');
define('NONCE_KEY',        '/Q7{k+Wa4j3E&q|k}RyZ0EGCHm7-ll4Gc[K-ZdPDv EOU5.X<n[R4fPLi>5g1jiC');
define('AUTH_SALT',        '7w.*?#:b2J&&DWY.je||-1M+r@> |]S&}G4&czK8*(BG05Bh)Kcq7ZuYwdzF|:BJ');
define('SECURE_AUTH_SALT', 'ARMYcSoV=yXO/w#f%gw7Go#I.1:@v}~+<Os;,V/&#dLcsq]u-xT53ZM{]kSv/Zd;');
define('LOGGED_IN_SALT',   '5AA|QjI>kBO#d+-omTJk` /Cn-QgPk`d.I8~$eqOO--*.]~pH#+[V`E4HTS(3Z^`');
define('NONCE_SALT',       'HDn)$C`8z+t6&(zywvj{5TwTAkq,B},``T`-})Vf+xXR/q0^]ici]oVx+yS}:9ED');

{{ wp_salt.stdout }}
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
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
/** Disable Automatic Updates Completely */
define( 'AUTOMATIC_UPDATER_DISABLED', {{auto_up_disable}} );
/** Define AUTOMATIC Updates for Components. */
define( 'WP_AUTO_UPDATE_CORE', {{core_update_level}} );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');