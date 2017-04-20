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
define('DB_NAME', 'sql10170014');

/** MySQL database username */
define('DB_USER', 'sql10170014');

/** MySQL database password */
define('DB_PASSWORD', 'A22NPaMMLl');

/** MySQL hostname */
define('DB_HOST', 'sql10.freemysqlhosting.net');

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
define('AUTH_KEY',         '`n@KGUGX{j* <a0RVRA`>.nr1}qOi>r6KHizueOE6Y8E=fUV?IpqmtE-jf<l;Z(4');
define('SECURE_AUTH_KEY',  '(fQ,K kko!)}_e/A]/+~izb8U?<6G?z9}fwblN1S{p8XdR3zye da>d?+~r{bg,u');
define('LOGGED_IN_KEY',    '?*GZ{_ZmqOI_f1!On&/WMhjap6EJB-<qXJm8|6=:.wF7}K7+eBA )j8hl+ay)N.U');
define('NONCE_KEY',        'qzBQXISDI1!Bb^PS]pMS#=bL&JU%iZm53y_~n]a8^Pu<=E<5BEfLCj9-%vN1;CVe');
define('AUTH_SALT',        '2/0}L-]-<}}h>H^V1t5325l4E>?0v1sSZ-scl!g3 x-,qCgWO0+X:t>5l[-Hg ?d');
define('SECURE_AUTH_SALT', ':qZ72=@J@dw.D>9ZdIIpaufN)UYy.1ZV;*$tI`oJQU~!fKYu&`pw^=wK`i&)fz#u');
define('LOGGED_IN_SALT',   'Wo..)D~r-vr7(K-84n~!z1w/&V udqiX~C2~fPM,[}FF)$NcPgkmhCV%Z?tKk*ug');
define('NONCE_SALT',       'VS;Zk/s@RibM+fJJ_X?{Op1Y]oQWPzE$z_qGO39gkc9L~cL&HHIrkD#ENgZE3G(M');

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
