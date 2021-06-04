<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fictional_university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mudasser' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7A V]AXxPZm{u<?a& J7_WAB_Fl_gI|fvIP@E~2IF[EOeP>wJ-{s^i90-P`<kW06' );
define( 'SECURE_AUTH_KEY',  '(7)%uq_: L`#B{6[~PQaT<cKfn19kCLnj$J=n~^!!wTx<$fWb9hdqfBco!d.Zwzw' );
define( 'LOGGED_IN_KEY',    'OhAwf:*O<6m_)8Q_u6#evp$Sp 0*<&)~3)?(P9.jVnD]8u7fgUi[py0TYcHn1;f=' );
define( 'NONCE_KEY',        '5V]NMq,n!c*qE81N/a~Ey BJQ`?$vmP_8h~okop$ibJgHm_55P)[V-dEzi,&u]C3' );
define( 'AUTH_SALT',        '_<lZ)3<akV#i6{19B1Yq^+GbL~^V.iSAP/gdX EBj7M8u}H[|)eg@~GS./;%}4(K' );
define( 'SECURE_AUTH_SALT', 'IFMSnogEolD^oHajQYQdEnWpj@55Z aB,u 4-&Vl:ra!$6Hk#JoVI*HkX&cN+N0e' );
define( 'LOGGED_IN_SALT',   '!!5(bb<..Qacmd,n&j37^MP_9Eog!He~[xn59NB&2@+>tuz*)g&h=U#V@| Ns=4E' );
define( 'NONCE_SALT',       '-Jg:WQy57zT:+LFC[sC~[N0?JK(ktZ34=!}((M21G5U{PE%.CZIg!!&g{eZp|raD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'FS_METHOD', 'direct' );
