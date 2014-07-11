<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'innovation');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-%lK&|;D}|0 ,z&/--@+TV8H5,Q2$>--L+c(P?D)WVH&n-kblvzCQ4{_z&O,8SH3');
define('SECURE_AUTH_KEY',  'yC[#6riM9GCFn:AEg *k6/araWG|R?fRe(4:AH2f_|ii~ ,j:1%iO.t5VXLGRs`*');
define('LOGGED_IN_KEY',    '$^V!zma]$ <k}KjPpU^*yC@5NKdf+AfS?GdX`G/p.YI|*%%~5oVC[ N+-e<3@|Cq');
define('NONCE_KEY',        'jI4LG?ojP=zT%Wtf7)MLJkBi{GKbw}|gaEG-)./FF#5O[]M!.{}sj;n7R.%l6odb');
define('AUTH_SALT',        '/^@m.(>(-Y:^*^F <QaCICI3z;IvP37/_%EY#V5pnIV5703A2iC}Z|&k)QTUAQ|,');
define('SECURE_AUTH_SALT', 'Eg/o+0DR+0Lyn}+yfFh;,|Hu_K_C+cf=i$YHq75hijJJaxst*<K&7ZL8zqJvqo d');
define('LOGGED_IN_SALT',   ';VbDPouNdB@bh2&*kxh-}u%qR,XbQ|w2{},tbsXLisv!:k,A)^P^mj`o>fA/p<tK');
define('NONCE_SALT',       '63KJ+G4+?j($32uV3f/]A#@j,5TOmPWgt&mf%er=%p+/H_;A:!GMFT;CVq=u{!E}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
