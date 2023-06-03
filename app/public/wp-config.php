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
define('AUTH_KEY',         'RVRmAkpJHRa9fCsEG67aLvR/tEJBhSUgv5+O2saRBx0/Qo8IDFi8/yF/RCQ4YseCPIPWI6pPOMMFjnra1rf12A==');
define('SECURE_AUTH_KEY',  'xIHi/AcqZIIPG/OZhE5tQxpY++GRJkyDRhLbNQYx9V53L7MP4RlaY2EIkwsCJEmOGsbsVAvaxZ+jw7X1e2rrvw==');
define('LOGGED_IN_KEY',    '8bNITrMUw6kEbaPQAw0zI41sy5QI1ePO1KQY1HeujqWFVYFhbaxw4t5bZT3PKUcvKYhWphcGpreFOOQjDpQONA==');
define('NONCE_KEY',        '/MYZFb6PUk31fCJyvZQzT3uAb4kQ4uN7B5O3ftbP/Bdk+gqDji7VYu8c/aptMXKrttkLeAAcRdSb6kjpMQw29g==');
define('AUTH_SALT',        '14PRLFMrILBn4sRPzASxw+Dy8+NLoUNSoXpeipDbxMphxHYAI1fX9LzYOjWk/J7wXGQC5m7AFcPILxIvPXz+mw==');
define('SECURE_AUTH_SALT', 'eD2zFT+RNPtvnNY7fN/GUpo796xu31XNWM/Nnc4WhdzhTD7or734tVVxHhjwGRanJ33cG2ASUqVoJAIz+dSPNg==');
define('LOGGED_IN_SALT',   'Trj96oJij/VCheo7xYO3B1UzXy+K9bAGflWzXAuD74cA+ckEd5u3U7QqZRoNY4HJL1j+yCPFmEImKq7oRJONLw==');
define('NONCE_SALT',       'haX2XcwRFI/Nejzz3W+iqIa/WJDwtvLeILvqSUH7GH4PvR9EqC7QCMzG6phQhhMvmMHWklhhY72DCdnIy4wyIw==');

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
