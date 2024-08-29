<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'nyzana_db' );
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
define( 'AUTH_KEY',         't:m>;-JQU47]X$=*C};)&nDU3BVGOTyu:5JCe*): aUi`M[4dny4*Llp#e/lJ:X5' );
define( 'SECURE_AUTH_KEY',  '4KxJad@,Db8=n<w&:(^[2`sTimW)v+7mDRd-+I~Ckrwl$0{dJ<q3M]);UgB|AMzd' );
define( 'LOGGED_IN_KEY',    '>[1yFhO`w@w6@m0xu#n3mDGC*cda}NwVX8(9UW4cpg3.GsOfck>s4sDPjhZip^kc' );
define( 'NONCE_KEY',        'Y[{p Q}WMyu5fdmMEYt~n.S+Za[y bf(b~+FaQEmI>m]Zf)]Be6]d!&RhbbrKBN,' );
define( 'AUTH_SALT',        'IyYkVG_)kvOGp pNYBb2o*Yj$k%q.])M2 =+[BZBy$xt2S@qHxiB?kRe$*,ppZ<)' );
define( 'SECURE_AUTH_SALT', 'I>$9=1fkmO3;|#1A#!5)(M(J+j$?3gB+IkFJ?:==&B{FEYb,74lwe&|Op.Mn@+#D' );
define( 'LOGGED_IN_SALT',   'MV^^OwgqHP:GOW7}d~lO38?pFzY>1O3;J;= #V*($#17r.}$j6HXT)@{5muK(57+' );
define( 'NONCE_SALT',       'D&s,0ld:TP&IlCld_LO+lJI5xopMei-XKu]E[[Zrm~w,qic`[.F&L&;zpsD]yc6>' );
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