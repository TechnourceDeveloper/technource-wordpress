<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'technource');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'otED.lY7M#CnBlSklhQr*#jxL!CfajCbJt:tF-GB=?xuI4bvY7%]&s g[8+/9mO(');
define('SECURE_AUTH_KEY',  'M(F}x7I-_qV|`t&i~J&60Of+T~9@GP :&>||Fq0k!A;UQ$PMj7:sQJQrVr6nD3XU');
define('LOGGED_IN_KEY',    '4m&!t3}I%Z{^k3&VZ]oQeIb>*PF/[dr2d!8$)Qz~K7*?A@}0]~8#k/!cCHj Kx+=');
define('NONCE_KEY',        '<m&Dp2>(9:TV@EShq,`&IJlz1d~A(>21;z[VrvKraD+oF)=_q4zrk_+K-N<As*Ee');
define('AUTH_SALT',        'Mq5uHZs!}L%E:JwkZK0K08AyWE73l?Wcydi]$e[NMzUq2;5($@Lhid=3</Lw&2.y');
define('SECURE_AUTH_SALT', 'wI<(nDoR!K*;?w1[9fPF0$dE#S*BR;MV2}Dd:OW~a3>}}jh{xT)3i$$aOP$*pmJj');
define('LOGGED_IN_SALT',   'gHm:s.?:ikc+yK`e8<_Le%Q{Q HIYiTis9$Vpjc~tcj:|uR4R?tSv1I6HN=.%ni?');
define('NONCE_SALT',       't[Lp;1ImnA#n(m8}~jk`.=Vg!o*MEmw~6iIG+(lY4`v,_ayPA7b@BH5ZX.tx#CQP');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
