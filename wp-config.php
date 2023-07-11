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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'D|l@M.=.rk&ZUD Twq[!8y:e}e:xE,1.L}Yq[hAg?bt@#+.+5*/16qgJ( :tB2-O' );
define( 'SECURE_AUTH_KEY',  'CbGi}a_]*c^DtwrDq8*,t|=$dDtZQ#$[{o8Q{i4WIC,dQJ:a.=bI,,]M.0dM^Q.Y' );
define( 'LOGGED_IN_KEY',    'l6/!2Mg$2s;{n~Ub**T*m,s/wLku?)G2h*~4Kg+L*{M/;R</eo@Jrlwz$%jk^)bq' );
define( 'NONCE_KEY',        'G4}kaKjI=Th8o:f2gvAnte*BxNoS`hHE`cai%74]1;v-4fQ&`A;8< u1~DEg?uQ2' );
define( 'AUTH_SALT',        'l4mfBfriA#-:s%0cLXqkmXz6W.EtW-UGv|`Y1K8/AI~u0tYcy3!/`+v{a_%kYcs*' );
define( 'SECURE_AUTH_SALT', 'JgD?jQ,>=eHPd|EF$WPtgQmE872au<%e*tq`i[cX$j1Q]OYdO!%jQU2Zcg3#RyP[' );
define( 'LOGGED_IN_SALT',   'HdQwKraR;L:$N sv $HyOq&Vn`_srW`(/K{ptc|:@5.-JI(V?c%Et}i}I2lc:4RR' );
define( 'NONCE_SALT',       '1,M,kQUqJ;F(W(9,#/a,eIGbG~`}=fOUfeP/i56BtN]e+rk11X^%X06hDjyQ08*|' );

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
