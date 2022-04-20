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
define( 'DB_NAME', 'cartgeek' );

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
define( 'AUTH_KEY',         'w2NE;3+Jv#wN.A56[S!(>`2b?4DV0%h!~PPNf_Io/$T{0h-x!rph=t*>fzbWUJga' );
define( 'SECURE_AUTH_KEY',  'Ga7.arr)*meg`MH`=+H1CJKIXWV[7d#&kN -$r,[NWTGVaN |rc6x8~MK]Pfv8|*' );
define( 'LOGGED_IN_KEY',    '6@1Kp5z]x#$%E3xvogZI(>2ffS}4<qx+S%%s,^!WfKbtx+@Pw.!ed&|2fwY0(4>1' );
define( 'NONCE_KEY',        ']>$,2E$`*Q!)|uu]L$@(QG,3HV[kD:?h5PCEZhS%5D?~[i[*tVK@V73bmQ]i2JDA' );
define( 'AUTH_SALT',        '!bn07`39&K1HQ{Ai9[?:({hi qG/8}wtrAy-}c4~=Qy5LA#?O5t9{;LO&d3n/kw8' );
define( 'SECURE_AUTH_SALT', 'sPa|pbj@%[_cSo@~Mt^ymPfqR7]s}C91S$,gf+TwkJ)yd,5DhT}$t%3Mc`6FS8q{' );
define( 'LOGGED_IN_SALT',   '~jb[YGgb_ns+7Xb=!Uu |Hfua)-Opkjt0)l?rP7cqDqbmShv!~$Vv kN1.kHkL{3' );
define( 'NONCE_SALT',       'X0/h-N`WM/aK<E1|$ml<%j#^7db]9WEiQ<=*5Q=F`Z}gWZ|q>Wceu:GQ65]}UK>,' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
