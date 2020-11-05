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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysqldb' );

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
define( 'AUTH_KEY',         '_,+-D&Db`#lo{gio%FWD.(CcXcx4LsQI,|t$]QnoX`1}8Ptc%{ArfM =!u@lJ0)c' );
define( 'SECURE_AUTH_KEY',  '7u54t|(Vi5w0)$[r4Sq5Yv,E)+j;MIko~h)vZy=MgUUeh+CBGAM/)%P5U$Vv%`1u' );
define( 'LOGGED_IN_KEY',    'oJoK,.es~:%$c[]t50Tw(tSy$(uo~v)B](1rvmUpsXeJucKWSj(&/a.VMQ+h%kI`' );
define( 'NONCE_KEY',        '@C]&TfhRRO&|#FFLh@B&rHa<vd|SAY&HvSZ}n<d/rZCE-7uQWpq!4z-n!;VeQGvx' );
define( 'AUTH_SALT',        'sH,bld=>=rh9.Uh/-D@RZe-<JxKB_S&6nzw<jt9Djs>0xvWsqg`9yb|H.40Oh4dN' );
define( 'SECURE_AUTH_SALT', '3/%;78s8Cj&k%S*YdfzFji:9P04*63BX`*N~ gCq?e^S(lUaZ:Nek6,*9tgf$f8H' );
define( 'LOGGED_IN_SALT',   '=(@vp3LP2k3I0mB><]Ur;C:$Y#Je5!-?93utJvx>hIT]>PmU[o]`fzHtTL[{}^&;' );
define( 'NONCE_SALT',       'qZ*auqtb3PAsRJ={tl@$84k/p X]t#_B;j}d7Ma0w_$u!mQ)%Xo1@~AHtqI+CgH)' );

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
