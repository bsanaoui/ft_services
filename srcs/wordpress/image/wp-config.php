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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xr2<,)Hf$tqUoT?*#O<(,IU.2cJw wOy`duo(Pv%[yIuZ$<lxxPpcbtvHbNoiThB' );
define( 'SECURE_AUTH_KEY',  '-CPCv()>o]%T(,un5[3G6Zu>Pf}zh>:RkeE5_H{=Y@KgtmH@r/pZDs}ZKZy<WaRS' );
define( 'LOGGED_IN_KEY',    'I>68+s|yN- WK~Z//tVGgRDo7[DWu;6=`di4t]z<eTKCO.Kg{#}SzwgtUh2Z Zo.' );
define( 'NONCE_KEY',        '^~o.5`Am_2oSi9Xs5T&aOpx!<rb_ib6t{f|]V@`Hr;q N*&E{wP:Ty9{Nv|6^?{?' );
define( 'AUTH_SALT',        'csIE(;5aaK>z59z#HD^ZgliN ][Yxz=s0=hF6,<EIaHQXSqw1&U1+~O]aLS$7QeH' );
define( 'SECURE_AUTH_SALT', 'op +ZEU!vLy}R7| |NI$KH]R*1Kx+g65Wx[k}_^3NvLM^Mk7nC,{5^(v8z4Y6w@q' );
define( 'LOGGED_IN_SALT',   '<vB%E$}3%lcE9b1;;s3[NuO/g$;wP3BTQMr*V02#)q~G>R7V>A;|?_IExi,Ws=R7' );
define( 'NONCE_SALT',       'ih~Y=AO.%5PqBld#@h=I0yR3|^N52*%9aW@c</:)P/tP(_m0},6thKpDvY9X$a4X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
