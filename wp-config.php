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
define('DB_NAME', 'cortacom');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'UhfdbWfgf');

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
define('AUTH_KEY',         'X:~8=14YH2|hAM~341h#+a]v7cf:81@1s|I7sA~)Y`PUwAi@u,=Qj-m+%lq|SH <');
define('SECURE_AUTH_KEY',  '*)he2` S+L[+AdMDsaOoTg8/(IHN+z-Tw@?*g>erQ2T-S{)#yGNvLa7qT[R?sn5 ');
define('LOGGED_IN_KEY',    'P%7|~CpKgnzCCRGat(9ohZs2I{$Y8h.#z.4[yJKlf[OdRy[m{6hi6cEw(q]u`or^');
define('NONCE_KEY',        'Dr-^WMv;HZBjy%,@*/sW-O`|!_[]v:^r9U!=X-?-f6sfC7nfUJo|-11||e,9(f+p');
define('AUTH_SALT',        'jKO+pF>Fu[P@,/A~c@~Y^.U1gf<:qdoqz?`j]WSSy%Kui*-dS~*-$_Y_IUH61%=k');
define('SECURE_AUTH_SALT', 'mrn&h|SB5gqiu2|sVy4Jqh>Y&!TDT&(D(|rq7yT9W^a[|Z<h1&u29J} Ft7CSa)/');
define('LOGGED_IN_SALT',   'Ced*[B;][0fl-gWY{x/%m)Gm4?]$=(*:rP1B#2:G$-lXoGg1|#*[(F0KKbLGKX|s');
define('NONCE_SALT',       '$W`t_5U9)iahQ#7H}DG>ixhZFf!4,Y(9.)1&|+lx)p1j_(*7!yC`XIz<*b@scHrC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cc_';

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
define('FS_METHOD','direct');
