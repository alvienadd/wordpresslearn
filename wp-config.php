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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/F[C(Vy7!q&e]!8v2YSrGwS*p)BYx3t9,.ooX9>Y6cHAt0%Lur.#ze}J?6$Wn-bl');
define('SECURE_AUTH_KEY',  '6aCx)_2OL{gQ/=Lm0=Q$mH$~^o@655vLfWD)Rc~rnFc,&M_rvQ.{0Jro$tw/_pl6');
define('LOGGED_IN_KEY',    'LA*81.6T5dty{pCrz:p^cSHtlKreT1>Z`ymWY<Y[3^<d8)M&lZ`<o=kW/OmyaH@4');
define('NONCE_KEY',        'CoQS.[zc`_4L?O+_}mZ5dc6;L6BlX&P4u63Wy.f(s5LA63UjF72p7ypwuJ[ct{i)');
define('AUTH_SALT',        'M>rJUv,4]:f0{MBPTIpy!c/rj@aI,nLv[8C({s|VH9 U{3;f^iS!TE<]p=zH0ad~');
define('SECURE_AUTH_SALT', '2dj,RtF(h?/95m/b_4!a_9w$:3UKE*Qu<M8RB<K$2|GN8@pvVXPUX91ie77kGX0D');
define('LOGGED_IN_SALT',   'n6^E(C::J:j7;26/yKp{<rI8B{<R{pD9%l60NlN9.y_u/_hoqH4c:L~C`9l6SyzK');
define('NONCE_SALT',       'cjfgnfE/@$tV&jhpgjj3]$#--zURa^|@&OpK-y#%E4h+56n.aD|La<MEBb1)?nb]');

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
