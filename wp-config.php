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
define( 'DB_NAME', 'testwordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'L7[IqAFR?sbbEs8VXez:*|HxATgjyo<3GfW$ZtZh`Q1PYLS27Yx0F*K/@Kf9 &<~' );
define( 'SECURE_AUTH_KEY',  'K0`,TpcR/LjzeQ4v/x&eNJQ!:Z!WM0A30eG|Cyoof_3&A%COC=[IE7*%;x$5xMaX' );
define( 'LOGGED_IN_KEY',    '@ raB2KOWr?@-Dx7YM/<(&o$Y&[$]ZlpA6c(IHQ1jJ4_<&>K]^ZyCIv8_ZE@f/c4' );
define( 'NONCE_KEY',        'ZlYyeYrF`lA%#kN~!fIq6s9=|l98_AP9VZ]k<=5?xaW8_L]Z*r8*FQhao:<l8Tg#' );
define( 'AUTH_SALT',        'XAhuvn.phncnA3Hzt7zxB)/Av{-+KzbUX{`q]MH97GfHEH1)mJDj_bl.!&9XmV^P' );
define( 'SECURE_AUTH_SALT', '::H<Okjrks-9?`~Lu_:/]~WfrAo,s:YlJ?a>)q.Jt0A:h*[=M,{7nX0|WXK|qZcd' );
define( 'LOGGED_IN_SALT',   'ZWA4(Ye@q,?BXx(:usv5>M.9*CO=D,n0?FXn!-<h}}SM@<opkzryR:BP[kE-?y9<' );
define( 'NONCE_SALT',       '?f)nU-Q19H%0wUX2=(?r9i~XN&wyEwRu(/ V_.dbC:&NBR<^^oz15*HSnR}H5cN*' );

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
