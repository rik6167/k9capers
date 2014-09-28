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
define('DB_NAME', 'k9capers');

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
define('AUTH_KEY',         '~|[G}/sk0tr-()_i_;h[#Y>.`+jr[^pNaanN*Vj]%-jjj<VEKXblngM)KKQ}Xh9-');
define('SECURE_AUTH_KEY',  '^Qm+6E#*c!VUi7?J{PdPa7.g_l<bbp5(YB/~RX6VJd>.{.0,5<+tYf3UP#oaNI|$');
define('LOGGED_IN_KEY',    '%Q!b:Yyg68@Jw1QAJ;?tPgmnZ]h*02]$rXsiE-GQD|;c1m?oK:`a8p(seo R4X)1');
define('NONCE_KEY',        'xN9,;vF1snL<0&yq`C%P5d-J3w{*.Abwak [u4r@5(NEfF.N}K|#a-,](KVsE/FG');
define('AUTH_SALT',        'N*.>42-hWnf3|rdPWF)&gK#SF}c)T$C$.$9S[^gB!5E2L2I_keaU(dw-1.?O.$HM');
define('SECURE_AUTH_SALT', 'o#q]c){ O0^v{A-vx)?`A[sF*Y*A{n-f{WCIX_b^wFdbwdjoRY/DU|F.nrgBpV?!');
define('LOGGED_IN_SALT',   'yzd>O.:1NwC.@oaO6/[/-|J_DL?;By SZYRbv>h)s`?Aalsok@{VZ-7fe|=?5ku4');
define('NONCE_SALT',       'Jf#6~p[s-~1E-RkG+>m`aY4-E3AM)NM7]m,/sj,2{u->8#BZ-QSE.!43{Om$lp#q');

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
