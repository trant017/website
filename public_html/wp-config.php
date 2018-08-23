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
define('DB_NAME', 'tonystr4_WPSCW');

/** MySQL database username */
define('DB_USER', 'tonystr4_WPSCW');

/** MySQL database password */
define('DB_PASSWORD', 'iqMLJvVmstLwAtviH');

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
define('AUTH_KEY', '4b145726fcfcec6b29e8d4026cf42c823e4ca1cd5f1514e1039d062c4a0bd87d');
define('SECURE_AUTH_KEY', '8d1b69f3d11d265d53a62b8ee0eae009a9ac712655f9e80a4f63b5552f53505b');
define('LOGGED_IN_KEY', '1780abff927f1244bf608438776c31ad84ef9ddef8d215914474a4342703d51c');
define('NONCE_KEY', '670f1daece2c1136526573542ebce7d4b8d27e6938eff38bac416aefb41c209c');
define('AUTH_SALT', '980a9cda96a692c37847205c82ccd2080f50bbca48b2af0367d108b37c5519d3');
define('SECURE_AUTH_SALT', '69c7e9605c598a90d740d56b5234e3f1a4fe87a25efc02af93ba1195e848d998');
define('LOGGED_IN_SALT', 'd2ce86c09ee6d517378ae252a0deda299641fd225f46ca95c16fceb5e4bee02e');
define('NONCE_SALT', 'a2b796429f9b91b0658c1d8237217dd6d68df568d68ceec715065fc60af823ed');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_SCW_';

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

define( 'WP_CRON_LOCK_TIMEOUT', 120   ); 
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );


