<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'university' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'd0k4^n6pYVeIJ9EljisfYd;:d#=D9vg}uGoUq~y1dkIvUppe4~02K^1prP:z@s`!' );
define( 'SECURE_AUTH_KEY',  'R%TU!O{ n{V.WCp/YeD[aHLjrXX ;M{E6$=XfkCda+c[=JD8v0]HK#*&L3{H76:l' );
define( 'LOGGED_IN_KEY',    'G6d,(5D: yM]2^ko_K}T^a4}gMB$.g7b}Qv[IHa[E$?9M35lxGJZC0`qt^!e,APG' );
define( 'NONCE_KEY',        '&6#-zDX#Iuc`/RsR4m^CU2tJM>b>#:BB$Ib/hZsB)L^zk7%`J}i9]x_NzL/t52ML' );
define( 'AUTH_SALT',        'Zk,&):WUSEJ%/s|j/[pX.hcJteI5T6aV9{{P&ot0TPg{EDLypwdlnq?CFVV42#Kv' );
define( 'SECURE_AUTH_SALT', '8(kx(H^tNZY4AuLW(nG6E|-jSDXD=(7-t _Nybo9z@Q%onBu^<0e80%a$(}-n:0{' );
define( 'LOGGED_IN_SALT',   '1#RU@)<e2$Kor?EnO[ AKwKIkd>3p|zp3lU<t]or3)IL#Cg?wV{debOP`N:E,:Jc' );
define( 'NONCE_SALT',       '3w4E%H<6`mu~e@,g|o&vC_x;z~}@cRh]9F]+H?!}DL{XD#`,lrJi`QE=5,E>z|26' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
