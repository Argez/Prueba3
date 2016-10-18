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
define('DB_NAME', 'teamplugin5');

/** MySQL database username */
define('DB_USER', 'argenis');

/** MySQL database password */
define('DB_PASSWORD', 'argenis');

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
define('AUTH_KEY',         '}oX(1=&CnY{1@M%xnPr&|[?f2E{m[!%}n.v=Vz0Tk5O=L(4ov{RloI# +]lE]vWg');
define('SECURE_AUTH_KEY',  '0[jI@+r#7[3cD6)$SG6Q8:5J}>]:0]5;0EYr2NQTWGyo#/+2Qr0P1=YJ:?vk>`,:');
define('LOGGED_IN_KEY',    '#K{Rq}i_)C:}^k`T`&hRcp^el/A/@pg6xW}z;K{CT2)4&1jma>lx[gwB/@PR?X#!');
define('NONCE_KEY',        '@g}#m`~X6T9%M7av*Os:+mim9)R9P|F/Qx5E8q;&r2fop7]gyF2;jMDV%TEZ*yVb');
define('AUTH_SALT',        't_H)oSrMfPIqg(JdJ%tug^NZ@OuTCq|YmHyx~1D9$*~3O.ykkNwy(eV^C]o1Q=$?');
define('SECURE_AUTH_SALT', 'mx)9&fbRd%7Q98BH+&SX1JlN5`21Ig7:){| >Hb!0QK0CV(n(U.:qDs3fgq_d>X<');
define('LOGGED_IN_SALT',   'Y.jk<{P< jnw >]Noo>z4c8`~RS%atCy=I^Ga:J$J)G(e1@iWF@o?8<#TKm?1*S-');
define('NONCE_SALT',       'T<!4>ej}R{`A]f/?wK0.Jnc8bL)}lf{<<5nZmQ~Loj|E<lM5?XeZ*)8PDLl$[NBo');

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
