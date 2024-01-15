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
define( 'DB_NAME', 'dora' );

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
define( 'AUTH_KEY',         'J6#b`Lj?47 ;8q&;o[N_U@1jQH<dg)<9ehe@L?uR{#ssZ_=2~lC%Y9yTZReLxDUd' );
define( 'SECURE_AUTH_KEY',  'w}<WU`(x<QUsyUlG-a>>Fm}6MG9B~iKsto)3Vi=/)H{A`k1tG BakaR|=UP|ZyO;' );
define( 'LOGGED_IN_KEY',    '|_p=o1HgIT,2DW+O*!0Ot)VO*Ptuda4 mQ)!XuA%zrboWR8HX!;4WQu7pd[UzFVj' );
define( 'NONCE_KEY',        '~3$C^{r5V30O / Ki0t@p#Myl))pQ?4sw:NAdo>16S&wob$oW{DO3,JUj5uB4B5H' );
define( 'AUTH_SALT',        ';5A~dQg8+yeK$9/}G;}Bqn}$T[,4FgkYln!nhx{|w/ ~wqVWgJ5V#$L^oIEm;PsE' );
define( 'SECURE_AUTH_SALT', '[3$iJoxK:q 7vnuj_}fpZnaw2U~y;VUa5KQE_zX}%ODJraD*CODbaRi@Rn-~3CVG' );
define( 'LOGGED_IN_SALT',   't#)Z=7X[74WZzD]P-iXj8|gJA2,xAM1>FN?|(<PkA,jNg_gq>|L5tH>)83cU`x~q' );
define( 'NONCE_SALT',       'K^L>7SVRs,Zyf[#ILI4T@p/VtUDkSOzt2:~=z+h-kKa5.S{[):{vg4f6Q]EW !5v' );

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
