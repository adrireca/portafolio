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
define( 'DB_NAME', 'u553684509_sonia_estilist' );

/** Database username */
define( 'DB_USER', 'u553684509_sonia_estilist' );

/** Database password */
define( 'DB_PASSWORD', '*sGThCh:h0W5' );

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
define( 'AUTH_KEY',         'bmpl,9{+Imwc7dBtwAk9G.n7qzE%<kftQ0R_2+6PEAkh02e8#!QXvx>7lrNkpVcX' );
define( 'SECURE_AUTH_KEY',  'rhG&w>0~_l~mG0Zsx+:D,Q,FmA`{PCKir,QT{|jvk6A3Yk%KFK U$.]D:uZh.obi' );
define( 'LOGGED_IN_KEY',    'eOr6jm8#]O6hPM?S^=[jp6T1}(_in&O&jV|Z-o;GzcvN|`%g)N:tX]v^@?CW<pfy' );
define( 'NONCE_KEY',        '%^4,s@s%Bd!`ojkd(<?I^jTJ/_a8Jg)iNb>xx291a,v.2fM*`.%g#?h=O)L}N3y<' );
define( 'AUTH_SALT',        '*{4$92/cj2Gil)w222Y&^@^W;hkP@}ojN95xH.m_51lv[m$Oo-:0e>`@N2>cY%U5' );
define( 'SECURE_AUTH_SALT', '<8&_+uq]WJXCrR15h&0BXtp(vVOb%m^lFV#184DkHXP/,eyNE(1Z5KDd0|K8[lNC' );
define( 'LOGGED_IN_SALT',   'v}{tS0^B}HoIZvi~axf4 =$W<:I:>BZgzxarGQ|/Z;FLi>j)3&$)[!LmKEE8EY16' );
define( 'NONCE_SALT',       'bE+%nCy`ZAzD31S1YkcTQnfgi]!95m4L~U3EM&0C|ewV/0X4{&`Gx[#B#xK{Is7C' );

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
