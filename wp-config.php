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
define( 'DB_NAME', 'ThePackCloth' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[D#7Vnlnw:g/6:*3Ya#Y!aoICPbl/<ozdj3F,oB%HaO>z%Grn^@rd7s?Zo_A>=`e' );
define( 'SECURE_AUTH_KEY',  'V1}@|+LD)RV~S?xj$M!rAN(m LcA84G-^^Y_&&$*c}!MwMB@_=T-;n5!CGW^htRs' );
define( 'LOGGED_IN_KEY',    'AltQNP8uJNGYR$E+&MNV9vIFtq 3_&NxR$-$$ujQH_&W 6;.dHG[Uz~|Y1u]sqC-' );
define( 'NONCE_KEY',        'L`_? i:Ai,A=!yb~v9E]z)[`~X/>w-F{RR]{iF(h^iZMoP(G$Xq@$usvd:PIio[e' );
define( 'AUTH_SALT',        'h,7CZ;9hvj>Mrml`(Iw47w*xjge$djzyI_{W>bRcRp#,76T?qi@D&2>(mFTX&9n6' );
define( 'SECURE_AUTH_SALT', 'F}63cBOKHYLgV&^]OBjIvuH(RP4 ;!n`jnkR7,L2e ~:/K-A+FgR(0l5yec@N>3S' );
define( 'LOGGED_IN_SALT',   '}!C<[S-`:X/skefRv:$5b>vXb^#3f5mpaMfY+ei]%16Tu0W8Fjlbp=i2zCCX$|FR' );
define( 'NONCE_SALT',       '2ti/cR.^Dx4.2{RQ)Dp6]lmz/IfYI?de-}DN`eha:@y+HNA+7MUv]2[pe:(4A,Tj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'TPC_';

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
