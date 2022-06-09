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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ironvers_wp998' );

/** Database username */
define( 'DB_USER', 'ironvers_wp998' );

/** Database password */
define( 'DB_PASSWORD', '75Sd.S[p9p' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'lcnry1ojnfbtg4ehxayrsi3n2yf7zlnk94mauxgjiagvhdxzullunvde550id5xy' );
define( 'SECURE_AUTH_KEY',  '532qhendkh0kuvgebt1uis1onp5qq4f9veawe7dw6be7wzcxoj08ebdus0dzfg6w' );
define( 'LOGGED_IN_KEY',    'c4hyo0u0xxgt1ugl3nnxwvv005zkrsvt27fk2hgpnunmog0c1097h1iawgkehp3z' );
define( 'NONCE_KEY',        'uygfhacwvurbioxu5rokycsi0ua08tkzq1zld7yjimzvve9j3g6b7dymbeuj50xs' );
define( 'AUTH_SALT',        'v1lgwn8uvuf80r6da1vafk9g1pbtannnwhjqjrkn6cpraaw6xnikqgrwqyj76fhp' );
define( 'SECURE_AUTH_SALT', 'y66dymthcbfg4kr37foabsjf5ynhxzpqaqdgtyify4vmfsgyhhekwrlzjgqqrxeg' );
define( 'LOGGED_IN_SALT',   'cm6bcmnfvjc9uq2f1qz9eft9jpfgdzoktl4ffaratzkajmlp3bjdfkt0t3bmoptj' );
define( 'NONCE_SALT',       'xcccynogmfu8ktcbqerrx9my9zwzgu2slidjtodrk9biavz9fwabviinjde7b2dc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpon_';

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
