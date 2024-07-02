<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|zr6/MBN9#njP=+neJ](%gXb*T4Bf8cv4b)e=[v-2}k|Kr=J#aK@5v7@d.^hrC~~' );
define( 'SECURE_AUTH_KEY',  'z7$8tzb%Pj`5z`8d{XL0T&z~rkFK e1Nk;5@_V[Z]CQ7%~i!MrG,WT]j%P}fx)Si' );
define( 'LOGGED_IN_KEY',    'uYzN=sS9aF;TlM:VtgsojkJisLyW)Nd;*Zo^M8@ jp[mnFU5%LGdxV`N-60eS1`]' );
define( 'NONCE_KEY',        '}lhFScS-?{[W d;icBwRMv^%ou>TH(vx!O-9Ju+0Y;7lo~+4.dzXvw2kXkLh^X7?' );
define( 'AUTH_SALT',        ';iG*>6)Y]_svo0%4`W=Z}|hV]#|bve%[ZL6oBW8z4mEnF6FXI&AWUHr@8Q/n/DSu' );
define( 'SECURE_AUTH_SALT', 'YXcXT>m&!|I4- *zxiLteZL}$s_f5hvCLB.?r@MSn4rdi;B& wHfd&2|:4s0zj{X' );
define( 'LOGGED_IN_SALT',   'R@f8vRB=Z(?LXb+YWZ:QmXex&R@#zM>)bN8wu^wYB@0<M[P.s)k~L8n%<)|G}I>p' );
define( 'NONCE_SALT',       '!XPqU}#kI3CDkZLZL%xm5AH%Y<5e|<`8U|d<L^<sVpew|t0V,C4NCg.2?$syH&lt' );

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
