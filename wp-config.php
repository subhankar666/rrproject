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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rrdb' );

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
define( 'AUTH_KEY',         '`cLTEJ-s8PE88C}yhoh;._%JLzi=Wr[%|`w@Emy$qiz+u8((ck>Q*l*=~f(6i_VD' );
define( 'SECURE_AUTH_KEY',  'TB(G>?9&<AekY~W)=(tS+z:acE>A<gnjK|JX2:Lxanh G`|f,a.:G2ixN^]=J!^.' );
define( 'LOGGED_IN_KEY',    '$J8Cczd|L$`4j{J~I?^~19PeVE %naae%[0#)V[znA6%R|}Z084c1s[oT4GpEQC%' );
define( 'NONCE_KEY',        '}_>-pHB=;&,uOo2#B8Err9PWZ?0Hyy.=l#SBIU6<(E,,1|0_(rR7xWvqu={FsEt}' );
define( 'AUTH_SALT',        'a0X[ X)=ha. YilFv}|5;jI#&00;/2S@/Qg[Fp_N4_v4)%9&kw0g /N|!Q@WlqCe' );
define( 'SECURE_AUTH_SALT', 'pa;@7e^*ulNg}P_M>wwl8:Mza:{W >nF Bo_qejJpUL#b|U{,/I`X;q|f*eyMOS9' );
define( 'LOGGED_IN_SALT',   '(BzOvd!Mw+ehOu .z+D.d3G4Ze~r9D;>.Qrl,M[.UQDn+,QDl2v5LEAu5=kwsHS[' );
define( 'NONCE_SALT',       'l-y[KjAiq;D=z;wTtm:id;{M6y{3-$5lszOg|^nCG.t8>qt;KP4!%UQ>Qk7-.]P%' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
