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


define('AUTH_KEY',         'wIKhXu6APlU2jVkOtgBLSCKikycBA3E6cCK4OPW1yZfN/RdyegQKXPAWQ2JdWcsotwXd3I88z37DAqdVnYjtCg==');
define('SECURE_AUTH_KEY',  'KLMFVMMl9iVUiHgZuF613EXN0TUJW3l1PmCbDug3QsKNd+A45dSDH98YhLhKVVbbqr9NA0kG8Feby5UJaKLdLg==');
define('LOGGED_IN_KEY',    'fa5wWkxpKb3sQG6iMBXHZbg2SGpczncpHQhBDX0S8BBKvuNelOZzsJ0Mel+abpl/di/o0fiNdcBYuk0IvnEV8A==');
define('NONCE_KEY',        'c6ohOv+kEl+/ugR5DsPgWAYi+nwrqacZjZBrW1vwzOKNTwGJkcPOqZTUu7PLl8wpgL3Lh3LA6r50pzRqjn+SXA==');
define('AUTH_SALT',        '9JYTDgNk+wjYlDEpAuHUTU07j8ItcezMXCZC/ElvE5QRjg2w2ct1YQHwm2pBiXm4q8dr+nLh/3/OTYJwYjyDWQ==');
define('SECURE_AUTH_SALT', 'W3ko+UXdy7jk1RvkuvW1ZEI6tPwb6iAIwPqlnMYI28Nrdp7upGZ0b6f6OFIExZS5mXid0mF9L+hERdfv10yX6w==');
define('LOGGED_IN_SALT',   'N/cOc4QTY4Ki04VMx2GKjRO3P987Lmtfq5MgaeOBCkXHljpNmTF/q3BVmciblIUyqYV0d417Ea4wtLG37kB/jg==');
define('NONCE_SALT',       'mCm//WRoKxWXvfPo4PgGUBU+G4/Ry0aYp+lAwGlbhg5JHJo1c8WrQ95OEBExMqYcc3KThT57Jt1uI9XTfh9COg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
