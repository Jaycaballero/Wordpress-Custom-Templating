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
define( 'DB_NAME', 'dbtest' );

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
define( 'AUTH_KEY',         '`6fji@Jj$r{$pPVH_`fEuiOiW&gO`fWy=eTqBz%6M}cvIIra8E[(uJ_+:5nNxE>N' );
define( 'SECURE_AUTH_KEY',  'B|/e%gO8<Gpkv]K.fi$=lGD6xlTX.f%%?}OX7dn=+1hf@9r.8<g=vOU,>dVSn;T.' );
define( 'LOGGED_IN_KEY',    'bwKhA5hd1[DR9fy4~!5vmOQ=:B#5<1eS-S41edLHh@cU=u2@-qn)hMa!5J8tQSBL' );
define( 'NONCE_KEY',        '-DGaz.FRa13ta.4>;o-lF c8-2|i[HhVoGa@VQCo-bV=IvM0A((.7tZu0)+/FZ+N' );
define( 'AUTH_SALT',        '}-4h71r4=>RVnqb!<ce^lQ#<h{|+GMt #{FZTamYXz67/ZK;yiFd19jwq@j,BU@^' );
define( 'SECURE_AUTH_SALT', ']MheKII65D=kDX$Nw7Fw/Y2::K )E# ;?+x4DF]#tajI<-;15V!%Zlb`yH|.i^>d' );
define( 'LOGGED_IN_SALT',   '!hRn8n-nOE)-RLalWv5m_vD6,;iz@j5b:jx)bH5XqUthwoBX3[mC0trk:oJ$T5Ul' );
define( 'NONCE_SALT',       'KA^f^~.M=*AlwPkDk3NAP6v0%uXjh]U+sw(VXXmE%`jtiQsw7-{L)r[w4lcxM|yu' );

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

