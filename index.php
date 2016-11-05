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
define('DB_NAME', 'picasso');

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
define('AUTH_KEY',         'b%w/,pP4SSq~7}%`(2zb{h.r-s897{O0Go[M3JY4{/S}k(jX1$FFNnxtrIIHcZG,');
define('SECURE_AUTH_KEY',  'LuI%qa0Azrlzb>IN[/wS0p@^v:zf4nY#Wbn{8-KddW$C%Y]>i(3?UO)F<web+7@4');
define('LOGGED_IN_KEY',    '7)Gk1+}gCM?HwJpWO?J_A[]X3&L$[U>%exeMi^(L$j&obD<1V T{6%a-6u.p&_|.');
define('NONCE_KEY',        'WOWA}@Q>I( J)ceFD*[?.-2Z o@^84%v*aNbvsgc<f[M|Mh|6$.AE:%^?(M%lMKt');
define('AUTH_SALT',        '%>MPS/f2dI0j/v$X wY&qv{0wB*b00+I~?$89or@ufZ V!/{,o?;P8rBzcIXx?8R');
define('SECURE_AUTH_SALT', 'o?4`{`q](M2Nh@!xPO4Vz&sluJgyhan!8RX4q,/s|z_Kg/kNd@nU5;cAT@M}-5s>');
define('LOGGED_IN_SALT',   'j;wA3;$VbA}3-tqHfJuq_L*-+Jfr{8|j3A#J;p{=O-G *uGaljmn0g|}]R98|/c3');
define('NONCE_SALT',       'V{@uN{{BJ(ijs`N0r@O.yc)q^g.D3#&}SuRi+Y`*otsAzz@/?}B~)blzRjc_25nY');

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
