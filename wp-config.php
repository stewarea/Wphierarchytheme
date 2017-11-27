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
define('DB_NAME', 'wordpresstest');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'wpuser');

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
define('AUTH_KEY',         '5+yEn}KzG(a58w1(,OMQ1y+_24p~ G2?|%+7d!!7#[<xku4f8E4D(3aqLimOj2rF');
define('SECURE_AUTH_KEY',  'Xg]/8[zyptn6]/d<K$^Myab8,[rd:8&Fry~or;=|bkk`70+zEdeHxyEX}MGBomSb');
define('LOGGED_IN_KEY',    ']r.4P2}PDuSF&&,&;`1N_X`J2=88CD][KXXhTxP8RC&K.UsZ Q4A)0Yvh5CO/P#I');
define('NONCE_KEY',        'Is-9oq~^t`yU]aLs$$4q<|VUkkHW)(~u[ImMnk<_|g}H/|l|&I#3}+M;-Kv#5k.d');
define('AUTH_SALT',        '/^]r,g4y6,}~]BxH5D7,B_|z*A .up#{Hlqy1_7FHt<Ba8VgYdUr`5iGVl?((7dL');
define('SECURE_AUTH_SALT', 'n?;sdz3a^&]M<&d0?D0Pw[]guaB5*xm5;ku}r![KrORxwvZg[uJg/0blFrmWk2in');
define('LOGGED_IN_SALT',   '?K2x]dJ9dB~@=&~i/&c}:241WX~2k1317]1*-6ya*=KnrIKHN@|`LX,<d$SV))]g');
define('NONCE_SALT',       ';}#lT^Q/}1&b6[*g|Y=*3 f]a&)%df+t-~.x;R8lTR,RY4M`jA^)X~o:8.%xx:Kn');

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
