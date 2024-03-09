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
define( 'DB_NAME', 'digital_marketing' );

/** Database username */
define( 'DB_USER', 'Prerana' );

/** Database password */
define( 'DB_PASSWORD', 'Prerana05$' );

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
define( 'AUTH_KEY',         'Z${)$;tez20Z[[W?`I}]8Nw+_4UmLgH.gJn<dh$$KLaF4cRC1GPOTzE{sZlj<+Af' );
define( 'SECURE_AUTH_KEY',  'm1 XK?i.EB[^R@Y!@02w hm&_!fTk/EM{4kw:QDry]})E/%NC^~]Je~)D!cYu/(O' );
define( 'LOGGED_IN_KEY',    '[l+y[SglKqW20.%fettFQwWG`#2zkC[>;9u@?U$LJzCg>KJDO0Wt1( ]z%+/:All' );
define( 'NONCE_KEY',        '.]2gbo?LHP@X(p.c}xH#2RfpW| }m/7%UWHn!^~o>UqhCN.I`!b4(A(Y]k/^MW#X' );
define( 'AUTH_SALT',        '#&<;Z`zW9EQ3e8MB7tqq*vL&UX|;bQ%+^sVqKb6tee@?5%?K@N.O*shugJ|6Z*>E' );
define( 'SECURE_AUTH_SALT', '*s[#]($If7k09)] bIwaKynDS7aIBAgvsw{]+_2[OXzi<[vJy]06-H|OwZB+jy=3' );
define( 'LOGGED_IN_SALT',   '*r(~fMFAV5mi6<$]l=ZX{lx&MYd4b(Bvg$lp}i5?oGM:ofiiBZwb]g18p0zoF_5u' );
define( 'NONCE_SALT',       '0WT-y-Hij]=F!KeUZ`1^i)+]F+63#?|9t}T5LF`n_C&H4Ie&keJW gD5X(KwXI;B' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
