<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */


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
define('DB_NAME', 'NEWQSITE');
/** MySQL database username */
define('DB_USER', 'qualityze28jan20');
/** MySQL database password */
define('DB_PASSWORD', 'qualityze');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',v~L30jBHegc@4[yVCec-/+hy5TxE_zVQ7tB!?DJ{&4O!@ad=kf~cG1||>bvn8E{' );
define( 'SECURE_AUTH_KEY',  'sIjwSGa]fi@PE4gT9QL)TvUf&LF2aPP8`D8HzL_IM-AHj9Y&]ecdl3Kz4^k)G~(/' );
define( 'LOGGED_IN_KEY',    'M9+E_OWbS(>1CXv[(@0GLp]@]Fm~][[{U3YP>g}3IbD%AeX+bo?<seAt]|kKU}@.' );
define( 'NONCE_KEY',        'PvF5INa,$ +L!8cyP3<nyA&rm ];y*.gN^l7hS1VZjGpNz@u)09PC,c8^>2jr4;3' );
define( 'AUTH_SALT',        '/v%fK&LFM4,%f%|DzQ=;]KZ@j93*FZ~xE2e?xc~/TrCYykh#pN:|X`|v14w#3xr/' );
define( 'SECURE_AUTH_SALT', '?*vyo:suMr1WS$bH@$jQ$FQO^N9FJ)SG@yS28W`OAd6JuT/Pc4Nie&cv$_^gGTQS' );
define( 'LOGGED_IN_SALT',   'R[TRM;Bp)N9_7M??kDT654*udYrzXt-5A8Ra<IsYTU1I!S1}p|]2+=[QBL0=.fdL' );
define( 'NONCE_SALT',       ')7t1?DVZtL9/2/JL%q>t5<(Sc9R8)9)Z`5XSt((/0ELswlNp-Y@z]6QOW6mU1Pa^' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
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
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );