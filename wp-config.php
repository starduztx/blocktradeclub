<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'jPyaKh4oJEGVKB8teViL4CdMDE6ozoDll2DvuH96IG9rA7o4aMZg13gd9mfAvpC6');
//END Really Simple Security key
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_40012535_wp701' );

/** Database username */
define( 'DB_USER', '40012535_1' );

/** Database password */
define( 'DB_PASSWORD', 'Cp)pY@255S' );

/** Database hostname */
define( 'DB_HOST', 'sql300.byetcluster.com' );

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
define( 'AUTH_KEY',         'uo8rx340ynnjvfwmkbbdeoovtn5xdshsfkgd9n8zz7mf9iivll4ygpmzngdtzmc6' );
define( 'SECURE_AUTH_KEY',  'vcap7aftiapgvdwnr5rdlodban0vl1qu6et31yt0fkeqmkc2mzleipdif0jexlip' );
define( 'LOGGED_IN_KEY',    'ozlkawvx9lbkx4jkfxnmazuvkkslph2tdo0ycgtsldh4hbibugkaqozloxngvuwj' );
define( 'NONCE_KEY',        'p9jm4mnxazpduuuvnjlox7zi1mc6aaza6suqddajf4tauazdy6tyqtlrd1i5mcea' );
define( 'AUTH_SALT',        'iuqrrgcxtuqudyiwrfrt32spyzmmdrspqxnk9vxn6622vgxfbasakmv1jx2qymoh' );
define( 'SECURE_AUTH_SALT', 'k5ihuky1obd7ezahtrewpijzjj0djkaldvjwxf9cw6vgyedahatdk0jx9edbyepc' );
define( 'LOGGED_IN_SALT',   'j1chdaichwwz0c7ywreqcizaur533u7id0zw200chngx8gn0fw01euft5cw08kxf' );
define( 'NONCE_SALT',       'ylpvrenqc2lfrng25yokzalxx4oedmbwzrmftifv2ttzlwrcqpulzfwvdeml7kbz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wptr_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
