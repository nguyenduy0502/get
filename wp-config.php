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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'get');

/** MySQL database username */
define('DB_USER', 'get');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'X>8NI9.p2F85G5pZ5R4gmRAv..8LYYuXiR})/`fPPK}^/W16M,e`k{J=TDx~Pj}3');
define('SECURE_AUTH_KEY',  'zCujq6F4Qw:=&L8vDillRm):SRxq}=K2+?<wWh9McfDkEgOVEXGV,mH=|RDgNOu0');
define('LOGGED_IN_KEY',    '+D:U%s.%lVwS1Xaj7Hq?c=%Tcir[$$3^ >Hhc_7@kc9HTNmI;4?6o}JdWoP1!6-M');
define('NONCE_KEY',        'yub$/OUn7-^E#|m{l_MxS:F(n7P4xLWrj]:>JK,Mj v$buW;T)6Ra(WD(ybQS{6-');
define('AUTH_SALT',        'FlJP+}DHMD>11X TV68c$/8Sn2+Y2s#bnsEq(MqNnU3+YZ~#D>Qj_AgQZ8R?<Q(?');
define('SECURE_AUTH_SALT', 'YD|T-3iLW$WLj,|}nq(|45EMm38>;e%;Bey-zE6/9<P~CH_^%Wb2{j*gi]51d]Pr');
define('LOGGED_IN_SALT',   'tVcZ<#f]vX`IQyu}|FeD;1JO3wTnl_B!:y6RYi^8:I=x1RnjN|PUt[%k9&d?L]?[');
define('NONCE_SALT',       '1?p(M NzF``17UoBnx&]i .WuT4hZl!G|RC3!|^Y$*W2dwjM8@/*$b3B.H jAp%e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
