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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_6x' );

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
define( 'AUTH_KEY',         'o-Da,rT[E~U.KiHQG.v2u!pbwSEOok#KLj3^<YPg2o4]X=&/`?X?2Kk&Z!m`u>S/' );
define( 'SECURE_AUTH_KEY',  '=X<9awnbmgBmy~`,H*p3Yyy(!C;p{r97?5Wdu}e%)9gL4F0MBim=Nw-qeQQNSykq' );
define( 'LOGGED_IN_KEY',    'F=Iz#Sjj !.1_,*^KfZ%gj=*,qm6>zW+k`M/KnzZ2es+MHfYh ostH+rMC5`#Q!<' );
define( 'NONCE_KEY',        '!#+4#K+?dpG3.CTW&-EI`J(3DE]in*q&bqVSaxui%.^Zs^M0C7VJ3Dujx1)kQEr9' );
define( 'AUTH_SALT',        ' ]kXxQ$B*F2.axmcZx&uKDuX3D2Yjd[xco7r*uH_4e9GSl(pS>73qX_6L%i~&Sp ' );
define( 'SECURE_AUTH_SALT', '%?ZTb4:Oy,ELea(* }rBcY;U1<g7J&2zax}6x][<~zi^>`]TX$GeW/e<_nk4gHD+' );
define( 'LOGGED_IN_SALT',   'n|c Yhb2.dY(6D}JHcE|(5:uJ[i)>e:d--36-K.w,S%H&w=!#hXM1KhY!7f^rXrC' );
define( 'NONCE_SALT',       'Y!3inhnV4JdD?:?m|B`hJ,+nT{e67#DdwTH9?p-5C;Bfp>s1Qhao%VAbr:dtB.x]' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
