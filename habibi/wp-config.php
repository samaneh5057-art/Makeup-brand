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
define( 'DB_NAME', 'habibi' );

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
define( 'AUTH_KEY',         ']c)%@&zmbvTh)&V)V4:-42#hP5V]N?lz%6h^H2I$g@2?}{2o,:di}1gdU8S/ )k[' );
define( 'SECURE_AUTH_KEY',  '#W2weQE-A*Q!xk%tQvplz/k@$I8NZjiC$YNTv)1`iLyvr@a6[O1cBjwtESYl6e,;' );
define( 'LOGGED_IN_KEY',    'ES+GqG`N>a4mr]/^8IfnR7h(qqB )!/;.0F[LRoX7}Xu`P-Y|[Du`*T2(*hJy0o&' );
define( 'NONCE_KEY',        'k7G4:f#W>1-{_Zx9m|G6&>5Ek4DyA~@A[a!x4$|^){zj>5oTe3YM63KX-=dQ.zkb' );
define( 'AUTH_SALT',        ')3`Xyu-n2JQ)(NyMJL$g)J3E7?8O7:9$],d|QG(0SvtZg%&/B6@@m41_D/FDF$}C' );
define( 'SECURE_AUTH_SALT', 'D$GfVYBR|C,sO^duOz=rT)d{aF#v{z-q5Q}s=c#|z|[opSIh@;%m4Z=84w:Csa4>' );
define( 'LOGGED_IN_SALT',   'ow=t(r=YvI,D9BV!ede%PHjdgtG/bfoxV)%^-S=1O{5e*dLlL9Iyx1geUs(Y_8G0' );
define( 'NONCE_SALT',       '3/_k[iG#sY=ccy|ftrS9jvPOR{F*k]mgi}RSl!33Em@C?.5G2(07D:pn^FW4L<sG' );

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
