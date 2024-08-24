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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '1}8i*fhAt_9}k,t >Y[hWNSn}.laU@:v!@d[yX^FSo#Klt@I M7kP86yqh..id1N' );
define( 'SECURE_AUTH_KEY',  '{*EY>([2sr-R6=N((P8%>Qv.v(Eeewm)zRye.;BsP?Mp>bjR9>VH.]IIzqMVnh{)' );
define( 'LOGGED_IN_KEY',    '7KwxtU_1hb;0f)mtPC)~JuA+SzGQ^7X0864`-6Zd]@,8Gfk%gpXW;G/8a?^p/4?H' );
define( 'NONCE_KEY',        'z7#2I%tWTyF!w.vhur_hv-UiEM$DZsUf$w (6ZHWA<q!`)|cL]br#yg62|QA3z]1' );
define( 'AUTH_SALT',        'C^Bdp=4GSWr/<6=kVP.Q+e!Sq$BNn-Q40mW%9uQhb/4<WJ^s=*3IUO0#=,{VOx!p' );
define( 'SECURE_AUTH_SALT', '}gckLY*RYv `W@&XeR0&GhZG1Fo.[NxIC?2OI.R+xMMM&1E!%28>eYpu(ixx-60g' );
define( 'LOGGED_IN_SALT',   'Sy 4d6<B)>(mAs4l?[l[F  GJYp$0**j$2Lc2L%XTbfS^FX[:?J;|Fo(ja{}7%[t' );
define( 'NONCE_SALT',       'tuKEd&m%X)g#yvI^zw-Jx;*)w;&_]Wa8]#R%7Q2`e&|x]mt8greQs vIV`;5LzYb' );

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
