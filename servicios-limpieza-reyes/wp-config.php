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
define( 'DB_NAME', 'u553684509_limpieza_reyes' );

/** Database username */
define( 'DB_USER', 'u553684509_limpieza_reyes' );

/** Database password */
define( 'DB_PASSWORD', '#5[ycs=6FEu' );

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
define( 'AUTH_KEY',         '7g^-rE}=YlhRd|rgtZSVHgpvpYZ/8g(n&W9*v&+oIl?;^1!Hi.d@d%DzoI`Kee^6' );
define( 'SECURE_AUTH_KEY',  'w10YCvr_*o&WndQ47A!}PP>y3nR07&Z`p1l+*rtA.qTs6AHzh%oNo^l?$~J#3M^R' );
define( 'LOGGED_IN_KEY',    'L7/wnTE#CS>*6q(0h4D^ rRZR{EaRVqvpPWm5fL4$x|;lko(ZM_00Ux_[Bv(HTwi' );
define( 'NONCE_KEY',        'OBn9ebwHHz,KVrbKc!BY+e|R[2dKVifau=M;)2jCdob$_9!,3bS6(n}v*5rL 9^M' );
define( 'AUTH_SALT',        'vUzWAr,OW]]~%sv!R2zkN,dGTOiC[<l5EPFf:m0NK%S+D!w<q=_aKd`-]bRx|LEZ' );
define( 'SECURE_AUTH_SALT', '`r#v6%SC#jyOJdHO1^n(C6i;1p,#:c>b&?&4BQ?8<.lnAWqo2slg!H7xnwWDGGx5' );
define( 'LOGGED_IN_SALT',   'E Q}NACxubsyIp9AwV{fP)e0V>:Do6;>5jo/[qZ!P`Bm43Ws=_Jnq_WoV}5_lm)r' );
define( 'NONCE_SALT',       'DnfT_k%c)<KD@(F)}.:A] |r(vU-@ebJY`)<[rD4o/^MtU{j2AfRbO4?*~vC_Sl1' );

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
