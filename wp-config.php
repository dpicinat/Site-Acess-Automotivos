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
define('DB_NAME', 'william_bd');

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
define('AUTH_KEY',         '&QbJ*XT)L59V^=],u%;NLUye*VgKhps>rp1s8#=,]s#x~@7qP)H]lI%w[SLE>nI,');
define('SECURE_AUTH_KEY',  'vC+3M;5v|9}e IsS6_qzsB6:Yu@}PD*qnpAf_WamXyw~H4xr2rWJ_XeOO-yXHZ;k');
define('LOGGED_IN_KEY',    'R1N48x|E}(_enz^3QICR~G%f,8P?it`!s|Ph,lbI.7!(jeyK@:kh~,1mN7YgV:_%');
define('NONCE_KEY',        '#@^#T{PWwZ({T-yX`N.NMnL6#5,,~rXABC}+GN(EMq>/wt{U7]ZphLP~=Y)Ep$QG');
define('AUTH_SALT',        'xt({tWbwyfn<;5^KM{g9MFI%w Y?5LG5onomuno|o0s:lP*67hl!b0#87ou%3w7!');
define('SECURE_AUTH_SALT', '(*Xj,nwOi(hwBR6O,{tO9 q7g<kq3$y;*@lTbTx|Yv(J4|WU[Z.H:i),Du<o-i~S');
define('LOGGED_IN_SALT',   '=szPw#wTt}[3hxO =f;ZV|}hR=rr8)A!=K2e ur3YSp}9Ke-/QETU m?sD@HUjL.');
define('NONCE_SALT',       'eL>eXZ>*3eDL0k6YGHg- eswWzd>Ps]QJ9N.K1@B%J>g0iFPhz$+wd81|)0~z1@0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_william';

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
