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
define('DB_NAME', 'wpTemplate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'passwr0d');

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
define('AUTH_KEY',         'C_ze.vd;eI6)IoR }Z|_*`Et,FjWO!rR|#O!i)1._fH2E/|Ne-L3@5Q0:&$kf^W8');
define('SECURE_AUTH_KEY',  'c/Obu|&>iyBN/gUE6HOMQB!Va4NrZengz&=Nr*r{?&0#=oo$WZfCx,A*Y84jz_yY');
define('LOGGED_IN_KEY',    'X<r, *[9udbG<C4,f+-!zo@heJa#RakV_jEg+>mk`@SH]^}-!ESl.VrOl#:Z]!TC');
define('NONCE_KEY',        '<)3Myg7-{L[Ie$|[Ta_}8py|<nVeG/2;r#F%V+2SH#i3R+I38Uu2vaUO[lE^$T>d');
define('AUTH_SALT',        'MJ HbE!B/4a]+<h0.5(EYAXhjA-?b:UmNiC%wWjpkbEBVbxN+=?>KJJUds,d.lij');
define('SECURE_AUTH_SALT', '4w!e-AjudAFUY.+Ou(XcvdBsUG_#gG0!!ujO|dwF]Gg<.f05<WkIRijsN[3kQ&BZ');
define('LOGGED_IN_SALT',   '0$M,Aj-t-s=R1oF+(|,!p&qV)QeP2L8]xf0 }jLc_Eu,&qdbej<fj2Nb Qv9 aUF');
define('NONCE_SALT',       '$0Q,,8Hot*SE,?}R0MT(tz.)KO+LAl8j!BW{2H|,x@Z,j#4e67qm]8)Oq|4wSpUE');

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
