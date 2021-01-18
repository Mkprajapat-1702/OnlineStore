<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onlinestore_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hykc8dn!?~P^s5z*<OC/V}u;wRcI0o,UIo1s}aw@9OKm6>Xn6-tIkk.^;{DAtlKb' );
define( 'SECURE_AUTH_KEY',  'sN4>LZyE,RO.@Ecz:^a*.;@OvOAY%;9we/-jvjtJ},wCf*b!4|C[x7g$1~rjY)L]' );
define( 'LOGGED_IN_KEY',    'H6UdDH*6M=$/v}In~p>KXY+v^-qRH8*%~a%:lM>.pUoRK9=@d:#[C]!cPk%{T2N ' );
define( 'NONCE_KEY',        'ibK<`r|;1@SW)YYfj.Z8}tg62#$!1!%I(=bc#7_IK]Beh)Rq$7ZXwl4tVDXi{:R$' );
define( 'AUTH_SALT',        'i#RDPd LjZq&p7j``)@=5l?TAq&05z(vM0_wY>@j:.R=E}@a]?VUl?IJm/ll|7@/' );
define( 'SECURE_AUTH_SALT', '6^]h671&BA~6krQ{&A9UfO%;qy9P {pOrJps.s&Dau<v7fq/`7^]@7P<p[w2h1E+' );
define( 'LOGGED_IN_SALT',   'A<kk`e{3Rp[ybr4aUmvd}HZAmNVxS%^7V]&cqvU,E[qoB!<E+c6}pHw-F~=aPr Q' );
define( 'NONCE_SALT',       'A_0,tSqGpRfCs/+$%5B=rF$:Yh.fW2h#P17<H7SCZg=31|#y/wy, KGic5Jp1_ r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
