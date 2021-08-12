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
define( 'DB_NAME', 'db_a2kpwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8zhtCEh%l^CqHbQ,6&#0UkpWzdG0sl-2lsgxI<n?E GqOha3{m^@= `9@J1(P|]e' );
define( 'SECURE_AUTH_KEY',  ']+OBy$EAm<ME@l_>sR%F%U>U+io0!sOfUKs*IaC74%{r6Ko=+NDk[1JS<OQ+J/+D' );
define( 'LOGGED_IN_KEY',    'DZl9V!X,vZJmr(D)Tq)AI>2?l3>]Ko)_^vW_5lPbs7VSq(HyjN|W|>I-qZXL0lqE' );
define( 'NONCE_KEY',        '(+/%qtyE^=Me]a?CpPgViWzbtc6iq.XnWr<=:Tg j5x$]5/B*s-?Qy6EZE>&3=O/' );
define( 'AUTH_SALT',        'vcQG6{6GM?mo7nB;1*JGG(g&+)%9guC:r~^x9:6C-3S|h8b$I(]/OUL-eb.Pvp)n' );
define( 'SECURE_AUTH_SALT', 'msX<!-t:>H`U |*(gNUb9#r_&Dc$k*rS[(Q(p2A=Bh4Sh:PC0l8P|Ntk&eC uibN' );
define( 'LOGGED_IN_SALT',   'g~J6NFYg:@At!QZOB5CGMb`JsaHfI+Gk<Z3L1^T?rUK02< <qe$+PwW*BWX*>@-d' );
define( 'NONCE_SALT',       'r#^z|A;X~bSWH}rM0Hq?-0|0j(h[[7AO_ZHatRj&yp>0d@&!9th}~qvnz!6nMolR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'a2kp_';

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
