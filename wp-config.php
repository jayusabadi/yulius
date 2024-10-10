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
define( 'DB_NAME', 'jayus' );

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
define( 'AUTH_KEY',         ')=_Gr2(={r&&Ae~cH1t-mc +O[;b{PFwk!  }0m|}!nhf-*I|A8kRLyS3ChXU?!k' );
define( 'SECURE_AUTH_KEY',  'P5>dKj*=UZ6;JkgYq[i;e&~5RZKoPb(q(owO$v$SJf9%7g$jQ*U#Af_L09eF!fop' );
define( 'LOGGED_IN_KEY',    '<*aE7ye,cLT~GEp<H4U(ohXzy s<N+ggUZS+3w8VIXTw6PoI9siL9Z%YLa[09$uf' );
define( 'NONCE_KEY',        '/0*gxxkrd73fXGQx]&;b966)4If|!?N+t/Dz}YKP<*|VqR!i#XOWJIRtt``@Sq/ ' );
define( 'AUTH_SALT',        '-=^G~rk^]&XC%][XVBrdjxjE`Q;+fDVtMp]/HbQ+K{$Hx@1M`Z(wdwh*0{v>FZ2;' );
define( 'SECURE_AUTH_SALT', '-S{2euXxKL!49CDZILv1T; wkm_yf<CnSSDlyT7OG@c2c~`aH=HXB1{Bm9e^5X>e' );
define( 'LOGGED_IN_SALT',   '-w.vhXHBimB)].v-p4pB#0h^Qj;a? Buab}hFYH$jY,VYe:&2 &2ee&D,_5`C/(6' );
define( 'NONCE_SALT',       'ut|g#+SKkWrmFR:s-Dn[k&67z??_)i|J[_u#AF.9{Nd.[4vRC_1aBN-%MLlUcq}%' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
