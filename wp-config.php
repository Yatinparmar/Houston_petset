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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'figma' );

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
define( 'AUTH_KEY',         'Ue]QG:> T^xX$;k,-.>Y<y[v u6;Q5aH9{3Grhalji%/WtF$!%vF>4X;,!RIX rN' );
define( 'SECURE_AUTH_KEY',  'mevf7L]X$&r}Lj<ZJF;s@7cZ_[2z]=f62e}4O{PTqQyK@1`u!rjLsZ~KZ`zFp3v<' );
define( 'LOGGED_IN_KEY',    'uX77y|8xE5igk,79-M7&M(&@xgzwa[KA?}P8?dAGxFWk+equ9qQC0=P^DFX-!#f)' );
define( 'NONCE_KEY',        ':3E}/4+s5g~d>nn@5a{:YK9#,~R7Cbn}+--&3XYk)==f8s):[^s9T}B0=,P7MqWt' );
define( 'AUTH_SALT',        '$Mfa7V$IM*F,#y`u.@J6X$mIhzdv&l#0G3z9>#_l@F/;?0pi*pj?-6P}qI!2]cdC' );
define( 'SECURE_AUTH_SALT', 'o0Gqd?n9{8uwnE$%&K(rrvw#G[@1v8yt^g0Ibza_E]@m=s+IfmLac9`CF;;,2#Wq' );
define( 'LOGGED_IN_SALT',   'BS)!ndfU1P8V%RhAHQC?K;W`[|J<7T$9&|(r$c3tivSjJnAsh8>f=032%`lErK:3' );
define( 'NONCE_SALT',       '1z}_L2a0OnB[F$uc/sS1ucHZnkcc/+7&OZ<[z7}u_|BGl$8fjREEQ6cl[UZn(_ %' );

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
