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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'gbBnSAz*tDasGk2B60#lugqRZemh?MA$:z#Gz;@[Awsx^ZAfy~O9m4@Y8v=NiV]O' );
define( 'SECURE_AUTH_KEY',  'Q6 p>Ln%S5vw=[MJ<V;V(4Vi;G@F`amBwD:h|lo+s(5_A]b5{y62[|&HcNA}qI][' );
define( 'LOGGED_IN_KEY',    '$Cb%Ge~_)726HY Pn)6c>Av/{t(757g]=vLd!<Ic.nv,l-8pGj~qQo$8gUYh2Z?R' );
define( 'NONCE_KEY',        ')65>O@dj45lyda[OI|h$,/qBRHagx{Q]=P_%k`7SsS>uHL3b9WH^rW1.){8]P()u' );
define( 'AUTH_SALT',        '${[8*:a MWG!R$iy6c4n;*$AEeHr])_(..i0MQY>Grz*RAzGzKl/4]C.UFycoMNF' );
define( 'SECURE_AUTH_SALT', '(3),/{YN]^hyU3< FOW!d1^cf408me,Bh>_$L@6c2]rrwa~<).[n8^^E%CoK_R{_' );
define( 'LOGGED_IN_SALT',   'NT+/N(cKm hjr#Syq;ilX^/95>HYQT-{HAd#UH6nu2n>%SR4bsiX%SvJ12iGBP3O' );
define( 'NONCE_SALT',       '8FI9O^Cgd(X&7ynT1 YeLQ->2=%A`.%8y)?Qvqi35]%%D>#|;>*8TK3tGBR7pI!Z' );

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
