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
define( 'DB_NAME', 'agencevoyage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'IDX]^A}~_i3EF1(r[4$(aJrJA?JOrb@6sdjPQM8uLMl|Tbif!qwD ^iBz$Xn$0w^' );
define( 'SECURE_AUTH_KEY',  'kR$(u(s)Pzv;bSR>ks2fQ?b,z740x@,cB=u/%p9N<FR,4.:F56W6{*8U;Odxp0fM' );
define( 'LOGGED_IN_KEY',    '?Pn!b@j`W?~byo#4R^bk:ubN?]3)nPV5tzHK?)FKs0M?,#*;BJ@NSn+Ovh(;#&P;' );
define( 'NONCE_KEY',        '?%MEzGbF|XoS@$M6vPI gy=j0)yL cr4Y#%NqG%xO@XE`iDF{&4BLM]aV=|Hz%hh' );
define( 'AUTH_SALT',        '[sT#c#.jpa^z.4.I86a1MvG}I)zPb9z5HmHP4cfjKN6d70U~s#;kqC$mG.i2N+$(' );
define( 'SECURE_AUTH_SALT', 'wMq#dQUfF yyXX;7H~_08@eN|933Q4a4xyu,I`&4J.%_%1(vov:8B1Q5_`ly>kAu' );
define( 'LOGGED_IN_SALT',   'z)Sxt-|{NmSdQF.Pe`H=l!#m)J6;:j+B~,WL(O5[V/1OQ8#J$B{*sC&JSg&2bw  ' );
define( 'NONCE_SALT',       '^gTjR%B:)wqizQ`!Zmd}3 G)VRhPlW#Up>P3Y8`yHR3-B*U>N14^)%ba1[RIwA~M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'av_';

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
