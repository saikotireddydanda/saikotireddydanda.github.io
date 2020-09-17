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
define( 'DB_NAME', 'web_db' );

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
define( 'AUTH_KEY',         'S*D3>8{u5B{(c;9h5;f~p}~UiO +W;y+S4x}?K%<[WmUSH-ACz6v8xhOVGYvQ;tx' );
define( 'SECURE_AUTH_KEY',  '353<[Qm]B(?.odaXv1aZ=2p_>VV~,z*`3<tzvyeTgw7mZS{RPK0l0~59;ej0>[Tk' );
define( 'LOGGED_IN_KEY',    'zJ#QZvEQ!^`E0Y225#oV,Q6;x Y?wS?##6!ldtlQ@`+~ZK,^T*AVF:Qy dKL&7Is' );
define( 'NONCE_KEY',        'q,a^Ep}L _.@7}@oeWc%H1X$`hk#87@kPu3U525?r0U]$Q^pA}&h26_OOk?u:^93' );
define( 'AUTH_SALT',        'XmmGxC.g &R5,L3n:db`?rTcM~G+pTPbDL[H8H%sM7#_C_+{n6_;+D0s_{#qeZNu' );
define( 'SECURE_AUTH_SALT', 'S7,Har+xmDWE<>P~&LJ9V063I5rX<`<* @bE[&fSRnUi-U.vnt=L-$uTE0@AU{Ca' );
define( 'LOGGED_IN_SALT',   '|xUzHmQfxmcQf:dc~BZyH|Y2)_0}D3rL!AEBm5m#$0Rk-OB4zv}fwz?nRt7)zI4j' );
define( 'NONCE_SALT',       'l9(<LV{ysgLBQ},7`^dw78.fV9I{nO$JCm^>t{G}~+S-9t<b:Wt0~I^ugp5Xidt~' );

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
