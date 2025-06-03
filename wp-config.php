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
define( 'DB_NAME', 'chalanavidura' );

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
define( 'AUTH_KEY',         'Ijy~f;}3JcB_t5o+G .1wT~YXabHa$BKknK$PrhR!44ysnU(tRY9kko#Iq^{ `$y' );
define( 'SECURE_AUTH_KEY',  '*`Fw#Z*2TKU$`e@rJFrJh-Z7Uf}urOLFhe!k*XY;3qM.7?,XD}Ag/*s{X 3;Df-7' );
define( 'LOGGED_IN_KEY',    'sKk,FczFi3j$jwoCO/)P03vu{3vN?<[REC[1LkFML)A<d8J_}r+`hh]})h.C17Ah' );
define( 'NONCE_KEY',        'Y|>N]siJBTX~@|IlT.`X(+XZ{a*/]%`%:k&o*k2@1]D$cLP7Bx0t5-;`J{ct&)uU' );
define( 'AUTH_SALT',        'H/B<#9,W!b.Z#8/fj/#*-3-9~SmwD`yj`V~};sJDJ@J$V{0#d*Y=PM/n8gBmY=B@' );
define( 'SECURE_AUTH_SALT', 'GtS^S,{%Scf9!i3zbRk$0b&&|ES.el2`bXIJ^?3`ji|OI8I47:J+[w|6gq%,ak0o' );
define( 'LOGGED_IN_SALT',   'p2R88YxH0~M:&WGc,!H7QZ5]Moh>SzqP+ywpV3+-?huV!E6bOd##x^}%M|vc/e7A' );
define( 'NONCE_SALT',       '5~;>+xNg07<GjBd/$j/|2I:rA_Ev{v|zK(#sMhS@?{^<9O&G(T>emw8n^D[*t>6U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
