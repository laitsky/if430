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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'd>+yTL-.z_!o8xx]s5*94dr`+:*w_)mxF ,VIwDUizSA:Jb?NYt*Zo62@Jowh-P]' );
define( 'SECURE_AUTH_KEY',  '!P5DXu~nD05jy1#>s})~Xa53(y2YP{b>+PQ7/AY?[YE~468~mKJ}D<uPjMs0Oi46' );
define( 'LOGGED_IN_KEY',    '@~ /<Bif6`jt*G-&Mk[C7L(;/0YWQ6B8qaad{eD1/#[<wXkuDhtPq&x6q{]YYKk ' );
define( 'NONCE_KEY',        '&?sG0_hBRJL0zAG=kX<3AX}(7iQsc7@OMnyB]k<{lfAH#$4SRmN}Lthw6E%z[9j%' );
define( 'AUTH_SALT',        '?=8VHMuI&N@VLB1w[b%DwXy~}T6T9uv86jnXnD7yE=Pa.hzAAbRHVgxoO{UWqa (' );
define( 'SECURE_AUTH_SALT', 'Ix1[duc}Dm?I*Pj4p|#KR=?<b54*<LKI5] KrSn4fXW<ojI#mD<j1?T*6m^B+G}M' );
define( 'LOGGED_IN_SALT',   'jk23)wipnfE;G|68$A`OBs@=m],#D,&A_%lX]Z9 ,,8W3()+8FFRQC4z|T,)$Vv,' );
define( 'NONCE_SALT',       '9#G9bXNBv;`CmFc<io{0-r{3Zh(t50KRi|g<tDqEsk(l@]rB;A/sG7&qdvBsmeQ%' );

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
