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
define('DB_NAME', 'bingo.ir');

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
define('AUTH_KEY',         'v ^W<}>H+[2V!;]t>fAnN.vnQ;`bbTR(U$a%bo-$4<SG58.RB+E(d?eG+2Fc@hat');
define('SECURE_AUTH_KEY',  ':eE9 u-0`u#VS|63X+Fsr>!B>k^6>;02x{0Fnb/0DQVZ^,?&P`P8US&s*_ss@_uE');
define('LOGGED_IN_KEY',    'UAG#twgK9i_ TqBc*Z6;..Zfs7Bg^&rBRGTf*oddvzmiVH( ^?~5xPh{yF3{FnX*');
define('NONCE_KEY',        '5Za]VBp}^pO2qItQdI?kGSg~@@n?LL{^9]r@u?H0`h9x69Z3S$>G+2#,18cO%*4q');
define('AUTH_SALT',        'GrA7Vn/&*Zywdu]m6sRh2}rt9uUe,)X:lA<C]e-=@I|>c|8e=L.9aT|*Mk#7Q8i]');
define('SECURE_AUTH_SALT', 'q<$X^;l#u/U9W{b_5/&h<:?.-C]-].sj=qQq<#L~8HQq9M9E%K]JVgI=ay$~Vbr;');
define('LOGGED_IN_SALT',   '5dw~aU#jg+4ym5<A5Cw TypV`=Ib|Nn!23nY~PPJ30N{A@zbg8Ja30oMetj{{?OG');
define('NONCE_SALT',       '>gW<Hw9vK{b;$;Y)Vu+_^>[yF-$0J2@h/?&wcVMEyBLATxUCTk#cjayD;n[/ilwm');

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
