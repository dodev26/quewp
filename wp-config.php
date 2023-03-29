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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'que' );

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
define( 'AUTH_KEY',         'U/F):K:~2)KtOWDVq?!#]D-ak/k+z=cN<mct2??,n:w/X-B05/B|3;,rpyT^s&?>' );
define( 'SECURE_AUTH_KEY',  'K3(AkHtHEHo:91+~%;{?!U(/7wM8biJOn*fQ_K7d!m0t&]Hd@P/D>3ARx]$I<ec(' );
define( 'LOGGED_IN_KEY',    '+Gc>keFqg)2o2|<O.-*orAU:C[a*n39wLEEU++5M]<OFUCxUh,mL{bB1m95wzeSh' );
define( 'NONCE_KEY',        'zsF7.Y8[T8&usw}aGzz.z.jK+qR^_gspe^U$8U+5b4j0JGR*&:CE:Mo_jQT>l>9Z' );
define( 'AUTH_SALT',        '`_jKd^WpjBuU=9plki1lNl-Ot?<Ubre(Lv9MoMrzHD!)V`_(9#$}0|09:iB~s9]b' );
define( 'SECURE_AUTH_SALT', '*K,,8Gd -{eu&F`1EWe@WE2v/7l3IpG&u;)TWz8Yn38fbj+9mu)e+%PslHU9E*h$' );
define( 'LOGGED_IN_SALT',   '`,w%e@=Pu+T(!}PpRBaiOl(82c[VpdV]E:t19$=$N>-$~ePi7B->^O/2OqSd#|(Y' );
define( 'NONCE_SALT',       '$yC&/J/IB}-6#-H(:]c:$l|Cx*|<1`^@Fow!*4/Pi(f*;2+F6g6v!$?2&0!qJJyl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
