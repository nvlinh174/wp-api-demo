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
define( 'DB_NAME', 'wp_api_demo' );

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
define( 'AUTH_KEY',         'sp<Dk;Xx~jIU5>rs:/!aaXG6KP@RKM=xVX@HMhy1L84r%*qi^`8Qvs{>HJntPAO1' );
define( 'SECURE_AUTH_KEY',  'h0]Rd3L1LMbcxSIN:()sQZmL*?qR3Zzh.n&.g#T<9|o3z(5Vf.wG2U5bya3anjA@' );
define( 'LOGGED_IN_KEY',    'gTbe(4cNkOZ4Q[n8xZQ^$]~MA;}gBW{9Gh: j4@~SChtI;izBgQ[e*W Jh@Z*m,f' );
define( 'NONCE_KEY',        'fe$6T}RRNn$E)#fVSc?|5&wE_3%;x0;Kf#W4rH^CZH6SD%9]wwook.D*~x%SvUoi' );
define( 'AUTH_SALT',        '_i $sv[kFnyXJF++FrWiy=fNbPD*Kjgw|YN[KL}F^vw4mq5G^a$J2y-GeY49N4T{' );
define( 'SECURE_AUTH_SALT', 'Yx[W}xCgjbA3TWFll ehYRl%i,ewk~(Rh.HnN@JXH]TG[0e#/QQ)~<GEX^cT#OBR' );
define( 'LOGGED_IN_SALT',   'jQza:F2jDu;(m7B<N?V0`|7X6(Xv8ugjfa1b3Dk+$CZA>%9 ) -*,T9y*Si)z<&i' );
define( 'NONCE_SALT',       't;FVs[=c`~WgUJ5Dv8v[&lgs_-DT={q{N/YA3k.Nk+LR)-8H@fV<8kT3Q W5R1Ni' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('JWT_AUTH_SECRET_KEY', '#R=33Fq:9,(=md|0O?=V%G]<hg+i(V3(E|D5rXj1|BfUoK[l:W#Ord++&M^05+2]');
define('JWT_AUTH_CORS_ENABLE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
require_once ABSPATH . 'wp-custom-api.php';
