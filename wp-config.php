<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brainyacademy_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'EAII3_Kb3S1o(7gf' );

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
define( 'AUTH_KEY',         '$#z4>#5RQ)P09YAA2+BmoUlK6,DR7o :3:b}HG[^&PO<1n|>ks0M@YrpS;MmL3sL' );
define( 'SECURE_AUTH_KEY',  '05!D#9q>5c]LalB*@4g_,okD&n@yD_qRbt=XaTrie~g*bSpGu$I-!yrnY!@Az`Gh' );
define( 'LOGGED_IN_KEY',    'Z@ZjUeJ,%$2uRiKovtOZKVEc.]]jAL{rx&S9V/?@<SzT]::S6nWb|z1Y4]Vy]`jr' );
define( 'NONCE_KEY',        'U={/CIl:?s!~C3@fk|Q2H-UQ3ta^P?L_tjxaA>kk`?_<22U0A*4e( K-YmA_w|xS' );
define( 'AUTH_SALT',        '[x2wz/z+OX>/LXFso7&B91IO28^[i,xjS=IlM/pZ@&t;i:/53h.I<)9THwutb(!^' );
define( 'SECURE_AUTH_SALT', 'yB!kM_8UuwE*#MV0* +UO|<Y|swFPgfC5NnWYy3FIf8w+,lT@4/QH*o1+5BNJEwJ' );
define( 'LOGGED_IN_SALT',   ' -uS=r-c::ISG`<^^DfG72R1MdOO_cR3`d=@@$|]nY}..JhGS3X;_zh=W_{-< i@' );
define( 'NONCE_SALT',       '>yp[X@mc^k.p^}<~r>~XV]zHyDQ0HsKVDyf&y4(dfqa:!Vl1R!p>>cf6`%iuiHc+' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
