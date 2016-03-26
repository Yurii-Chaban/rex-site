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
define('DB_NAME', 'rex_db');

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
define('AUTH_KEY',         '0e--3a}Sc+NIwfd_Ild0QH2*/?(gV+ISC?6meBFYM@=q_3q+}C?_lVs6Fu/s~8^s');
define('SECURE_AUTH_KEY',  '?aMM Et% Cv|`jjzO#MNVgR{X^ZQ<,Z9oSSr ui<KVb+?m)G34^5zB pp&x<9H9;');
define('LOGGED_IN_KEY',    'EO||8*L0AW0-*4=x+h|0UB*E*%ttlIMfnoH>-b:]65QCpA#^XbCq>ffu>U!S(P@ ');
define('NONCE_KEY',        'spx+BYIiq`w7;oE:P2p+^C9X*mIfCVcZ0vsr7NZxl!pipc4z:|-lh6Irt41`kdVQ');
define('AUTH_SALT',        '_1:+Yn<>br}iE0JKX?E=)6#mljOh<)xOTxcw/gvzR)M<|-]]x>bj>|nEqQ^C37&G');
define('SECURE_AUTH_SALT', 'D=|N3&!za/e|wILv{ThyY0Vtx@ep$Sz~WqcN=+52|F17oUjZFk|O6+@umWEC?k27');
define('LOGGED_IN_SALT',   '6t{M|,BRWq5cX/G9YZoXq}aZG]mkg+~DfI5OZ<9v(3bko6>ar;PVp8q0+QR=qwaG');
define('NONCE_SALT',       ' ~C6BP7_l J:Vj8F$$dne+y_}uw^uy`1K!;pp+/o7w,;V{uXa4`9#1!O2T5LS4.N');

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
