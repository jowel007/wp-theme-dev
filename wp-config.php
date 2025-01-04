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
define( 'DB_NAME', 'wordpress_dev' );

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
define( 'AUTH_KEY',         '4=U2u_23SZPmf4=kM3_$VMW]!sj#y2OW{03Bnm(qJdz;<s8HK9[HJ}$tht`jw#Ax' );
define( 'SECURE_AUTH_KEY',  ';^7|7A_65T@k+/L.$;-}Vz=z1X%G}^si }&c<J:>Gnc?Y$^[hdQEmKWG|*#9<U..' );
define( 'LOGGED_IN_KEY',    '6GXD6xk0&S.J2[{<xo|k]aa(@%YPDFX o+HT(mX 3[kH{c}*[4DhW)=t^4ojVW#A' );
define( 'NONCE_KEY',        'X-&Swtk<U[k#{GYC<]t#O#A65BTf>y(j#Y%/L[^$OMSGSN.UIxQu{WuYorLAIeG,' );
define( 'AUTH_SALT',        '-`YQ7Vp:;S^vR5r/hb.,2K,RN|)j2j6+RXTFn#Bx43{.gBCTs+[+qjFaT;<W3UDV' );
define( 'SECURE_AUTH_SALT', '_&9ZYFM|,HV;v&GI}Xl@C^t<W,J=*ba2`@3mI}9e@d%{IdO1}3yH9O2g.f}lHMuF' );
define( 'LOGGED_IN_SALT',   'L%CL9x:+agr~Oy*[#|)8;$3z_|&|bma7UhLsk?cWKpoeW}:QEh5-vJTS:U )x|)0' );
define( 'NONCE_SALT',       'TM=lT/$Gjc6S^Ywl^PK7lg(7,)3|::8Sz4[h;j-RNqx],qh~]?R4XOiapcTh3P<,' );

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
