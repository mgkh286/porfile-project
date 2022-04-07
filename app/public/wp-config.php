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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M92hCJU5bLbzCKSPNd9DXH9N0X+FV7l35DEz5Si9tUOGrJUBFQVLaqjIJ10jpowOwBf9xBZaEqj9uW9Av9Za1Q==');
define('SECURE_AUTH_KEY',  '8IDG8efquM9I7T/shrhix05ZiBR8CuCASqSh+8Qv/QTDghli6nAgjsQv+c9bguYv5/G3Quy2icUOlq0bhbVRzw==');
define('LOGGED_IN_KEY',    'llV30x7rYFGC5ZyJHqZq00ovPVg1Kwb99dF8cS0pvRa9qRAz+qk/mVRxUmphEjHgymgA46hZ74m6qfFz1R31fQ==');
define('NONCE_KEY',        'UxXWx8ONFDZNwTw50dAPVeU/DrvXeI+2pHqAKpZ7fBfH1g6SAeOlsuVkBsfS6gi/FhXjEyTOM377SKB8X/dFOA==');
define('AUTH_SALT',        'EXS3DsodK1JyrPKZcBsSUxWWbtwLhcil0zK0lo6UjqqrJpHqs1CWAbRT31K1OEKJ67lfrb+WB7oNLTfNTska1w==');
define('SECURE_AUTH_SALT', '++XY+mWqHR8zvKsj/PPD+ujS0761qaNiQhbXbsDjwKb8eTc2RHd4CkpWWX/hGEdBQEbMotOKH4ViUM6Y8wXtIA==');
define('LOGGED_IN_SALT',   'pu7Q03njnzX+Nr5eMpPdxZPAygm70q6R69mQu+hhDSUx9wuVBwOZwvKOxaLMvyeGItl6lhUfWA0nCo1ti8LkSg==');
define('NONCE_SALT',       'pQLoJffy7edrr4yWIeseT5urIfe8TE6osLlnljvZ+ISVqKUiTy99/O9D6gkvZ2lfNr6vuZiUEcIwaC7VSisioA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
