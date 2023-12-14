<?php
define( 'WP_CACHE', true );


















































//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings












































/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qevlqvum_wp907' );

/** MySQL database username */
define( 'DB_USER', 'qevlqvum_wp907' );

/** MySQL database password */
define( 'DB_PASSWORD', ')Sap25X-)[9XBv' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j6qpekjeh1mz8sc0gln2ri9vvhgqbhru5mfyueri3pruigce1zhtzzsbwa5xogpn' );
define( 'SECURE_AUTH_KEY',  '067scfdwrhc294dc1oi7hetslpnpm4jglcr6llhxop32x4sba5ysbyw4vflyypkx' );
define( 'LOGGED_IN_KEY',    'f5xt86bckndpqh8ndanyc7fnanmvd1rzyiwimtzd6v4uvmz0vcs4g7pbq9ubcylk' );
define( 'NONCE_KEY',        'jgszftzu147c2zafgywxrau7ncq2vep4nhvobrqqd5o1rrhcdev8ewyyoje2jntl' );
define( 'AUTH_SALT',        'gtn20ltod50r7dkmgpgsiypf4kh1ajovyjb5eguf4mhy7evhcpeacr7ktk3hv9tb' );
define( 'SECURE_AUTH_SALT', 'ejzlzys8p7hpvfc4wqmjuy1wpzbahtqnj0jre9e7nzxlzlhppwdc5gzxsoesslua' );
define( 'LOGGED_IN_SALT',   'm7yxgf9oeu9apaxhaena4f8ykeoaxvno1v97s2ozkwvrrm3jkagxihpxhijejxgg' );
define( 'NONCE_SALT',       'mnuxmn2e3bus6h8nqsss9ouml5aw6i9d0kawuvv7o71npuv7ajmsooxclihgwzmj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpag_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
