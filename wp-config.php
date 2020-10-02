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
define( 'DB_NAME', 'gruporoga_wp2' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', '+12345678+' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'qi,uyZmv~aD]^:wFjjQM*r! J[t-7nvwmUZi~Wj,*7Udyawc T6fRiijS5!iO#*P' );
define( 'SECURE_AUTH_KEY',  'Mky (n&Q^Ue:1@|kDL.M%#X;l-iH/V77|gTtkzQO[9gZ?wR~/v[8<*rf-:#LtyTO' );
define( 'LOGGED_IN_KEY',    'lx,nG:wNLv6hDH=)-?,ra]yTL[Ucw?xnnqBVL&P$U<UC72B44zTz6Me!/7Ikl7Mc' );
define( 'NONCE_KEY',        '-.}*[F.C)kaDym-xFWO6|Zg+#{u:{zjVf}]E_3(>D1~6N4wQX=Ciigs,wk<G(>W*' );
define( 'AUTH_SALT',        'm`ZVMKkn2O[1sm@qi2-qFku AjU^ sb}E4,=f^1t+zW~Y{1.>-;5&Q6JX8SOx5aN' );
define( 'SECURE_AUTH_SALT', '4[6<J+bK,3JjEt*Rd@Cl{12#m&9)<$?nhS`81gFK~t:~<2I{2@7R&@|(Xsj2Th=~' );
define( 'LOGGED_IN_SALT',   'dFHQ|B0HVNhTTf8MFutlLQu265~Mhj@4z8y;sQ-2]z=I.kI/Q$:eLViiJh/+kj p' );
define( 'NONCE_SALT',       'Y%yyCL+T#8]FMZKO5dPwXn5L+_HmHa;{#LoACmk>C^ 6l+mSmaS)Pn%x#GQGRog0' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');

