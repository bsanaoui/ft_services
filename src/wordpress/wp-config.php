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
define( 'AUTH_KEY',         '6TH ~<{1C+n4<k5I*&V!=4nWd6to+wMP@-HzEN5F6tq/Fq,x$u(BeIgcUN/Ff7LR' );
define( 'SECURE_AUTH_KEY',  'zW,@K2[SphU.h;O*k/?*msr6#&G-Jl,p%-F>&hI_EsS`R{59mXbL<q pVwz=+{[!' );
define( 'LOGGED_IN_KEY',    'GI0j_r0e()8CRx9X/V);B5^.dse?w>4m`OMHP22[.ywh1p$]p89u6JKT|LUJjQ5m' );
define( 'NONCE_KEY',        '!F<9lw(_tClBlMU)&&8bQ6?zp:6yD%y@0@=O&YOL+s[FPsC&7Q!@*{%sSIr(@EbC' );
define( 'AUTH_SALT',        '!Ub?VbKnUo;;f;zT_;r:x;5hX,vl3N[KtWOnEJ~>2#=PX``fPCLKL=*nqgZJ-i?P' );
define( 'SECURE_AUTH_SALT', '&CT2BpQi^Lk>FOQ/^;E3=ozC2PW~^|AQUSx4f%uw?k=bZJ0bcw>WDyYHsU9<:Zux' );
define( 'LOGGED_IN_SALT',   '{UamTQozH`1o!(gugO(M3 #:FlY_;*^]t}niy4;}L1)Iv=/hGw!g-9]d/{vF.]/U' );
define( 'NONCE_SALT',       ',$QRvVNj^y$B6L7fZ:7LZ&8ie0RBOm&14~eDu{x}dWw9I,`O$t^V;mP=MNfixiBl' );

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
