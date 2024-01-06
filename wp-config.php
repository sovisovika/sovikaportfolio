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
define( 'DB_NAME', 'sovikaportfolio' );

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
define( 'AUTH_KEY',         '6:{zP6yNP#?{HFv376m;IJc/a$)/RaEAigg^M:t_8t!FPT82O;IF^m1eBJE2fa}p' );
define( 'SECURE_AUTH_KEY',  '<&Fby!Z` &P!+jWCB~R%#Rg?4)mn.*(vPvVn$E{bmRBd_O?y$Df0L$(/t.n()/h`' );
define( 'LOGGED_IN_KEY',    '^y&)NW;MkObw4kn522y+<`%rEqBzortFHh%},Z*MLj#09[X-%umv0kGv9LuS.Px@' );
define( 'NONCE_KEY',        'VQG5AiE>.*V6?AZPmxg@ynKCjrS&fIOl[i`88Ijedvx]n-!O?-|?CEE9va,$J/J*' );
define( 'AUTH_SALT',        'Nh0W7~wxVp[$0W9=t8z  63>myT1,&I?Uv$rUS#F)Jq-%rY:D9p;@1~PRG~ZB6FT' );
define( 'SECURE_AUTH_SALT', '4XH;i! }{;NKbmBCk:u1tZ4,Ll7&|${|05mC2|}LF_UTIoOQ2Z6xTXA4NR|-H@7B' );
define( 'LOGGED_IN_SALT',   '+s]#Ik.o_Z0.0iyOjLt+esPCBBw{hmg2j6[&nR<3/F-`{U^$sjFY+j9@k,%x>dHx' );
define( 'NONCE_SALT',       'gFB5*oD+T5hjbyl p0!7LS%#ppF2a`J/_DHG2HIxj*W<li34$=Z%l.#B85)<+ht*' );

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
