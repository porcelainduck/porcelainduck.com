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
define('DB_NAME', 'porcelainduck');

/** MySQL database username */
define('DB_USER', 'pduck');

/** MySQL database password */
define('DB_PASSWORD', 'pduck1221');

/** MySQL hostname */
define('DB_HOST', 'hithere.fatcowmysql.com');

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
define('AUTH_KEY',         'J5oH;!bSk)VWorUDN.6sFd-_*9Z8s|A=m`0_,+Z;g [Nieq=EFG1k36IW8|q?IbJ');
define('SECURE_AUTH_KEY',  '(bSbuVx0PbLwFtI^h$y7^e}|(k7O*7*3eLjGM>$~^UAXtDXEx!5va_:#(A|-j?Qa');
define('LOGGED_IN_KEY',    'a#%G,|^b(+PMe3|@]sE8bZL>L-(<- !,.BshSmi|$(Z 9 3T|}hkNKXCxL}zcN!l');
define('NONCE_KEY',        '-`abO3~u+[Q{L%ia]d#j`GKJ%VNWx;#KP_YSo%e7#|lSJI]MFYRBR,qj3,o&,nD_');
define('AUTH_SALT',        'wsA6*YPF[~g)[g}4I4H%R.1)LewVX)+oHf[1KL-!zSfK[QJp~o}1VJhiI#bxMM1h');
define('SECURE_AUTH_SALT', 'nc+MpaIa.7>xuNBc:|;3+8+zn-Fqu~z:ebcsUx--@gI%/I:pu#Iz+v.J;]H<I{E8');
define('LOGGED_IN_SALT',   'F:&l$i98l{yRC0zE;!--9qqT;-K-]C/!.bT]YgDTh&f{~v|${=4%E+cbxsZlK+|5');
define('NONCE_SALT',       '+KB0X|av5-hyWXc|z:=(Q8Y*v<yg.u}p];:[W=,Vh*L6zZPWMn_gMklb&vjU VeU');

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

define('WP_SITEURL', 'http://porcelainduck.com');
define('WP_HOME', 'http://porcelainduck.com');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
