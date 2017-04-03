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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'woothemes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h)!xJ|X)1uj({1|wDt|tDVu^HE6K>:*!:!xpYLY8QqEsRieRF_(M`:c(O%M.-8#W');
define('SECURE_AUTH_KEY',  ':KOC#a>W4.Lc04Y4VZ%Kgvp)h,rdv}.;>xHyoE[,7bI8gNK1u[1p eBl|,;yM6V9');
define('LOGGED_IN_KEY',    'HFjwL>[cVo,X(Y/9HCjSMet678[d*9gE?=lA+?R_<U`OiC8FDG;;3<2If2q[@TKm');
define('NONCE_KEY',        ',Hiu~LJS=6B.l^}U.}thWo5@T>}+#[CD8?/@<Ia-5fV|E-]6fx0V<6U^zhv{tA|T');
define('AUTH_SALT',        '+y#|HcC)Oje&2{7Kj6MlC6`QBWN^uNMgXGLW]EMEcA+-IJqC0J1ww_,}`]Bn}acX');
define('SECURE_AUTH_SALT', '?rA>r@.oJ0dDOZ%|eFH#{|Wm</4 dQ0yx/p_DU@=HVth>+K~t)0i%dI QZ{a$CCb');
define('LOGGED_IN_SALT',   'H2.EG7Y_E? s!4cTzsp3y@}trWH3S#Z1`1BXOJnvMwQ^gPG7i%N -Be&[QW5w!o:');
define('NONCE_SALT',       '#dggQ5}233QYV0R]WmE#Ge^_^N6] s%?eF={:}r8u7;ETy`y8ygFZCrFEWj;J0(e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
