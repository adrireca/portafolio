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
define( 'DB_NAME', 'u553684509_fusitec' );

/** Database username */
define( 'DB_USER', 'u553684509_fusitec' );

/** Database password */
define( 'DB_PASSWORD', '$=lBW9~V6w' );

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
define( 'AUTH_KEY',         '~#WjmxTyu<W??puhQ%6c-|ClR$E[NA7I/WBXDqju09sk#okz)9IX)ZY40Pw?$Wjr' );
define( 'SECURE_AUTH_KEY',  'X[[0d6Y4Zcx<:: iO+-0p,x__*ngg}C| a1^?yTH(=tA% .7Tq(91x<Cw=(RBo,7' );
define( 'LOGGED_IN_KEY',    ']-rcY>OxE//+QBX^Gr%17Z$jSyXD*b{<8+.mz*Y.(81bD{jjMs4Ijo-w5g?QacB-' );
define( 'NONCE_KEY',        'a/mu_%&9J(1jKN[2+QZSDwS[}cDJ%YCV( 38zY225^<3euM[$]v9c3M]Mk~TY9R@' );
define( 'AUTH_SALT',        '2#PPBO(4_a*y(y`k2:Iwc XZy~tbUXp4^ ?E*t+YN,-mCInyNR>dSzF1XDea,XN}' );
define( 'SECURE_AUTH_SALT', '[,q}cDQH$K~Up{<s ulyks3|ZwG8I%IAG%u^EAMjlP`*Kq19q-jf`=Ms%)!,q9i3' );
define( 'LOGGED_IN_SALT',   '@a% ~!r)2}DU(f<9SQ X^WV!bO{i]j04U+=h+-BC4Q<}NA]+]#Wv0g5/k/BC1_f`' );
define( 'NONCE_SALT',       'm[j,[+<,||}jXj>2bI,JfQ%FQPJB-W|NlZL@xg|3/k@:!5 -<e+sZH~`7a-:RD9#' );

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



define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
