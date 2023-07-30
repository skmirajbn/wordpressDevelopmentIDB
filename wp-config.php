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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressdevelopment');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'miraj123');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'E/<#pR2ZZMi{$z2tt}.,zKE%$`6WA^{<9(e@Ga.bE=)K.1|1k{dIxOPwKh|;Ix,4');
define('SECURE_AUTH_KEY', '?h7~/_ bIkm;#Sd1>]S:&}6$cpSbcm<Re00!QgjQ1OwB>^8nM%B`6Yq?u`{])7<)');
define('LOGGED_IN_KEY', 'jko0d,oJ0 dhLT)fm#RRvHaA.y6D[4tjS:mS!^_FvW[8;g(1*=nvR-e5JJ;SUZ}I');
define('NONCE_KEY', '$E-2b_SD=ZoBdWU-,*KyL8)vYO 9o`im}oXB$.?o.[VihxQ)X?37I~(D5ienU78^');
define('AUTH_SALT', 'XLHdey[T(Zs0uLY$z-)NSNEgX5h^H0G660LT4NsFcm6g?+}U>maY{nAQ&pXxX VW');
define('SECURE_AUTH_SALT', '!mc}p|Oq.9CCUFy_DW8PZpz}ZG(hKUldjH~WY@^R[kk&0! =oP-gF#XD%M)w(!},');
define('LOGGED_IN_SALT', 'H/Y} 7V6cCraA-!wLaeQc)pl~xsEn9&_<p7:ix>bnbZ8Pa5w[OAch<$bU)$?ndz|');
define('NONCE_SALT', '  ,`*|#`#,V?]jn,Zl*1?N+1tUErh4(cy>hx% |whZueN7n8O2l_89p$yW]C,,*J');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';