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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shivi-blog' );

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
define( 'AUTH_KEY',         'rD%)[<u]@l!kV#9%B*KM(u#UPi[75G $:?I@)j29IH[8A_5t_g7.!,u9Xt!Ft@%@' );
define( 'SECURE_AUTH_KEY',  'F=g4=!6nY*qqC/;^Z;YqlIoZrgyI?,M9+P*Po0t;u:BuI >j{PeK0_xM-3^p[C*8' );
define( 'LOGGED_IN_KEY',    'D6gPxTqGS2A>qiurBA^8=5MSyu.FF+q]?P6RM q_,1:]Wy/: %2x#q{:,hxa=vp=' );
define( 'NONCE_KEY',        'oX!oz1e&qZTgFT&l5M{y+A~PtHA.FF@~ Ax=7K;{k(u3jo)=@4 UUNkA5K=`^j0q' );
define( 'AUTH_SALT',        '@ [~6{2P9pk<PU;9EhFM6tP462kTq:3j_boPDD?|7 98<.@vkiZ4etngH#TMt;uw' );
define( 'SECURE_AUTH_SALT', '70|2a)bViP@hy!3<b,n^T7`0:PQ7oesIr@2*<I(%B5lm:;yvp)BKnYS=q1FHRY^/' );
define( 'LOGGED_IN_SALT',   '+uqI{PH*&,WR^]Bxq92iSI@)I.y7v+pr}dH{;k@(nl8abjPD.{0iq(6CSC%=)eMd' );
define( 'NONCE_SALT',       'yrEB}9@FAVz^<4u$Sw[|s(SCJa|h/1bTqR@tr5UM=Pk;s+&8rt_6=_7,@A12sv.y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
