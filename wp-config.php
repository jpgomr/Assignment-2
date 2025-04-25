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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Ng%%@kr2B:MyX}RI^?{Y~.Q1{d}87hwZ,]&RR,9jHfo[dHC)j?Zx?&Vf^n!34+@6' );
define( 'SECURE_AUTH_KEY',   '[Gl=M/fs=vq`|G&nNjPK)Sng=iS+aN-DT.`}9rdpp|j&uNCHtjg*42`L^Wg.lGc0' );
define( 'LOGGED_IN_KEY',     'MRqVbsMOra9O*5=BHk5MRwI @+<k$Hxu5@WykZ{fMxAbzhp?Z_0w0l<S#4o@:g3K' );
define( 'NONCE_KEY',         '&Lz/rY*?l?=H}T k}@N;X7,jbd+K3sSa |ap2GGiR|+tgqO:Kiv2&=p])I@)K&e6' );
define( 'AUTH_SALT',         '{U_^[}hr,Ue<p:g|-;Vzg[hm,P]QE4obUqc=Lv0G`>Y^8SYvkho;q>y6JzsIE2;*' );
define( 'SECURE_AUTH_SALT',  '&t-/)$V/Ggb}h<p232Iv=YQ8P6R}+^Z$:pAtv4;mnbKV`+W>elk;v p|4Q|fJ28O' );
define( 'LOGGED_IN_SALT',    '~qZw}YrTSOKCs:ld`& a]cgELvR8SgwTJ1$1ILGlI,mPNa@uHN&un<e5_VTrydIK' );
define( 'NONCE_SALT',        ')uK#,&U^mlgA0Lvfn{AR</=0?A^Ob6-IF.XJu,ClA^{d/c#{z8* )K<~Yh3!KSjl' );
define( 'WP_CACHE_KEY_SALT', '+5YlQ Qreaa+9#f:1iN9d:7xWNYwKsv>uHGm:z<UUP??CrX`)[kW/!:EI0Yaj5n.' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
