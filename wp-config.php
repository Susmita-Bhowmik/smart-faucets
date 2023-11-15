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
define( 'DB_NAME', 'creatyz1_smart_faucets' );

/** Database username */
define( 'DB_USER', 'creatyz1_susmita_dev' );

/** Database password */
define( 'DB_PASSWORD', 'AgZ;9[3q5oKc' );

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
define( 'AUTH_KEY',         'rHn@(BwU?5Y;0i8rAQbD*};<JJv-x>q~4IzQ};NjWaQTGAPi=u{Er&1v0T9Q(qT^' );
define( 'SECURE_AUTH_KEY',  ',^/Gdmf&*|oVvAMpg=#]*x8-.Mjf6F~7[;(O(_<-69ge3~gd:U..,RP*6`v),q/ ' );
define( 'LOGGED_IN_KEY',    'Rt;7=v@t8W?,6u,p/^7MGlA^1kETd1Mhq=-KC8jf5#v9gbszw=2KfXiGX}wUJev$' );
define( 'NONCE_KEY',        'D&pe5`G2guu. NcpmWV#K:g$,sn4t8j*MA[Pw`zcD|v(>k|UJ6DG*. Z8@9Isg//' );
define( 'AUTH_SALT',        '~k$w+;vwEe@:Ti@7zZo&HG(*rcT2yR?W^N.D0V!Gk^<MJa=R<?h|bp|?PG!d[0?W' );
define( 'SECURE_AUTH_SALT', 'l{G~)]cW*D#$sd:>Rq7rd@^%|-XnLC_K)C;;Z(r]oz`K^pGjWrjP}]*4F{[*N(pR' );
define( 'LOGGED_IN_SALT',   '6kd[g~L(y1r!0{kF/y9=rX/4:qUuAM(iRN`32|&Fxwly-e_b?c?0y/yz4n9!uLGg' );
define( 'NONCE_SALT',       'pW_FA$=CB{G#}Sxt`<{[DEV=}h8|*N3b N%QZ+|Amp2_Q[7Nhpzxk&JkXIo-IqKo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'smart_faucets_db';

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
