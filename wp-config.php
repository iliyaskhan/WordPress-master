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
define('DB_NAME', 'wordpress-master');

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
define('AUTH_KEY',         'mx[;OHkx 3h+,bD)di2A&aWpkeR#~C<LG=wE*L9k-MpCcisL9yNR}=2VN+o|>]jD');
define('SECURE_AUTH_KEY',  '(N[aye+:-*~^Xv(%S2h{^$%Jf{a<g@VFYC)<tE7+yHxpjt#F`oX(4{)JDyvh5b8.');
define('LOGGED_IN_KEY',    'U $@;bF$*`abnbEnI[X1cU^2h->kGkW_tVuboP?M1K&z<b)Y E!`^7+8J^_:GGAG');
define('NONCE_KEY',        ']-?|aqv4_m.-k}Y#r;i)}`j)oq6M*Hv*s7&:fjnH?B`n(z6!X/@KQ!u0yo|#9Kg!');
define('AUTH_SALT',        'pv(dF*AYlMdW?$x%DrZ(&:wZ||-G?EYqii[w}+k!n>-X2m!M8,k9vGB35M1+5WEB');
define('SECURE_AUTH_SALT', '_Oc0g!+aGMcoX#1LH+^M;K}_b:+ej7zf*534-i5+|.U^xbXN$^9D~RnA>F+!_/AS');
define('LOGGED_IN_SALT',   'B@$2I~$LF;P@lfh8CV0D?s5U8qIgzrlMc+bHA)j%-$[mA=*`ZRI UqPkasp+3Iqt');
define('NONCE_SALT',       'Z!f78ig4EjXVMC)#E<Z@:5h_wi$$+];#u#E_*G(>o4<T$lPTy@vzan|qvG)NW(Z6');

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
