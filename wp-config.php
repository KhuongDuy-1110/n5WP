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
define( 'DB_NAME', 'db_wp1' );

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
define( 'AUTH_KEY',         'XBL<:*|=XECwiO&3!e/=XP&~Q,&3j :kLHC4MX%Uh` E5>-QUe;Og<i:>xnbU]%x' );
define( 'SECURE_AUTH_KEY',  ')0x{FqgJ<KA>$&ns%%u0naE.4J;w+),.7S~gA|:)l8uJ@tSNQ/0RT{g+btTOp7C_' );
define( 'LOGGED_IN_KEY',    'bI_:h&*96e @G[hsI?xI*CNXlL/z!|Py;kj85<~v$Ro(?0AA83J4K5%Dyl(z*3QV' );
define( 'NONCE_KEY',        '6?NK6/]hqpeBJ,jmMFS{-u}12.q-|Fyg!f#bnnz8q?ViPP~jFiiU]QR_Y{ia9Fvs' );
define( 'AUTH_SALT',        '7@B:2mfne2*~}F3Yj+|^&|iODp^i2zvNks,`g=;vfr;|NCw3h_vgdHno!7:W$?*j' );
define( 'SECURE_AUTH_SALT', 'd!m10qE zd>2m3wxcNq}URGW<)2df7ucD_mec]Fo!+51s`&)0z]N_:8>l=~c6Q3-' );
define( 'LOGGED_IN_SALT',   '&(>4X=Em1JFi|U+gU&+)+|LVa8!A5;xs9#xZ$1%[0cvI^@RR=b0 =J), /3Zf2$6' );
define( 'NONCE_SALT',       'FSK*mgVl^&}J7%lI-[*p|&L79nW9zKU2]ankDA_eda*1rCT4-hAh,o$ML@4(v,fw' );

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
