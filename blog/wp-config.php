<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'remaxuni_blog');


/** MySQL database username */
define('DB_USER', 'remaxuni_root');


/** MySQL database password */
define('DB_PASSWORD', '@_sodedeh22');


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
define('AUTH_KEY',         '> JcZAI(h/:7<2J+(8:*WvJe cXSIbu43R:S}?Ln%IQ_ sot+SmprY<b T-kC#KA');

define('SECURE_AUTH_KEY',  'y]-Iw-b:{|D3mm$uxs7&:kPkr&lZpR]!{+@a/ftaZeAe`Cd;QSc-pDa;%;=wkINa');

define('LOGGED_IN_KEY',    ':Y?o9)BO Ei~bkUCK1B#&w@:s-C4P|.k~y!BIE)d7 a?%/S+Y-MyhR+lKzTVMA,^');

define('NONCE_KEY',        '|!GB]k6%s>R%{Z }4ex#0{Ijre|-N9>Bs-dG-%sboy>=U,znp$6]cl{c?^:>H^87');

define('AUTH_SALT',        'x*U|OU{iKX>)#bciNTwR&Oe,k$*R0pSqhJ_x3#t+%!9;;A&%d9KG9WA5Oi,;2+P!');

define('SECURE_AUTH_SALT', 'k#-:[zJ.gJ,*xHsNB7]!DIpfM6[u%|yt|pO;B+(rV5vM.Q9131pP&Y%^o7 n0-pZ');

define('LOGGED_IN_SALT',   'w/*wGTP$~9ek|h05sxhn`x;Q-hda^:>w`r.Q`r/RS_CRa<d0pgy[-L53b$}vY~.{');

define('NONCE_SALT',       '2e>xSpPz1RjGvQKl*-+S&?!?Vp`LjaN8z*gn[e9oMz}lf#*0|,%Q0`*xv$Jr;.a=');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


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
