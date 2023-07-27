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
define( 'DB_NAME', 'yody' );

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
define( 'AUTH_KEY',         'Dh 5&jZ$G;m]|I_K85R; 5G*@&(8EPtIJoQiN/}vG|tG-8%dn t<xT0dMpTbv?:T' );
define( 'SECURE_AUTH_KEY',  'H~; hV[^5(u*jRN8yob*&_BGJW>:lFQkQS$hcH7DMi57-.lNtH3*]c&W7u#Jg=O;' );
define( 'LOGGED_IN_KEY',    'da,Tvds1R_Z$iFzK86VulP<e~Uq2QLf,0TI<N7]8~e_7H&r,>#s=9lK:43?T#1Ju' );
define( 'NONCE_KEY',        '+!(jRc:deH<hvgl#s}2Ivm S](m9(D]wwR0:FX70>k8Asce~n<q-#5]Yw/;^x%c@' );
define( 'AUTH_SALT',        '$$2U3-hch<]4|Il.@wpO-5l(1]VS3,Fiyu[_.)R0X#16*}4Du|xZs@AJz:Z#nD[;' );
define( 'SECURE_AUTH_SALT', 'i7eh/HOFS[SBPLQ{0Y@<W6iTbx93A]qnro Vp{lgU_txU.T-82bL8Isrpv#Krz2 ' );
define( 'LOGGED_IN_SALT',   '! S[{246*v~8S68`c}|ApJY3^QBdD{r]/[eT2;5,0=LMk%s_b8]5&%E3Gx_n`Vb=' );
define( 'NONCE_SALT',       'Wu_5p*$]09]yG[@g_77`]HR|0usmQNI~4x2&gw)}3TsB~OJC.RKO.tI|:aN;xN]*' );

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
