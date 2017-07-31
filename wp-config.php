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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '&7TaV*5jq85% q3~G=49R4Rd}tO}{W(CnIz) XlZzh0rQzhwg:^1#mUys(1GSb5!');
define('SECURE_AUTH_KEY',  'U?W]3,IfSvS8nFyx974BA /3:nh}|T]OH9ol@`CSJ2oj:upIkG[?J2q)Ez yG/Y_');
define('LOGGED_IN_KEY',    'rq}|1W*l):s@!N-|N@}RlY}T9*WL7=k07bQT>Q$WB4Y!pVoWltL1pd]ZhHp3vc}9');
define('NONCE_KEY',        'CgT%]S>7Usw;db#+Cii$4YV9(6QIi67y_,%fQ#|!Dn6uVV~Y/@;U%(-TG:l4`Uj0');
define('AUTH_SALT',        '*ZZwN].>!/I`Ia&m<A)HyuIbX8BBd`{4FYLKb~%4Flw98+^:{t[j#*iY%HpE*cFW');
define('SECURE_AUTH_SALT', 'r;04Tc/H+ndA.]Ofs>)}F]cI?DgPV}prtK7IIZ8l:KaQG+1[E*n(eX<:z7JLnajK');
define('LOGGED_IN_SALT',   '`i8n7LF{k+)I+7K-1f==(S;3aX}RH4x3fHAUA@nw`jZS3`2ejT~]eQN`U#HI?R?2');
define('NONCE_SALT',       'ttPt^1|R>rxgB^[auCJqOLE)+IuPgbX.LJ*+*K8;dnA(2zF?pUfUrJf=Hp2yjGIa');

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
