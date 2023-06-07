<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define('AUTH_KEY',         'GMpC1KokfxM6a3fJXctmYH2Z8wa8pgCE/MHcWPdHeBThTefwNGY46TuVH05fXOdb1F16tFX2nwV0kDKeYo64Ng==');
define('SECURE_AUTH_KEY',  'y6xNsWbjzqF/UUBJOj1R9TPl1aBjWcTm4PMPllFT3VAaszp5Kb6W7ClOF2tPpkqLRWBiRSSkjRAs1yFFyIE0/g==');
define('LOGGED_IN_KEY',    'KVRhBWV07n52myyZsaOleVeAaTeNSdSUEpjsmAxwxzohUlPYkuxMRbnzV3AX5WX8LHt5bfObawlpZl43BYWmSg==');
define('NONCE_KEY',        '5wztpiMATpmpb6UvwwKhB+MrH6ug3fI4pPuHlYESPfcq0dBmIVbMzZL+umqF9xXT3oVFv/0f9Bgc9MbunfJ8OA==');
define('AUTH_SALT',        'f3EBaehG0S9prtulmHIEIGBGbq90WSl7Ub9LTP7uoJatCcsGDSVekpCAvb+0HFQxMcNCFwnBV/+0rtaotzbHYg==');
define('SECURE_AUTH_SALT', 'xeYsBbUYk3Y2WhJOUsMo9rEG/txiJbY+y9ho82F2IixHs4Gf0ckegKRJQ2hJQRftd2EzcEcPeFjHSe9Tuj/6Tg==');
define('LOGGED_IN_SALT',   'e7U6sxMeFqexFqVuSgabpDfoNQ9nLrPyan+nZnUQjKtt3dWCc1nOwmEbLiGtWiqYlJh6iz8nM8FQVkCmb5/8EA==');
define('NONCE_SALT',       '6l3MurjVIxcUEBJr9nAz5oxOcx5EUT9D645vOM0Qh8co8bpnfoJnVw+2CUMPOfbrW0kK9Q/g5Si/pObgL53WhA==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
