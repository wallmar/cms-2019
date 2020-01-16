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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '|9{h|XIl3LV7{1Xg+NE+@}GGf$KYZ]CJ7(UV[M Y,(xu%&VdZ#8sj9N)P[2NN^[x' );
define( 'SECURE_AUTH_KEY',  'O8,g#0I+_1~H.Mcjpd6dO+8(H7;R?w:rWbhwtO7;g%e,CH2OWme0!e28gMGa#m%h' );
define( 'LOGGED_IN_KEY',    'Smp1L7&(=jRQ+-a[[*e7qW l8:(;:X3;ufpb5>PPla^(8#fZ3iJksi>k0&==oMQs' );
define( 'NONCE_KEY',        'jnJ%f+EGDPA/*~UD:/kCn;*^Ttd7;g,}!1{GrgY6It=th43_*u5{IQ=.>PPj6_PL' );
define( 'AUTH_SALT',        'EJ95%f6LwnHP.qR1=;[bBF ~.BS)a-`#.NA6>f8S^xcE/ `@dq)Z%}Kc/l?r]U*3' );
define( 'SECURE_AUTH_SALT', '_Oc[m}nqv>FO)D+f~fx1Qr:d0J7Cid`SoFhy68un+dlEZ;$L=Q+D%AXsU6*>>]7|' );
define( 'LOGGED_IN_SALT',   'reBUjm|*`_YC>e@dV,tyocUl=7$SFhSzJiR7`m?w_82 7$hVz!ga^WwS*<S0#^+(' );
define( 'NONCE_SALT',       '1#<XhU>WR} rjyCt!|_-k=w-vwPuKPxL&kj~7 G-tK3lP45.vQ#VwIki)!.:hMf_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
