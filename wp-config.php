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
define('AUTH_KEY',         'ab]FZpl7]M]Li$W6}v#bse6q$i`Wo%NeALXc[dnX*[E0*t8N#[~;4t*e3{ZA@`+M');
define('SECURE_AUTH_KEY',  'v@c/^F52jD97(iuyNmQ<zG4;:Y^p6VlGlV&H2Esc9K+cwmJy=B*RQb8F]&}=al$>');
define('LOGGED_IN_KEY',    '/3jtC|- (q$0;xFK*s2(>8V+1R6Zbn8IxCv(,WWm#:i7Ajb8/$yCHkEKM,WgzmCL');
define('NONCE_KEY',        '`<!6@&][RxJr+3{}D.|(X_sWfkBHGH[~pc3NY!ww)b[5aEcM+p?fyp3c9tKn`Dcf');
define('AUTH_SALT',        'p|7NH0ui SK$`;)b~*F@x],?Nq?D#Ls(!5wZ _gy2uJ=Du9rO`8KxQti}?]-y59&');
define('SECURE_AUTH_SALT', 'oE.ZhA[=>4p9/K@%suZ1MwINq1)zx:Rd<nc^K7[>$hNc X{);qHiw[P?}-CeqMqL');
define('LOGGED_IN_SALT',   '%?~S9$rk;KCK8&=;l].0t/t|c;jH+|K?W*5,l3c[EXAX=O ?gi*,@>dHc<},qYn;');
define('NONCE_SALT',       '7s aZi[~KN7{ft+S#+ZT,dl7uNOG-h3cga8= C dvL~78;ysI*?^[S~>^(8-Eau3');

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
