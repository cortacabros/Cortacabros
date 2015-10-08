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
define('DB_NAME', 'u767014508_etare');

/** MySQL database username */
define('DB_USER', 'u767014508_ajyqa');

/** MySQL database password */
define('DB_PASSWORD', 'uhuMynyXum');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'HiQV0pdMsH3EUVqLmklJnV7oE6Morj74VkCddt7uemBUCukGNjQKME5czy2y60uS');
define('SECURE_AUTH_KEY',  'gl8ygSuWtlcShkg6U0caNBDIwBWRxIiKROmBoQByXZAlaanq4MMhNnyhUk4iXWlA');
define('LOGGED_IN_KEY',    'TUWt1x9dOuYzruCOIChdx1HzaqWbxpJBKtcuraSPKnA3QPd8ttdbVy2ZXBIfu0Wz');
define('NONCE_KEY',        'K5hfPzZX1e5Lw0iIv6IYwAfQIGAvsVXCtLTBnHymJr9UOmslLKDsniVVy0WufcRi');
define('AUTH_SALT',        'BqSrQhPXI7U34hyNz5OJXV1JLIKsziUdMjIYzUKHVFcE6sJSWfKrYW7Ambk92lja');
define('SECURE_AUTH_SALT', '91FEGRlycydkFYS4A2wVoMVibtxbHmyXvrx2Tonp66GUgHtbBVZ9hsCJWZAdFCsx');
define('LOGGED_IN_SALT',   'LzKevu6y003my1cl3p5KMl2qdPlG452W6DnZKTSLgSYUmACUJ63jaPSgB4o3Fnk7');
define('NONCE_SALT',       '76ImHH3XFZfUZ4g9Um4GC7Eejg4riKPU3W6ZXhALkQPSdTyQAIX6UvVDc5zuQf9S');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ta0q_';

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
