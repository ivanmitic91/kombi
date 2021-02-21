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
define( 'DB_NAME', 'kombi' );

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
define( 'AUTH_KEY',         ';0NPF K9yGKOuBx(eWkbD_$K1K1yel3jyj^^Of~w#8RM`{SjDYENSO@aYA.0%qqH' );
define( 'SECURE_AUTH_KEY',  '6L2eP6gPvB0dx|XIwkw;!B50[a?M(dSL?y+:! +%oimgVWVy2;}0r*$C~Vfl$Wkx' );
define( 'LOGGED_IN_KEY',    '|XxP&`gRu;$jyrQpWLm^.9=/`%Ao(2hK~!tcHii^!oj5@@LSvtE(*2g9!s-Oj;+i' );
define( 'NONCE_KEY',        'zyC:_&fBF]z8p4qq N<h&:?%,/B#*U^5j(!ih[%FLfHWV$q~+9eycK;#DmzyNRb3' );
define( 'AUTH_SALT',        '$BrAN+X%$J8ZJ=;~G0:aVX*rH+Mj8oGi$55h.`KEIw:M%iB>^4A[Qe@>pGS+c&,.' );
define( 'SECURE_AUTH_SALT', ')60M#sT+AYx9$+Ai~~e0@1Knw#;RBHEU)~kdux!W{N?0CJ%X:u{A!75)Wrnk[eV#' );
define( 'LOGGED_IN_SALT',   '7sErq,K(6j-.Oo8:kxp3o-OR+r05,$<~n*znRWh@{6,WJi,0|0V;Cmywxeu?!2om' );
define( 'NONCE_SALT',       'UoKAp&QQq[=Es$#aWs)5Q~s.*vC]$iB{INQDV^?XS6an~q:,%@QQ$/ABK +V}D5x' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
