<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'wLj7Z+4i0$/+5fNpWXX8^G[,-6c_ e-38K ujJ1F{G-uE])a%4WdD<[-^EB8_V*9');
define('SECURE_AUTH_KEY',  '/6hvGddr&r@fK-Acs|^N-dX+2pY3J.M||r:!y&-]5x+D.(aANr5^d/zVT}CDwkh%');
define('LOGGED_IN_KEY',    'msC2O2o}m+/(n&a3x@RDJGy$z}g/r-Q|tdZ myl5!B|BNc!h#ir=Fqr5i|a4mjCG');
define('NONCE_KEY',        '%S`B|LFAVK2CEl9q,HydB|?F>!:5`}]WaP-r]7|0`>74MS@xE;=r>SV,rwQ}w+Nt');
define('AUTH_SALT',        'dme8w-41P6^_X+gAkFqa$Y7=eK-],v(wYvBr-O~;O2P??z))y-wNu9?URN!]Qs$*');
define('SECURE_AUTH_SALT', 'viHYNP|^l&V0Yjf|H0D0w4#=iqI@7ohqQY9vE-{YQ!(Uu|Wha*(=cM+%=Ng.AQa?');
define('LOGGED_IN_SALT',   'RQqo5posZKa2ZEgQ?ZvQ+rVD:73MmR.|{_WumR`7.lWZ8w)i 40#nhYbj c<6_Ul');
define('NONCE_SALT',       '@p|8mIb wE7`)<s,e_YU>-@)Cr!vIbS0qcQN4u:-|kIo~|dyo/CewU1O/}17.B|P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
