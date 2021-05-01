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
define( 'AUTH_KEY',         'w:~2&rs)Gn?zt2D&r (m5>#YsMM<p=H0#Rs.,&dlgBcajAe <$GAKa/9yz&?pKM%' );
define( 'SECURE_AUTH_KEY',  'ogj32Mpjh|8h2v7BG!K9 soh?xPeJ)FJWFuxl`=Yh8$2RgB`)ZF/,ez##!$Y--1|' );
define( 'LOGGED_IN_KEY',    'ZWT++}[sHo5nQmTx,;Gdh@G8)I&k*q,n0]3.4sK) C_vO@d,x$!WQv+|!32?$KKV' );
define( 'NONCE_KEY',        '!IRxZ1w:ZiICO.p()cbA[BLTy^jBlLBmv{:3^N) 0!Eq]4 GSOn|2h8deaZ~UOg:' );
define( 'AUTH_SALT',        'B}Yp3GWpuz}`ea:[J1>vWs^F+Mxi6jMzy$Q!.W@RbB$iiAkx~&F,CUoU:j@H2781' );
define( 'SECURE_AUTH_SALT', '!ZqPXcbBl[8XSw{(F~u<rSy Gn!;ckX6S8SRm~*w9ffD}Z9:3JU<o{gwk<|0}O3E' );
define( 'LOGGED_IN_SALT',   '668)Ysp:Q>,mHX?^bq u2|nDUK>vRlX76oeU0YKu:^X5?)i@W?6WKlp,K^W,|.!w' );
define( 'NONCE_SALT',       '&g63eI9!rq`([][~E&$MYC/G{D,s*rIShymI^LG{,C%)HA_5G1RjCeh3:D5c28Y:' );

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
