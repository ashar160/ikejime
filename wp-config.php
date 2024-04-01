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
define( 'DB_NAME', 'u217661308_ikejimequality' );

/** Database username */
define( 'DB_USER', 'u217661308_ikejimequality' );

/** Database password */
define( 'DB_PASSWORD', '|5Mr]^pHf' );

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
define( 'AUTH_KEY',         ' 0mq*Y 6[X/>.8_Ey]>.j5IqS)=EI(/bOPtovnNIV5vU9gO6 w]pfU(?*B,fDJNP' );
define( 'SECURE_AUTH_KEY',  'm]u;iSd:>_5Rnp5%UVF=]WryLdCd?bfTP2|01^*QNTWaiE+M&R*M+p0#x 5^>bcd' );
define( 'LOGGED_IN_KEY',    '`k-r,1e[S^DmupYo]8 ;H1(Kuvnhqr^Wimdr%MZL-7h.3m>p@Dw,76D&cQsiu?yn' );
define( 'NONCE_KEY',        '_x:,vPkN:z:c}AG{b3]~WHf|EFh*UFOOuk@(#2Yl0~(uD3hQt/^,pymh6pP|Q_)8' );
define( 'AUTH_SALT',        'Dq7lt~. )2<j[mC|lJ2+J}~~QA)mZU9^`kZgWNM`Yc+~JrzWs4cPjIyRMUafr.?+' );
define( 'SECURE_AUTH_SALT', '@L)6Rs,~aZTH|JgplME0Q1XUo>~}kF(~E3aDzf%!qPuRqNrQqG/-#g1hD7j c38%' );
define( 'LOGGED_IN_SALT',   'CRp`F),HVpZQsgRuK|Gc&5h=Bd31n)0xNd|$+dqDPC~#qSn5rK{M#<[ ;vZB&w/#' );
define( 'NONCE_SALT',       '>Ya*Zw6!B6kUdgwp4G.76)<^lVpZdeVPBe] S*9waXY?Qz*bJc#F:</&n^yZ==I|' );

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
