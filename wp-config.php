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
define( 'DB_NAME', 'chic_dressing' );

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
define( 'AUTH_KEY',         '4Wep[Mi)8;^mHPbXUt7QJYt=ay-DaYFy^g>CdQ%:LT^Cw(jxIJ0a/L7NGp9U/U<^' );
define( 'SECURE_AUTH_KEY',  '7<Ze}kLi^Sm<nvM`[$Xt~pyi(GsLm?Z2n_RSHw`Jb(e-iuNWH2pdf1dr6Fu}rk|L' );
define( 'LOGGED_IN_KEY',    '>hI+D3v,8I^H--HWU7)qV7|A=[dQn{-%[0il:3.ZY<b`5r]m0+CfI3=9%#AMM%uc' );
define( 'NONCE_KEY',        '%(Lp|IJ^M/3<|,g9#eQj6.jc8xC:)UI+duHKx5QGX7zG%Az~m)/nd0o/~mGx<oCR' );
define( 'AUTH_SALT',        '-WBXqj}wINg,<);d68&*P2u4UWY>9Mln:~gSuKfu;^E`f)x4M4w`}&(zx);B;I?-' );
define( 'SECURE_AUTH_SALT', '=0/40dKOY>;ZKP%W[N|l@SND>J~rF;U3Pj#x^Lp;1YI|^ZUt#ZED&YSn>mQ3nX6c' );
define( 'LOGGED_IN_SALT',   '$#I:P?nlAO`vx7Ip`Orl3(@y3j/#Z[*!D(@7Tv`1X%98rQ)mSc%L3o73@yOd($CE' );
define( 'NONCE_SALT',       'N_:;3%sX[,&3Uh@,.2GBu~ .@%G(YQ0d%(9(/]|EYHCuwRpgpX1qfhIW0]Y9r`ef' );

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

/** Enables page caching for Cache Enabler. */
if ( ! defined( 'WP_CACHE' ) ) {
	define( 'WP_CACHE', true );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
