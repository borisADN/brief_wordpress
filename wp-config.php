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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'hM;Fu34PY0Za>PM<$?Sn1!X.I1,f8DbaJ85jGU]Cl#[r1b6}nZ1TBb7^3c.+Nk57' );
define( 'SECURE_AUTH_KEY',  'GW0Sk 6#QNTO5-Y[5$eus/>>(q6XgM</0ZOq3b!4WfXOF5EpUAJWfcHe7RZFNh/I' );
define( 'LOGGED_IN_KEY',    'NK.?NSB n8xnJ.F1P!f}gqq6<|$fle0w?(n%AqsG[b&g-n!:SpG6`m!PPuvbd]|!' );
define( 'NONCE_KEY',        '}X{p7^OhYbwRxJFX>&k+ ]ZiBu_l+:IUDBR@-+]f1k/}OzdN}hKur=h0]{dtl(U1' );
define( 'AUTH_SALT',        '^8_Wt5#)Ha,2f/ys3QZ?&k<Q$f]gyHz=!E.-KAZrHe3Gim=@6W!xiTq]Fv}#Y%)>' );
define( 'SECURE_AUTH_SALT', '6nVFH#[XpKuOYfT4o+ri+p!/_N%jb:?#,Ne6xU9f1nc/SJ`k@;lUS%U9p)7yYm^b' );
define( 'LOGGED_IN_SALT',   '3*d@u`L%EM26<M@4<rVt$9.qg:S,nzGo2*W0I`NE0O)o2cFf-_ta}EJp2,PkpG=Y' );
define( 'NONCE_SALT',       ',j:KuEB`$Vwp7|Fg^REs8sm-[<gmh,BHX}(>!;n/5<ON9FucfT,;hwk-uIMbZYwq' );

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
