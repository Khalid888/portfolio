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
 
 //TEST

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'XXX');



/** MySQL database username */
define('DB_USER', 'XXX');

/** MySQL database password */
define('DB_PASSWORD', 'XXX');

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
define('AUTH_KEY',         '#q)`sGDym]SnD|Bkb17E7b9VcD}K0>I|$[ZOqbKGJ50R4|GTY#Qq@V&+C}lAxr21');
define('SECURE_AUTH_KEY',  '05BuBi+w}c)@U]@(AZxfVw,)Goh+*E]*J3arDAY<;zoRnR*0h9;5GKXk%f=RJT{/');
define('LOGGED_IN_KEY',    '1O|yN/.3fqdC0gyM*_aw8jq5g;(_XjQs-Eq:sI8eERv{bAfa %z,M3fI+1h{,Y06');
define('NONCE_KEY',        '1_=Q/t.3`cP60k|U:k[DY|zpsVd+h>F~oq~DOxIs`7NdMv2|j0_l7cPle>]|W::W');
define('AUTH_SALT',        '{m&}(0%55(>TO^l7D+9-Y<h-NAvLA~.6LyXh]JmZRT-5.um3v6$:G=*aA >N7S?_');
define('SECURE_AUTH_SALT', 'b6=uR90,+g.egjDNm-*{>X[211_KMS1#pjFf8H:Mm{QeO`Oj|A/+9XX-ug#v[$.7');
define('LOGGED_IN_SALT',   '4nUxh|x$=k+%m+N*}LJchAfENCugbv i|p45HbN%^,R>Xd.^~8Yn<G[%w98|{b|m');
define('NONCE_SALT',       '1?31vrFhHZ]?w;{_ea)A,x@ V9r6mO&|o,X`?HJL+_ID57kx_/D2#GHOfXF58GkP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
