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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '%nbzbFN4},W^ukw4EF8eh]c6|B*4pJY4n[gs>g*Y_qst,6IO/PR4<xC!Om`Uzl!}' );
define( 'SECURE_AUTH_KEY',  'EP/wKt`sO_UAF]R7uWw)muF(m<qbP@<s9|,A,{Wi;Khnb(J1,gx8tMs|j(odmpc`' );
define( 'LOGGED_IN_KEY',    ',fYo+:t!]36gV-3vB%9]U8kHH2GU0>!4QHlpuklove:y8O5#kn<cfnm3d^oe((8&' );
define( 'NONCE_KEY',        '1F~}XU3SH-9JNX6JI{sE|ZX]6K.C.Yl,(I6jPHQbWyXXySn5IPh=AEXsP$en|Lj=' );
define( 'AUTH_SALT',        'p/m:>3Dk4u3c*9T&nXz.&6I9;zxBz39{_=4sVF%n_W;S,]HhVwqo%,vJ[$J]R@:;' );
define( 'SECURE_AUTH_SALT', 'xl3d;L~FzoTE]lF4WZag~i[*=qKh0B,=jJS,mNvTmNcHVL56##[eT#Ac`foukU~I' );
define( 'LOGGED_IN_SALT',   '_y6 R>;7Fm?[9P=u1dwZ~I~RK^9JTM;$Vk,<CV$icFB&-oEb3O-w/Ef.U{Y*B]q+' );
define( 'NONCE_SALT',       'V^uASnL0Ji)<P8!#wR}+6xM_K*|<%;T L-:yoU}[U(&Q:bKm:?dEU8=h,rhjQ}YI' );

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
