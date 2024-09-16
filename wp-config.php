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

define( 'DB_NAME', 'wp_bfupr' );


/** Database username */

define( 'DB_USER', 'wp_6o4vj' );


/** Database password */

define( 'DB_PASSWORD', 'IeBYs82IhNzb@8*h' );


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

define( 'AUTH_KEY',         'dz&4Fh}xQe%s4Ox.4&f=0lDalBBFR.UC@}Ft}<CpYgiL<FBiKSnd-/=6Bx>kwyng' );

define( 'SECURE_AUTH_KEY',  't0:-6cd; |g)pqRBDDfTR{j}78CRsOj/duj5j9<(]X%b,z[dXIT>xz$U_nN$5FM}' );

define( 'LOGGED_IN_KEY',    'sNio?]/t!<+B#iqPs2D[t?_S7W54;dnlq Fu#H`_T`}Imwe:ohv+E[j~1PA #X%x' );

define( 'NONCE_KEY',        'A#@G-Lz{-p(%B&Ik?O yB1`9qUS9(VRt^.y[3@_;B9:/~Z3a.z$wqgu4B0hdFm0a' );

define( 'AUTH_SALT',        'cJ=hmR8^%([?H&qbKm%wzmE,L8Pn`*m:=evco7N25 8.c|F_gS/|h>-w19i_,]Wd' );

define( 'SECURE_AUTH_SALT', 'M0.ePk(@HbJ}{^{d=w]^s?1~Lyo;ulNe,fp|UOK1u0`4,R8=fK&<KZM+2D*gr-uB' );

define( 'LOGGED_IN_SALT',   'O-,Wn<=HJAB5vL(GT1n_U]s^kwx&Ch[)ua*AKXN){9UzG&!V&s%_DMU-(<B=5Tq{' );

define( 'NONCE_SALT',       'HV#pTHa,U!`=$gAuo{H$7w~<by^wUEQJnQP+D*O;XO@6Sg]S`3I%eDMo0VCK=M2s' );


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




define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

