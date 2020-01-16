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
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V4m6O)op7|%J3FFaJiJ$oQ+/14c[7b24<-;)*)/3}L(yc|qi__#a^DeEfaupf|Z!');
define('SECURE_AUTH_KEY',  '#9$>ndo~1O+i1etSOJ}Nc0G|n D$5C%6Zal1Jlu8{_P$@:TA,rs/Kk1$5Xz= 8wB');
define('LOGGED_IN_KEY',    '8)1yl~5#4:zKn=_@Y[Tj[xXrGo-@3TO/4!-{&[$3nqCS;ClR{6vFCq|2TiXaS2} ');
define('NONCE_KEY',        'p YjihlxRm|q`sgkACY]K[-2ZtJ7h v#6oG9q2u[6a> oic$EC92^c1`LC<ElV~-');
define('AUTH_SALT',        'wMa:PM+=B5]7YkV[KZ@HXUsgItWPjex=g-[UY3q@x#R<IyU0YZlNnoO5+q=,Os8I');
define('SECURE_AUTH_SALT', '7e<%]-JA$~OmI}BsJE|VJO)QUK-&sM]S(&e L-(g=R47_nTkZ TK,[7g[+ZJSn-=');
define('LOGGED_IN_SALT',   'tq =k?dBJ0PCrB! d_MD||@IH#2Te;WE9NQF!8+@S7xas -22&M3j9{C&i(XxK|+');
define('NONCE_SALT',       'i5Fz{48xcI*A0ixo.}%-m/VUOxq>`P5 = *eKHl^4]+dynb5<,&#S,Y^2.lt8yB5');

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
